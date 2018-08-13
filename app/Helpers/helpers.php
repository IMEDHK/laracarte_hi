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