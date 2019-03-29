<?php

namespace FileEye\MimeMap\Map;

use FileEye\MimeMap\MappingException;

/**
 * Abstract base class for managing MimeMap maps.
 *
 * This class cannot be instantiated; extend from it to implement a map.
 */
abstract class BaseMap
{
    /**
     * Mapping between file extensions and MIME types.
     *
     * @var array
     */
    protected static $map = [];

    /**
     * A backup of the mapping between file extensions and MIME types.
     *
     * Used during the map update process.
     *
     * @var array
     */
    protected static $backupMap;

    /**
     * Backs up the map array.
     *
     * @return array
     */
    public function backup()
    {
        static::$backupMap = static::$map;
    }

    /**
     * Resets the map array to the backup.
     *
     * @return array
     */
    public function reset()
    {
        static::$map = static::$backupMap;
        static::$backupMap = null;
    }

    /**
     * Returns the singleton.
     *
     * @return string
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Returns this file's full qualified filename.
     *
     * @return string
     */
    public function getFileName()
    {
        throw new \LogicException(__METHOD__ . ' is not implemented in ' . get_called_class());
    }

    /**
     * Gets the map array.
     *
     * @return array
     */
    public function getMapArray()
    {
        return static::$map;
    }

    /**
     * Sorts the map.
     *
     * @return $this
     */
    public function sort()
    {
        foreach (array_keys(static::$map) as $k) {
            ksort(static::$map[$k]);
            foreach (static::$map[$k] as &$sub) {
                ksort($sub);
            }
        }
        return $this;
    }

    /**
     * Gets a list of entries of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $match
     *   (Optional) a match wildcard to limit the list.
     *
     * @return array
     *   The list of the entries.
     */
    protected function listEntries($entry, $match = null)
    {
        if (!isset(static::$map[$entry])) {
            return [];
        }

        $list = array_keys(static::$map[$entry]);

        if (is_null($match)) {
            return $list;
        } else {
            $re = strtr($match, ['/' => '\\/', '*' => '.*']);
            return array_filter($list, function ($v) use ($re) {
                return preg_match("/$re/", $v) === 1;
            });
        }
    }

    /**
     * Gets the content of an entry of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function getMapEntry($entry, $entry_key)
    {
        return isset(static::$map[$entry][$entry_key]) ? static::$map[$entry][$entry_key] : null;
    }

    /**
     * Gets the content of a subentry of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function getMapSubEntry($entry, $entry_key, $sub_entry)
    {
        return isset(static::$map[$entry][$entry_key][$sub_entry]) ? static::$map[$entry][$entry_key][$sub_entry] : null;
    }

    /**
     * Adds an entry to the map.
     *
     * Checks that no duplicate entries are made.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to add.
     *
     * @return $this
     */
    protected function addMapSubEntry($entry, $entry_key, $sub_entry, $value)
    {
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            static::$map[$entry][$entry_key][$sub_entry] = [$value];
        } else {
            if (array_search($value, static::$map[$entry][$entry_key][$sub_entry]) === false) {
                static::$map[$entry][$entry_key][$sub_entry][] = $value;
            }
        }
        return $this;
    }

    /**
     * Removes an entry from the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to remove.
     *
     * @return bool
     *   true if the entry was removed, false if the entry was not present.
     */
    protected function removeMapSubEntry($entry, $entry_key, $sub_entry, $value)
    {
        // Return false if no entry.
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            return false;
        }

        // Return false if no value.
        $k = array_search($value, static::$map[$entry][$entry_key][$sub_entry]);
        if ($k === false) {
            return false;
        }

        // Remove the map sub entry key.
        unset(static::$map[$entry][$entry_key][$sub_entry][$k]);

        // Remove the sub entry if no more values.
        if (empty(static::$map[$entry][$entry_key][$sub_entry])) {
            unset(static::$map[$entry][$entry_key][$sub_entry]);
        } else {
            // Resequence the remaining values.
            $tmp = [];
            foreach (static::$map[$entry][$entry_key][$sub_entry] as $v) {
                $tmp[] = $v;
            }
            static::$map[$entry][$entry_key][$sub_entry] = $tmp;
        }

        // Remove the entry if no more values.
        if (empty(static::$map[$entry][$entry_key])) {
            unset(static::$map[$entry][$entry_key]);
        }

        return true;
    }

    /**
     * Sets a value as the default for an entry.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to add.
     *
     * @throws MappingException if no mapping found.
     *
     * @return $this
     */
    protected function setValueAsDefault($entry, $entry_key, $sub_entry, $value)
    {
        // Throw exception if no entry.
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry_key}', '{$entry_key}' not defined");
        }

        // Throw exception if no entry-value pair.
        $k = array_search($value, static::$map[$entry][$entry_key][$sub_entry]);
        if ($k === false) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry_key}', '{$value}' not associated to '{$entry_key}'");
        }

        // Move value to top of array and resequence the rest.
        $tmp = [$value];
        foreach (static::$map[$entry][$entry_key][$sub_entry] as $kk => $v) {
            if ($kk === $k) {
                continue;
            }
            $tmp[] = $v;
        }
        static::$map[$entry][$entry_key][$sub_entry] = $tmp;

        return $this;
    }
}
