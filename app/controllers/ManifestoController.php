<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 7/2/14
 * Time: 10:19 PM
 */

class ManifestoController extends BaseController
{
    public function manifesto($language = NULL)
    {
        $Parsedown = new Parsedown();
        if ($language) $content = File::get(base_path()."/README.".$language.".md");
        else $content = File::get(base_path()."/README.md");
        $content = $Parsedown->text($content);
        return View::make('manifesto')->with(array('content' => $content));
    }

    public function about()
    {
        return View::make('about');
    }

} 