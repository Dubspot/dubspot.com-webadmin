<?php

class CoursesController extends BaseController {

	/**
	 * Course Repository
	 *
	 * @var Course
	 */
	protected $course;

	public function __construct(Course $course)
	{
		$this->course = $course;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $courses = $this->course->all();
		$courses = Course::paginate(50);

		return View::make('scaffolds.courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Course::$rules);

		if ($validation->passes())
		{
			$this->course->create($input);

			return Redirect::route('courses.index');
		}

		return Redirect::route('courses.create')
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
		$course     = $this->course->findOrFail($id);
		$categories = $course->categories;
		$programs   = $course->programs;

		return View::make('scaffolds.courses.show', compact('course', 'categories', 'programs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = $this->course->find($id);

		if (is_null($course))
		{
			return Redirect::route('courses.index');
		}

		return View::make('scaffolds.courses.edit', compact('course'));
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
		$validation = Validator::make($input, Course::$rules);

		if ($validation->passes())
		{
			$course = $this->course->find($id);
			$course->update($input);

			return Redirect::route('courses.show', $id);
		}

		return Redirect::route('courses.edit', $id)
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
		$this->course->find($id)->delete();

		return Redirect::route('courses.index');
	}

}
