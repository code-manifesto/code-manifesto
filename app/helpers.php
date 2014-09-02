<?php

function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

function is_rtl()
{
    return in_array(Request::segment(2), array('arabic')) ? 'dir="RTL"' : '';
}