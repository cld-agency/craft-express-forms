<?php
/**
 * Express Forms for Craft
 *
 * @package       Solspace:ExpressForms
 * @author        Solspace, Inc.
 * @copyright     Copyright (c) 2019, Solspace, Inc.
 * @link          http://craft.express/forms
 * @license       https://docs.solspace.com/license-agreement/
 */

namespace Solspace\ExpressForms\utilities\CodePack\Components\FileObject;

use Solspace\ExpressForms\utilities\CodePack\Exceptions\FileObject\FileObjectException;

class File extends FileObject
{
    /**
     * File constructor.
     *
     * @param string $path
     */
    protected function __construct(string $path)
    {
        $file = pathinfo($path, PATHINFO_BASENAME);

        $this->folder = false;
        $this->path   = $path;
        $this->name   = $file;
    }

    /**
     * Copy the file or directory to $target location
     *
     * @param string              $target
     * @param string|null         $prefix
     * @param array|callable|null $callable
     * @param string|null         $filePrefix
     *
     * @return void
     */
    public function copy(string $target, string $prefix = null, callable $callable = null, string $filePrefix = null)
    {
        $target      = rtrim($target, '/');
        $newFilePath = $target . '/' . $filePrefix . $this->name;

        $this->getFileSystem()->copy($this->path, $newFilePath, true);

        if (null !== $callable) {
            $callable($newFilePath, $prefix);
        }
    }
}
