<?php

namespace FileEye\MimeMap;

/**
 * Interface for Type objects.
 */
interface TypeInterface
{
    /**
     * Constructor.
     *
     * The type string will be parsed and the appropriate class vars set.
     *
     * @param string $type_string
     *   (Optional) MIME type string to be parsed.
     * @param string $map_class
     *   (Optional) The FQCN of the map class to use.
     */
    public function __construct(string $type_string = null, string $map_class = null);

    /**
     * Gets a MIME type's media.
     *
     * Note: 'media' refers to the portion before the first slash.
     */
    public function getMedia(): ?string;

    /**
     * Sets a MIME type's media.
     */
    public function setMedia(string $media): TypeInterface;

    /**
     * Gets a MIME type's media comment.
     */
    public function getMediaComment(): ?string;

    /**
     * Sets a MIME type's media comment.
     */
    public function setMediaComment(?string $comment): TypeInterface;

    /**
     * Gets a MIME type's subtype.
     */
    public function getSubType(): ?string;

    /**
     * Sets a MIME type's subtype.
     */
    public function setSubType(string $sub_type): TypeInterface;

    /**
     * Gets a MIME type's subtype comment.
     */
    public function getSubTypeComment(): ?string;

    /**
     * Sets a MIME type's subtype comment.
     */
    public function setSubTypeComment(?string $comment): TypeInterface;

    /**
     * Does this type have any parameters?
     */
    public function hasParameters(): bool;

    /**
     * Get a MIME type's parameters.
     *
     * @return TypeParameter[]
     */
    public function getParameters(): array;

    /**
     * Get a MIME type's parameter.
     */
    public function getParameter(string $name): ?TypeParameter;

    /**
     * Add a parameter to this type
     */
    public function addParameter(string $name, string $value, string $comment = null): void;

    /**
     * Remove a parameter from this type.
     */
    public function removeParameter(string $name): void;

    /**
     * Create a textual MIME type from object values.
     *
     * This function performs the opposite function of parse().
     *
     * @param int $format
     *   The format of the output string.
     */
    public function toString(int $format = Type::FULL_TEXT): ?string;

    /**
     * Is this type experimental?
     *
     * Note: Experimental types are denoted by a leading 'x-' in the media or
     *       subtype, e.g. text/x-vcard or x-world/x-vrml.
     */
    public function isExperimental(): bool;

    /**
     * Is this a vendor MIME type?
     *
     * Note: Vendor types are denoted with a leading 'vnd. in the subtype.
     */
    public function isVendor(): bool;

    /**
     * Is this a wildcard type?
     */
    public function isWildcard(): bool;

    /**
     * Is this an alias?
     */
    public function isAlias(): bool;

    /**
     * Perform a wildcard match on a MIME type
     *
     * Example:
     * $type = new Type('image/png');
     * $type->wildcardMatch('image/*');
     *
     * @param string $wildcard
     *   Wildcard to check against.
     *
     * @return bool
     *   True if there was a match, false otherwise.
     */
    public function wildcardMatch(string $wildcard): bool;

    /**
     * Builds a list of MIME types existing in the map.
     *
     * If the current type is a wildcard, than all the types matching the
     * wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no type is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function buildTypesList(bool $strict = true): array;

    /**
     * Returns a description for the MIME type, if existing in the map.
     *
     * @param bool $include_acronym
     *   (Optional) if true and an acronym description exists for the type,
     *   the returned description will contain the acronym and its description,
     *   appended with a comma. Defaults to false.
     */
    public function getDescription(bool $include_acronym = false): ?string;

    /**
     * Returns all the aliases related to the MIME type(s).
     *
     * If the current type is a wildcard, than all aliases of all the
     * types matching the wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if error and $strict is true.
     *
     * @return string[]
     */
    public function getAliases(bool $strict = true): array;

    /**
     * Returns the MIME type's preferred file extension.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns null as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     */
    public function getDefaultExtension(bool $strict = true): ?string;

    /**
     * Returns all the file extensions related to the MIME type(s).
     *
     * If the current type is a wildcard, than all extensions of all the
     * types matching the wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function getExtensions(bool $strict = true): array;
}
