<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 7/2/14
 * Time: 7:36 PM
 */

namespace CodeManifesto\Filesystem;

use \Illuminate\Filesystem\Filesystem as BaseFilesystem;

class Filesystem extends BaseFilesystem
{
    public $files;

    public function withExtension($extension)
    {
        foreach ($this->files as $k => $file)
        {
            if ($this->extension($file) != $extension)
            {
                unset($this->files[$k]);
            }
        }
        return $this;
    }

    public function startsWith($string)
    {
        foreach ($this->files as $k => $file)
        {
            if (strpos($this->getFileName($file), $string) !== 0)
            {
                unset($this->files[$k]);
            }
        }
        return $this;
    }

    public function getFileName($path)
    {
        $file_name_array = explode('/',$path);
        $file_name = array_pop($file_name_array);
        return $file_name;
    }

    public function files($directory)
    {
        $this->files = parent::files($directory);

        return $this;
    }

} 