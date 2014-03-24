<?php

class Program_instancesController extends BaseController {

	/**
	 * Program_instance Repository
	 *
	 * @var Program_instance
	 */
	protected $program_instance;

	public function __construct(ProgramInstance $program_instance)
	{
		$this->program_instance = $program_instance;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $program_instances = $this->program_instance->all();
		$program_instances = ProgramInstance::paginate(50);

		return View::make('scaffolds.program_instances.index', compact('program_instances'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.program_instances.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, ProgramInstance::$rules);

		if ($validation->passes())
		{
			$this->program_instance->create($input);

			return Redirect::route('program_instances.index');
		}

		return Redirect::route('program_instances.create')
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
		$program_instance = $this->program_instance->findOrFail($id);
		$course_instances = $program_instance->courseInstances;
		$users            = $program_instance->users;

		return View::make('scaffolds.program_instances.show', compact('program_instance', 'course_instances', 'users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$program_instance = $this->program_instance->find($id);

		if (is_null($program_instance))
		{
			return Redirect::route('program_instances.index');
		}

		return View::make('scaffolds.program_instances.edit', compact('program_instance'));
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
		$validation = Validator::make($input, ProgramInstance::$rules);

		if ($validation->passes())
		{
			$program_instance = $this->program_instance->find($id);
			$program_instance->update($input);

			return Redirect::route('program_instances.show', $id);
		}

		return Redirect::route('program_instances.edit', $id)
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
		$this->program_instance->find($id)->delete();

		return Redirect::route('program_instances.index');
	}

}
