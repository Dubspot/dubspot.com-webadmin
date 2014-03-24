<?php

class InvoicesController extends BaseController {

	/**
	 * Invoice Repository
	 *
	 * @var Invoice
	 */
	protected $invoice;

	public function __construct(Invoice $invoice)
	{
		$this->invoice = $invoice;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $invoices = $this->invoice->all();
		$invoices = Invoice::paginate(50);

		return View::make('scaffolds.invoices.index', compact('invoices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.invoices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Invoice::$rules);

		if ($validation->passes())
		{
			$this->invoice->create($input);

			return Redirect::route('invoices.index');
		}

		return Redirect::route('invoices.create')
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
		$invoice = $this->invoice->findOrFail($id);

		return View::make('scaffolds.invoices.show', compact('invoice'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invoice = $this->invoice->find($id);

		if (is_null($invoice))
		{
			return Redirect::route('invoices.index');
		}

		return View::make('scaffolds.invoices.edit', compact('invoice'));
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
		$validation = Validator::make($input, Invoice::$rules);

		if ($validation->passes())
		{
			$invoice = $this->invoice->find($id);
			$invoice->update($input);

			return Redirect::route('invoices.show', $id);
		}

		return Redirect::route('invoices.edit', $id)
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
		$this->invoice->find($id)->delete();

		return Redirect::route('invoices.index');
	}

}
