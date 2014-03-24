<?php

class UsersController extends BaseController {

	/**
	 * User Repository
	 *
	 * @var User
	 */
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $users = $this->user->all();
		$users = User::paginate(50);

		return View::make('scaffolds.users.index', compact('users'));
	}


	/**
	 * Search for some users by email.
	 *
	 * @return Response
	 */
	public function search()
	{
		// $users = $this->user->all();
		// $users = User::paginate(50);

		$query = Request::get('q');

		$users = $query	? User::where('email', 'LIKE', "%$query%")->paginate(15)	: User::all();
		// $users = $users::paginate(50);

		return View::make('scaffolds.users.search', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);

		if ($validation->passes())
		{
			$this->user->create($input);

			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')
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
		$user             = $this->user->findOrFail($id);
		$courseInstances  = $user->courseInstances;
		$programInstances = $user->programInstances;

		return View::make('scaffolds.users.show', compact('user', 'courseInstances', 'programInstances'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->find($id);

		if (is_null($user))
		{
			return Redirect::route('users.index');
		}

		return View::make('scaffolds.users.edit', compact('user'));
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
		$validation = Validator::make($input, User::$rules);

		if ($validation->passes())
		{
			$user = $this->user->find($id);
			$user->update($input);

			return Redirect::route('users.show', $id);
		}

		return Redirect::route('users.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


	/**
	* Upgrade a user to 2.0
	*
	* @param  int  $id
	* @return Response
	*/
	public function upgrade($id)
	{
		$user = $this->user->find($id);
		if ($user->legacy) {
			$user->legacy = 0;
		} else {
			$user->legacy = 1;
		}
		$user->save();


		return			Redirect::back()->withMessage('Profile saved!');
		// return Redirect::back()->with('message','Operation Successful !');

	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->find($id)->delete();

		return Redirect::route('users.index');
	}

}
