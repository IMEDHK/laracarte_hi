<?php

if (! function_exists('getTile')) {
    function getTile($title)
    {
        $basetitle = 'Laracarte';
        return empty($title) ? $basetitle : sprintf('%s | %s',$title,$basetitle)  ;

    }
}
if (! function_exists('getRouteName')){

    function getRouteName($route){



        return Route::is($route) ? 'active' : '';


    }

}