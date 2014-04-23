<?php

class Course_instance_datesController extends BaseController {

	/**
	 * Course_instance_date Repository
	 *
	 * @var Course_instance_date
	 */
	protected $course_instance_date;

	public function __construct(CourseInstanceDate $course_instance_date)
	{
		$this->course_instance_date = $course_instance_date;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $course_instance_dates = $this->course_instance_date->all();
		$course_instance_dates = CourseInstanceDate::paginate(50);

		return View::make('scaffolds.course_instance_dates.index', compact('course_instance_dates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.course_instance_dates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, CourseInstanceDate::$rules);

		if ($validation->passes())
		{
			$this->course_instance_date->create($input);

			return Redirect::route('course_instance_dates.index');
		}

		return Redirect::route('course_instance_dates.create')
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
		$course_instance_date = $this->course_instance_date->findOrFail($id);

		return View::make('scaffolds.course_instance_dates.show', compact('course_instance_date'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course_instance_date = $this->course_instance_date->find($id);

		if (is_null($course_instance_date))
		{
			return Redirect::route('course_instance_dates.index');
		}

		return View::make('scaffolds.course_instance_dates.edit', compact('course_instance_date'));
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
		$validation = Validator::make($input, CourseInstanceDate::$rules);

		if ($validation->passes())
		{
			$course_instance_date = $this->course_instance_date->find($id);
			$course_instance_date->update($input);

			return Redirect::route('course_instance_dates.show', $id);
		}

		return Redirect::route('course_instance_dates.edit', $id)
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
		$this->course_instance_date->find($id)->delete();

		return Redirect::route('course_instance_dates.index');
	}

}
