<?php

class Order_itemsController extends BaseController {

	/**
	 * Order_item Repository
	 *
	 * @var Order_item
	 */
	protected $order_item;

	public function __construct(OrderItem $order_item)
	{
		$this->order_item = $order_item;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $order_items = $this->order_item->all();
		$order_items = OrderItem::paginate(50);

		return View::make('scaffolds.order_items.index', compact('order_items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.order_items.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, OrderItem::$rules);

		if ($validation->passes())
		{
			$this->order_item->create($input);

			return Redirect::route('order_items.index');
		}

		return Redirect::route('order_items.create')
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
		$order_item = $this->order_item->findOrFail($id);

		return View::make('scaffolds.order_items.show', compact('order_item'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order_item = $this->order_item->find($id);

		if (is_null($order_item))
		{
			return Redirect::route('order_items.index');
		}

		return View::make('scaffolds.order_items.edit', compact('order_item'));
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
		$validation = Validator::make($input, OrderItem::$rules);

		if ($validation->passes())
		{
			$order_item = $this->order_item->find($id);
			$order_item->update($input);

			return Redirect::route('order_items.show', $id);
		}

		return Redirect::route('order_items.edit', $id)
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
		$this->order_item->find($id)->delete();

		return Redirect::route('order_items.index');
	}

	public function transactions()
	{
		$order_items = OrderItem::paginate(50);

		return View::make('scaffolds.order_items.transactions', compact('order_items'));
	}

}
