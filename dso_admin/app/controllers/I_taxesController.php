<?php

class I_taxesController extends BaseController {

	/**
	 * I_taxes Repository
	 *
	 * @var I_taxes
	 */
	protected $i_tax;

	public function __construct(ITax $i_tax)
	{
		$this->i_tax = $i_tax;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $i_taxes = $this->i_tax->all();
		$i_taxes = ITax::paginate(50);

		return View::make('scaffolds.i_taxes.index', compact('i_taxes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.i_taxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, I_taxes::$rules);

		if ($validation->passes())
		{
			$this->i_tax->create($input);

			return Redirect::route('i_taxes.index');
		}

		return Redirect::route('i_taxes.create')
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
		$i_tax = $this->i_tax->findOrFail($id);

		return View::make('scaffolds.i_taxes.show', compact('i_tax'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$i_tax = $this->i_tax->find($id);

		if (is_null($i_tax))
		{
			return Redirect::route('i_taxes.index');
		}

		return View::make('scaffolds.i_taxes.edit', compact('i_tax'));
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
		$validation = Validator::make($input, I_taxes::$rules);

		if ($validation->passes())
		{
			$i_tax = $this->i_tax->find($id);
			$i_tax->update($input);

			return Redirect::route('i_taxes.show', $id);
		}

		return Redirect::route('i_taxes.edit', $id)
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
		$this->i_tax->find($id)->delete();

		return Redirect::route('i_taxes.index');
	}

}
