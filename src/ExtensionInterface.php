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
     * @throws MappingException if no mapping found.
     */
    public function getDefaultType(): string;

    /**
     * Returns all the MIME types related to the file extension.
     *
     * @throws MappingException if no mapping found.
     *
     * @return string[]
     */
    public function getTypes(): array;
}
