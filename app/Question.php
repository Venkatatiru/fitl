<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

Class Question extends Model
{
	protected $rules = [
     'title' => ['required'],
     'description' => ['required'],
	];
}