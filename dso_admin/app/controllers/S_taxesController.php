<?php

class S_taxesController extends BaseController {

	/**
	 * S_taxes Repository
	 *
	 * @var S_taxes
	 */
	protected $s_tax;

	public function __construct(STax $s_tax)
	{
		$this->s_tax = $s_tax;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $s_taxes = $this->s_tax->all();
		$s_taxes = STax::paginate(50);

		return View::make('scaffolds.s_taxes.index', compact('s_taxes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.s_taxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, S_taxes::$rules);

		if ($validation->passes())
		{
			$this->s_tax->create($input);

			return Redirect::route('s_taxes.index');
		}

		return Redirect::route('s_taxes.create')
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
		$s_tax = $this->s_tax->findOrFail($id);

		return View::make('scaffolds.s_taxes.show', compact('s_tax'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$s_tax = $this->s_tax->find($id);

		if (is_null($s_tax))
		{
			return Redirect::route('s_taxes.index');
		}

		return View::make('scaffolds.s_taxes.edit', compact('s_tax'));
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
		$validation = Validator::make($input, S_taxes::$rules);

		if ($validation->passes())
		{
			$s_tax = $this->s_tax->find($id);
			$s_tax->update($input);

			return Redirect::route('s_taxes.show', $id);
		}

		return Redirect::route('s_taxes.edit', $id)
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
		$this->s_tax->find($id)->delete();

		return Redirect::route('s_taxes.index');
	}

}
