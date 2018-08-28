<?php

/**
 * Created by PhpStorm.
 * User: mhamm
 * Date: 15/11/2016
 * Time: 11:26
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    public $timestamps = array();
    protected $fillable = array('username', 'email');

}