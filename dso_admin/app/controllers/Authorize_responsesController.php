<?php

class Authorize_responsesController extends BaseController {

	/**
	 * Authorize_response Repository
	 *
	 * @var Authorize_response
	 */
	protected $authorize_response;

	public function __construct(AuthorizeResponse $authorize_response)
	{
		$this->authorize_response = $authorize_response;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $authorize_responses = $this->authorize_response->all();
		$authorize_responses = AuthorizeResponse::paginate(50);

		return View::make('scaffolds.authorize_responses.index', compact('authorize_responses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.authorize_responses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, AuthorizeResponse::$rules);

		if ($validation->passes())
		{
			$this->authorize_response->create($input);

			return Redirect::route('authorize_responses.index');
		}

		return Redirect::route('authorize_responses.create')
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
		$authorize_response = $this->authorize_response->findOrFail($id);

		return View::make('scaffolds.authorize_responses.show', compact('authorize_response'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$authorize_response = $this->authorize_response->find($id);

		if (is_null($authorize_response))
		{
			return Redirect::route('authorize_responses.index');
		}

		return View::make('scaffolds.authorize_responses.edit', compact('authorize_response'));
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
		$validation = Validator::make($input, AuthorizeResponse::$rules);

		if ($validation->passes())
		{
			$authorize_response = $this->authorize_response->find($id);
			$authorize_response->update($input);

			return Redirect::route('authorize_responses.show', $id);
		}

		return Redirect::route('authorize_responses.edit', $id)
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
		$this->authorize_response->find($id)->delete();

		return Redirect::route('authorize_responses.index');
	}

}
