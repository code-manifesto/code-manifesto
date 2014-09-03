<?php

function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

function is_rtl()
{
    $rtl_languages = ['arabic'];
    
    return in_array(Request::segment(2), $rtl_languages) ? 'rtl' : '';
}