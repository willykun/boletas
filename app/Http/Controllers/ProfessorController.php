<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProfessorRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ProfessorRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class ProfessorController extends AppBaseController
{

	/** @var  ProfessorRepository */
	private $professorRepository;

	function __construct(ProfessorRepository $professorRepo)
	{
		$this->professorRepository = $professorRepo;
	}

	/**
	 * Display a listing of the Professor.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->professorRepository->search($input);

		$professors = $result[0];

		$attributes = $result[1];

		return view('professors.index')
		    ->with('professors', $professors)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Professor.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('professors.create');
	}

	/**
	 * Store a newly created Professor in storage.
	 *
	 * @param CreateProfessorRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProfessorRequest $request)
	{
    $input = $request->all();

	$professor = $this->professorRepository->store($input);

	Flash::message('Professor saved successfully.');

	return redirect(route('professors.index'));
	}

	/**
	 * Display the specified Professor.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$professor = $this->professorRepository->findProfessorById($id);

		if(empty($professor))
		{
			Flash::error('Professor not found');
			return redirect(route('professors.index'));
		}

		return view('professors.show')->with('professor', $professor);
	}

	/**
	 * Show the form for editing the specified Professor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$professor = $this->professorRepository->findProfessorById($id);

		if(empty($professor))
		{
			Flash::error('Professor not found');
			return redirect(route('professors.index'));
		}

		return view('professors.edit')->with('professor', $professor);
	}

	/**
	 * Update the specified Professor in storage.
	 *
	 * @param  int    $id
	 * @param CreateProfessorRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateProfessorRequest $request)
	{
		$professor = $this->professorRepository->findProfessorById($id);

		if(empty($professor))
		{
			Flash::error('Professor not found');
			return redirect(route('professors.index'));
		}

		$professor = $this->professorRepository->update($professor, $request->all());

		Flash::message('Professor updated successfully.');

		return redirect(route('professors.index'));
	}

	/**
	 * Remove the specified Professor from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$professor = $this->professorRepository->findProfessorById($id);

		if(empty($professor))
		{
			Flash::error('Professor not found');
			return redirect(route('professors.index'));
		}

		$professor->delete();

		Flash::message('Professor deleted successfully.');

		return redirect(route('professors.index'));
	}

}
