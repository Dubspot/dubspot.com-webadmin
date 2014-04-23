<?php

class Basket_itemsController extends BaseController {

	/**
	 * Basket_item Repository
	 *
	 * @var Basket_item
	 */
	protected $basket_item;

	public function __construct(BasketItem $basket_item)
	{
		$this->basket_item = $basket_item;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $basket_items = $this->basket_item->all();
		$basket_items = BasketItem::paginate(50);

		return View::make('scaffolds.basket_items.index', compact('basket_items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.basket_items.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, BasketItem::$rules);

		if ($validation->passes())
		{
			$this->basket_item->create($input);

			return Redirect::route('basket_items.index');
		}

		return Redirect::route('basket_items.create')
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
		$basket_item = $this->basket_item->findOrFail($id);

		return View::make('scaffolds.basket_items.show', compact('basket_item'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$basket_item = $this->basket_item->find($id);

		if (is_null($basket_item))
		{
			return Redirect::route('basket_items.index');
		}

		return View::make('scaffolds.basket_items.edit', compact('basket_item'));
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
		$validation = Validator::make($input, BasketItem::$rules);

		if ($validation->passes())
		{
			$basket_item = $this->basket_item->find($id);
			$basket_item->update($input);

			return Redirect::route('basket_items.show', $id);
		}

		return Redirect::route('basket_items.edit', $id)
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
		$this->basket_item->find($id)->delete();

		return Redirect::route('basket_items.index');
	}

}
