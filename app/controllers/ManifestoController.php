<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 7/2/14
 * Time: 10:19 PM
 */

class ManifestoController extends BaseController
{
    /**
    * Returns a view with content parsedown
    *
    * @return Response
    */
    public function manifesto( $language = NULL )
    {
        $parsedown = new Parsedown();
        $content = $language ? File::get( base_path() . '/README.' . $language . '.md' ) : File::get( base_path() . '/README.md' );
        $content = $parsedown->text( $content );

        return View::make( 'manifesto' )->with( [ 'content' => $content ] );
    }

    /**
    * Returns a view about
    *
    * @return Response
    */
    public function about()
    {
        return View::make( 'about' );
    }
} 
