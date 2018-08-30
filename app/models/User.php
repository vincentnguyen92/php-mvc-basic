<?php
namespace Vincent\App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class User extends Eloquent
{
    public $name;

    public $timestamps = array();
    protected $fillable = array('username', 'email');

}