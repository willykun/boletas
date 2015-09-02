<?php

namespace App\Libraries\Repositories;


use App\Models\Professor;
use Illuminate\Support\Facades\Schema;

class ProfessorRepository
{

	/**
	 * Returns all Professors
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Professor::all();
	}

	public function search($input)
    {
        $query = Professor::query();

        $columns = Schema::getColumnListing('professors');
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
	 * Stores Professor into database
	 *
	 * @param array $input
	 *
	 * @return Professor
	 */
	public function store($input)
	{
		return Professor::create($input);
	}

	/**
	 * Find Professor by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Professor
	 */
	public function findProfessorById($id)
	{
		return Professor::find($id);
	}

	/**
	 * Updates Professor into database
	 *
	 * @param Professor $professor
	 * @param array $input
	 *
	 * @return Professor
	 */
	public function update($professor, $input)
	{
		$professor->fill($input);
		$professor->save();

		return $professor;
	}
}