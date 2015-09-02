<?php

namespace App\Libraries\Repositories;


use App\Models\School;
use Illuminate\Support\Facades\Schema;

class SchoolRepository
{

	/**
	 * Returns all Schools
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return School::all();
	}

	public function search($input)
    {
        $query = School::query();

        $columns = Schema::getColumnListing('schools');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores School into database
	 *
	 * @param array $input
	 *
	 * @return School
	 */
	public function store($input)
	{
		return School::create($input);
	}

	/**
	 * Find School by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|School
	 */
	public function findSchoolById($id)
	{
		return School::find($id);
	}

	/**
	 * Updates School into database
	 *
	 * @param School $school
	 * @param array $input
	 *
	 * @return School
	 */
	public function update($school, $input)
	{
		$school->fill($input);
		$school->save();

		return $school;
	}
}