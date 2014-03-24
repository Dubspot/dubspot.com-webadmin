<?php

class Uber_programsController extends BaseController {

	/**
	 * Uber_program Repository
	 *
	 * @var Uber_program
	 */
	protected $uber_program;

	public function __construct(UberProgram $uber_program)
	{
		$this->uber_program = $uber_program;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $uber_programs = $this->uber_program->all();
		$uber_programs = UberProgram::paginate(50);

		return View::make('scaffolds.uber_programs.index', compact('uber_programs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.uber_programs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, UberProgram::$rules);

		if ($validation->passes())
		{
			$this->uber_program->create($input);

			return Redirect::route('uber_programs.index');
		}

		return Redirect::route('uber_programs.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$uber_program = $this->uber_program->findOrFail($id);
		$programs     = $uber_program->programs;

		return View::make('scaffolds.uber_programs.show', compact('uber_program', 'programs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$uber_program = $this->uber_program->find($id);

		if (is_null($uber_program))
		{
			return Redirect::route('uber_programs.index');
		}

		return View::make('scaffolds.uber_programs.edit', compact('uber_program'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, UberProgram::$rules);

		if ($validation->passes())
		{
			$uber_program = $this->uber_program->find($id);
			$uber_program->update($input);

			return Redirect::route('uber_programs.show', $id);
		}

		return Redirect::route('uber_programs.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->uber_program->find($id)->delete();

		return Redirect::route('uber_programs.index');
	}

}
