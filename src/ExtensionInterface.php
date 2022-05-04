<?php declare(strict_types=1);

namespace FileEye\MimeMap;

/**
 * Interface for Extension objects.
 */
interface ExtensionInterface
{
    /**
     * Constructor.
     *
     * @param string $extension
     *   A file extension.
     * @param string $map_class
     *   (Optional) The FQCN of the map class to use.
     */
    public function __construct(string $extension, string $map_class = null);

    /**
     * Returns the file extension's preferred MIME type.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns 'application/octet-stream' as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     */
    public function getDefaultType(bool $strict = true): string;

    /**
     * Returns all the MIME types related to the file extension.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns ['application/octet-stream'] as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function getTypes(bool $strict = true): array;
}
