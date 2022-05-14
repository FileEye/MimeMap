<?php declare(strict_types=1);

namespace FileEye\MimeMap\Map;

use FileEye\MimeMap\MappingException;

/**
 * Abstract base class for managing MimeMap maps.
 *
 * This class cannot be instantiated.
 */
abstract class BaseMap implements MapInterface
{
    /**
     * Singleton instance.
     *
     * @var MapInterface|null
     */
    protected static $instance;

    /**
     * Mapping between file extensions and MIME types.
     *
     * @var array<string, array<int|string, array<string, array<int,string>>>>
     */
    protected static $map = [];

    /**
     * A backup of the mapping between file extensions and MIME types.
     *
     * Used during the map update process.
     *
     * @var array<string, array<int|string, array<string, array<int,string>>>>|null
     */
    protected static $backupMap;

    public function __construct()
    {
    }

    public function backup(): void
    {
        static::$backupMap = static::$map;
    }

    public function reset(): void
    {
        if (isset(static::$backupMap)) {
            static::$map = static::$backupMap;
        }
        static::$backupMap = null;
    }

    public static function getInstance(): MapInterface
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function getFileName(): string
    {
        throw new \LogicException(__METHOD__ . ' is not implemented in ' . get_called_class());
    }

    public function getMapArray(): array
    {
        return static::$map;
    }

    public function sort(): MapInterface
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
     * @return array<int, int|string>
     *   The list of the entries.
     */
    protected function listEntries(string $entry, string $match = null): array
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
                return preg_match("/$re/", (string) $v) === 1;
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
     * @return array<string|int,array<string>>
     *   The values of the entry, or empty array if missing.
     */
    protected function getMapEntry(string $entry, string $entry_key): array
    {
        return isset(static::$map[$entry][$entry_key]) ? static::$map[$entry][$entry_key] : [];
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
     * @return string[]
     *   The values of the subentry, or empty array if missing.
     */
    protected function getMapSubEntry(string $entry, string $entry_key, string $sub_entry): array
    {
        return isset(static::$map[$entry][$entry_key][$sub_entry]) ? static::$map[$entry][$entry_key][$sub_entry] : [];
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
    protected function addMapSubEntry(string $entry, string $entry_key, string $sub_entry, string $value): MapInterface
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
    protected function removeMapSubEntry(string $entry, string $entry_key, string $sub_entry, string $value): bool
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
    protected function setValueAsDefault(string $entry, string $entry_key, string $sub_entry, string $value): MapInterface
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
