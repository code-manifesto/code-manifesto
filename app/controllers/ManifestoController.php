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
    public function manifesto( $language = '' )
    {
        if ($language !== '') {
            $language = '.' . $language;
        }

        $content_path = base_path( 'README' . $language . '.md' );

        if ( false === File::exists( $content_path ) ) {
            return Redirect::to( '/' );
        }
        
        $parsedown = new Parsedown();
        $content = File::get( $content_path );
        $content = $parsedown->text( $content );
 
        return View::make( 'manifesto' )
            ->with( [ 'content' => $content ] );
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
