<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    
	public $table = "professors";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "f_name",
		"s_name",
		"f_lastname",
		"s_lastname",
		"CI",
		"username",
		"active",
		"contract_date",
		"role",
		"phone",
		"email",
		"school_name"
	];

	public static $rules = [
	    "f_name" => "alpha",
		"s_name" => "alpha",
		"f_lastname" => "alpha",
		"s_lastname" => "alpha",
		"CI" => "integer",
		"username" => "required|alpha_dash",
		"active" => "required",
		"contract_date" => "required|date",
		"role" => "required|alpha",
		"phone" => "integer",
		"email" => "email"
	];

	public function schools()
	{
		return $this->belongsTo('App\School');
	}

}
