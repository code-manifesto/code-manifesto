<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 7/2/14
 * Time: 9:36 PM
 */

namespace CodeManifesto\Composers;

use CodeManifesto\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;

class LanguageListComposer
{
    public function compose($view)
    {
        $filesystem = new Filesystem();
        $files = $filesystem->files(base_path())->startsWith('README')->withExtension('md');

        $languages = array();
        foreach ($files->files as $file)
        {
            $exploded = explode('.', $file);
            if(sizeof($exploded) == 3)
            {
                $language_file = $exploded[1];
                $languages[$language_file] = ucfirst($language_file);
            }
        }
        $view->with('languages', $languages);
    }
} 