<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Pdf;

class CreatePdfRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

		return [

	    'a'=> 'required|alpha|required',
	    'b' => 'required|alpha_dash',
	  /*  "c" => "required|alpha_dash",
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
	    "z" => "required|alpha_dash",*/
		];
	}

}
