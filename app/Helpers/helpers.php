<?php

if (! function_exists('getTile')){
    function getTile($title){
        $basetitle='Laracarte';
        if ($title===''){
            return $basetitle ;
        }else
            return $title.'|'.$basetitle;
    }
}
if (! function_exists('getRouteName')){

    function getRouteName($route){

        return Route::is($route) ? 'active' : '';


    }

}