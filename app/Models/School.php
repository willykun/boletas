<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    
	public $table = "schools";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "school_name"
	];

	public static $rules = [
	    "school_name" => "required|alpha_dash"
	];

	public function professors()
	{
		return $this->hasMany('App\Proffesor');
	}

}
