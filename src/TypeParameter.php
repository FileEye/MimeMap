<?php declare(strict_types=1);

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
    public function __construct(string $name, string $value, string $comment = null)
    {
        $this->name = $name;
        $this->value = $value;
        if ($comment !== null) {
            $this->comment = $comment;
        }
    }

    /**
     * Gets the parameter name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Gets the parameter value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Does this parameter have a comment?
     */
    public function hasComment(): bool
    {
        return (bool) $this->comment;
    }

    /**
     * Gets the parameter comment.
     *
     * @throws UndefinedException
     */
    public function getComment(): string
    {
        if ($this->hasComment()) {
            return $this->comment;
        }
        throw new UndefinedException('Parameter comment is not defined');
    }

    /**
     * Gets a string representation of this parameter.
     *
     * @param int $format The format of the output string.
     */
    public function toString(int $format = Type::FULL_TEXT): string
    {
        $val = $this->name . '="' . str_replace('"', '\\"', $this->value) . '"';
        if ($format > Type::FULL_TEXT && $this->hasComment()) {
            $val .= ' (' . $this->getComment() . ')';
        }
        return $val;
    }
}
