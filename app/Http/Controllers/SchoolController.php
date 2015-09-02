<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSchoolRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\SchoolRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class SchoolController extends AppBaseController
{

	/** @var  SchoolRepository */
	private $schoolRepository;

	function __construct(SchoolRepository $schoolRepo)
	{
		$this->schoolRepository = $schoolRepo;
	}

	/**
	 * Display a listing of the School.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->schoolRepository->search($input);

		$schools = $result[0];

		$attributes = $result[1];

		return view('schools.index')
		    ->with('schools', $schools)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new School.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('schools.create');
	}

	/**
	 * Store a newly created School in storage.
	 *
	 * @param CreateSchoolRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSchoolRequest $request)
	{
        $input = $request->all();

		$school = $this->schoolRepository->store($input);

		Flash::message('School saved successfully.');

		return redirect(route('schools.index'));
	}

	/**
	 * Display the specified School.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$school = $this->schoolRepository->findSchoolById($id);

		if(empty($school))
		{
			Flash::error('School not found');
			return redirect(route('schools.index'));
		}

		return view('schools.show')->with('school', $school);
	}

	/**
	 * Show the form for editing the specified School.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$school = $this->schoolRepository->findSchoolById($id);

		if(empty($school))
		{
			Flash::error('School not found');
			return redirect(route('schools.index'));
		}

		return view('schools.edit')->with('school', $school);
	}

	/**
	 * Update the specified School in storage.
	 *
	 * @param  int    $id
	 * @param CreateSchoolRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSchoolRequest $request)
	{
		$school = $this->schoolRepository->findSchoolById($id);

		if(empty($school))
		{
			Flash::error('School not found');
			return redirect(route('schools.index'));
		}

		$school = $this->schoolRepository->update($school, $request->all());

		Flash::message('School updated successfully.');

		return redirect(route('schools.index'));
	}

	/**
	 * Remove the specified School from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$school = $this->schoolRepository->findSchoolById($id);

		if(empty($school))
		{
			Flash::error('School not found');
			return redirect(route('schools.index'));
		}

		$school->delete();

		Flash::message('School deleted successfully.');

		return redirect(route('schools.index'));
	}

}
