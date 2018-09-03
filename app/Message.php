<?php

namespace App;

use App\Scopes\DateScapable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


class Message extends Model
{

    use DateScapable;

    protected $fillable=['name' ,'email' ,'message','file'];


}
