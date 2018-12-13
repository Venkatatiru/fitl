<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

//use App\Comment;

Class Question extends Model
{
	protected $rules = [
     'title' => ['required'],
     'description' => ['required'],
	];

	public function comments() {
		return $this->hasMany('App\Comment')->orderBy('created_at','desc');
	}

	public function languages() {
		return $this->belongsToMany('App\Language','questions_languages');
	}
}