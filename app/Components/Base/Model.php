<?php namespace Kash\Components\Base;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

    protected $guarded = ['id'];

}


