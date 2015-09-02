<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model {

	protected $table = 'pdfs';

	protected $fillable = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

	public static $rules = [
	    "a" => "required|alpha",
	    "b" => "required|alpha",
	    "c" => "required|alpha_dash",
	    "d" => "required|alpha_dash",
	    "e" => "required|alpha_dash",
	    "f" => "required|alpha_dash",
	    "g" => "required|alpha_dash",
	    "h" => "required|alpha_dash",
	    "i" => "required|alpha_dash",
	    "j" => "required|alpha_dash",
	    "k" => "required|alpha_dash",
	    "l" => "required|alpha_dash",
	    "m" => "required|alpha_dash",
	    "n" => "required|alpha_dash",
	    "o" => "required|alpha_dash",
	    "p" => "required|alpha_dash",
	    "q" => "required|alpha_dash",
	    "r" => "required|alpha_dash",
	    "s" => "required|alpha_dash",
	    "t" => "required|alpha_dash",
	    "u" => "required|alpha_dash",
	    "v" => "required|alpha_dash",
	    "w" => "required|alpha_dash",
	    "x "=> "required|alpha_dash",
	    "y" => "required|alpha_dash",
	    "z" => "required|alpha_dash"
	];
}
