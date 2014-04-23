<?php

class Course_instancesController extends BaseController {

	/**
	 * Course_instance Repository
	 *
	 * @var Course_instance
	 */
	protected $course_instance;

	public function __construct(CourseInstance $course_instance)
	{
		$this->course_instance = $course_instance;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $course_instances = $this->course_instance->all();
		$course_instances = CourseInstance::paginate(50);

		return View::make('scaffolds.course_instances.index', compact('course_instances'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.course_instances.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, CourseInstance::$rules);

		if ($validation->passes())
		{
			$this->course_instance->create($input);

			return Redirect::route('course_instances.index');
		}

		return Redirect::route('course_instances.create')
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
		$course_instance   = $this->course_instance->findOrFail($id);
		$program_instances = $course_instance->programInstances;
		$users             = $course_instance->users;

		return View::make('scaffolds.course_instances.show', compact('course_instance', 'program_instances', 'users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course_instance = $this->course_instance->find($id);

		if (is_null($course_instance))
		{
			return Redirect::route('course_instances.index');
		}

		return View::make('scaffolds.course_instances.edit', compact('course_instance'));
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
		$validation = Validator::make($input, CourseInstance::$rules);

		if ($validation->passes())
		{
			$course_instance = $this->course_instance->find($id);
			$course_instance->update($input);

			return Redirect::route('course_instances.show', $id);
		}

		return Redirect::route('course_instances.edit', $id)
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
		$this->course_instance->find($id)->delete();

		return Redirect::route('course_instances.index');
	}

}
