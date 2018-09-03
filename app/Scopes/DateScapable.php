<?php

namespace App\Scopes;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScapable
{

    public  function TwoMonthesAgo(Builder $query){

       $query->where('created_at','<=',Carbon::parse('1 day ago'));


    }

}