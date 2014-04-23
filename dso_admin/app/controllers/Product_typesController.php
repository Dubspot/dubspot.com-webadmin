<?php

class Product_typesController extends BaseController {

	/**
	 * Product_type Repository
	 *
	 * @var Product_type
	 */
	protected $product_type;

	public function __construct(ProductType $product_type)
	{
		$this->product_type = $product_type;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $product_types = $this->product_type->all();
		$product_types = ProductType::paginate(50);

		return View::make('scaffolds.product_types.index', compact('product_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.product_types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, ProductType::$rules);

		if ($validation->passes())
		{
			$this->product_type->create($input);

			return Redirect::route('product_types.index');
		}

		return Redirect::route('product_types.create')
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
		$product_type = $this->product_type->findOrFail($id);

		return View::make('scaffolds.product_types.show', compact('product_type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product_type = $this->product_type->find($id);

		if (is_null($product_type))
		{
			return Redirect::route('product_types.index');
		}

		return View::make('scaffolds.product_types.edit', compact('product_type'));
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
		$validation = Validator::make($input, ProductType::$rules);

		if ($validation->passes())
		{
			$product_type = $this->product_type->find($id);
			$product_type->update($input);

			return Redirect::route('product_types.show', $id);
		}

		return Redirect::route('product_types.edit', $id)
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
		$this->product_type->find($id)->delete();

		return Redirect::route('product_types.index');
	}

}
