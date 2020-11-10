<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name','password','sex','age','phone'];

    public $timestamps = 'false';
}