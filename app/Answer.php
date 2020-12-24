<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //tokenデータ外し
    protected $guarded = [
        '_token',
    ];
}
