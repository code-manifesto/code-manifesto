<?php

function set_active($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}

function is_rtl()
{
    return Request::segment(2) == 'arabic' ? 'dir="RTL"' : '';
}