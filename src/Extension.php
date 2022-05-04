<?php declare(strict_types=1);

namespace FileEye\MimeMap;

use FileEye\MimeMap\Map\MimeMapInterface;

/**
 * Class for mapping file extensions to MIME types.
 */
class Extension implements ExtensionInterface
{
    /**
     * The file extension.
     *
     * @var string
     */
    protected $extension;

    /**
     * The MIME types map.
     *
     * @var MimeMapInterface
     */
    protected $map;

    public function __construct(string $extension, string $map_class = null)
    {
        $this->extension = strtolower($extension);
        $this->map = MapHandler::map($map_class);
    }

    public function getDefaultType(bool $strict = true): string
    {
        return $this->getTypes($strict)[0];
    }

    public function getTypes(bool $strict = true): array
    {
        $types = $this->map->getExtensionTypes($this->extension);
        if (empty($types)) {
            if ($strict) {
                throw new MappingException('No MIME type mapped to extension ' . $this->extension);
            } else {
                return ['application/octet-stream'];
            }
        }
        return $types;
    }
}
