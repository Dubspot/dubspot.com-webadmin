<?php

class Scheduled_paymentsController extends BaseController {

	/**
	 * Scheduled_payment Repository
	 *
	 * @var Scheduled_payment
	 */
	protected $scheduled_payment;

	public function __construct(ScheduledPayment $scheduled_payment)
	{
		$this->scheduled_payment = $scheduled_payment;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $scheduled_payments = $this->scheduled_payment->all();
		$scheduled_payments = ScheduledPayment::paginate(50);

		return View::make('scaffolds.scheduled_payments.index', compact('scheduled_payments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.scheduled_payments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, ScheduledPayment::$rules);

		if ($validation->passes())
		{
			$this->scheduled_payment->create($input);

			return Redirect::route('scheduled_payments.index');
		}

		return Redirect::route('scheduled_payments.create')
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
		$scheduled_payment = $this->scheduled_payment->findOrFail($id);

		return View::make('scaffolds.scheduled_payments.show', compact('scheduled_payment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$scheduled_payment = $this->scheduled_payment->find($id);

		if (is_null($scheduled_payment))
		{
			return Redirect::route('scheduled_payments.index');
		}

		return View::make('scaffolds.scheduled_payments.edit', compact('scheduled_payment'));
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
		$validation = Validator::make($input, ScheduledPayment::$rules);

		if ($validation->passes())
		{
			$scheduled_payment = $this->scheduled_payment->find($id);
			$scheduled_payment->update($input);

			return Redirect::route('scheduled_payments.show', $id);
		}

		return Redirect::route('scheduled_payments.edit', $id)
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
		$this->scheduled_payment->find($id)->delete();

		return Redirect::route('scheduled_payments.index');
	}

}
