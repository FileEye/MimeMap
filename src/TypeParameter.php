<?php

namespace FileEye\MimeMap;

/**
 * Class for working with MIME type parameters
 */
class TypeParameter
{
    /**
     * Parameter name
     *
     * @var string
     */
    public $name;

    /**
     * Parameter value
     *
     * @var string
     */
    public $value;

    /**
     * Parameter comment
     *
     * @var string
     */
    public $comment;

    /**
     * Constructor.
     *
     * @param string $param MIME parameter to parse, if set.
     */
    public function __construct($name, $value, $comment = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->comment = $comment;
    }


    /**
     * Get a parameter attribute (e.g. name)
     *
     * @param string $param MIME type parameter
     *
     * @return string Attribute name
     */
    public static function getAttribute($param)
    {
        $tmp = explode('=', $param);
        return trim($tmp[0]);
    }

    /**
     * Get a parameter value
     *
     * @param string $param MIME type parameter
     *
     * @return string Value
     */
    public static function getValue($param)
    {
        $tmp = explode('=', $param, 2);
        $value = $tmp[1];
        $value = trim($value);
        if ($value[0] == '"' && $value[strlen($value)-1] == '"') {
            $value = substr($value, 1, -1);
        }
        $value = str_replace('\\"', '"', $value);
        return $value;
    }

    /**
     * Get a parameter comment
     *
     * @param string $param MIME type parameter
     *
     * @return string Parameter comment
     * @see    hasComment()
     */
    public static function getComment($param)
    {
        $cs = strpos($param, '(');
        if ($cs === false) {
            return null;
        }
        $comment = substr($param, $cs);
        return trim($comment, '() ');
    }

    /**
     * Does this parameter have a comment?
     *
     * @param string $param MIME type parameter
     *
     * @return boolean true if $param has a comment, false otherwise
     * @static
     */
    public static function hasComment($param)
    {
        if (strstr($param, '(')) {
            return true;
        }
        return false;
    }

    /**
     * Get a string representation of this parameter
     *
     * This function performs the oppsite of parse()
     *
     * @return string String representation of parameter
     */
    public function get()
    {
        $val = $this->name . '="' . str_replace('"', '\\"', $this->value) . '"';
        if ($this->comment) {
            $comment = str_replace(';', '\\;', $this->comment);
            $comment = str_replace('/', '\\/', $comment);
            $val .= ' (' . $comment . ')';
        }
        return $val;
    }
}
