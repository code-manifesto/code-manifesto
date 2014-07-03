<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 7/2/14
 * Time: 9:34 PM
 */

namespace CodeManifesto\Composers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->view->composer('includes.sidebar', 'CodeManifesto\Composers\LanguageListComposer');
    }
} 