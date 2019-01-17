<?php

namespace FileEye\MimeMap;

/**
 * Class for working with MIME type parameters.
 */
class TypeParameter
{
    /**
     * Parameter name.
     *
     * @var string
     */
    protected $name;

    /**
     * Parameter value.
     *
     * @var string
     */
    protected $value;

    /**
     * Parameter comment.
     *
     * @var string
     */
    protected $comment;

    /**
     * Constructor.
     *
     * @param string $name    Parameter name.
     * @param string $value   Parameter value.
     * @param string $comment Comment for this parameter.
     */
    public function __construct($name, $value, $comment = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->comment = $comment;
    }

    /**
     * Gets the parameter name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the parameter value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Does this parameter have a comment?
     *
     * @return boolean true if param has a comment, false otherwise.
     */
    public function hasComment()
    {
        return (bool) $this->comment;
    }

    /**
     * Gets the parameter comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Gets a string representation of this parameter.
     *
     * @param int $format The format of the output string.
     *
     * @return string String representation of parameter.
     */
    public function toString($format = Type::FULL_TEXT)
    {
        $val = $this->name . '="' . str_replace('"', '\\"', $this->value) . '"';
        if ($format > Type::FULL_TEXT && $this->comment) {
            $val .= ' (' . $this->comment . ')';
        }
        return $val;
    }
}
