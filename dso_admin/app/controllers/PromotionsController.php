<?php

class PromotionsController extends BaseController {

	/**
	 * Promotion Repository
	 *
	 * @var Promotion
	 */
	protected $promotion;

	public function __construct(Promotion $promotion)
	{
		$this->promotion = $promotion;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $promotions = $this->promotion->all();
		$promotions = Promotion::paginate(50);

		return View::make('scaffolds.promotions.index', compact('promotions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.promotions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Promotion::$rules);

		if ($validation->passes())
		{
			$this->promotion->create($input);

			return Redirect::route('promotions.index');
		}

		return Redirect::route('promotions.create')
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
		$promotion = $this->promotion->findOrFail($id);
		$products  = $promotion->products;

		return View::make('scaffolds.promotions.show', compact('promotion', 'products'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promotion = $this->promotion->find($id);

		if (is_null($promotion))
		{
			return Redirect::route('promotions.index');
		}

		return View::make('scaffolds.promotions.edit', compact('promotion'));
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
		$validation = Validator::make($input, Promotion::$rules);

		if ($validation->passes())
		{
			$promotion = $this->promotion->find($id);
			$promotion->update($input);

			return Redirect::route('promotions.show', $id);
		}

		return Redirect::route('promotions.edit', $id)
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
		$this->promotion->find($id)->delete();

		return Redirect::route('promotions.index');
	}

}
