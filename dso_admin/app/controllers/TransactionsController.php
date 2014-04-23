<?php

class TransactionsController extends BaseController {

	/**
	 * Transaction Repository
	 *
	 * @var Transaction
	 */
	protected $transaction;

	public function __construct(Transaction $transaction)
	{
		$this->transaction = $transaction;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $transactions = $this->transaction->all();
		// $transactions = Transaction::paginate(50);
		$transactions = Transaction::with('orderItem')->paginate(25);

		return View::make('scaffolds.transactions.index', compact('transactions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.transactions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Transaction::$rules);

		if ($validation->passes())
		{
			$this->transaction->create($input);

			return Redirect::route('transactions.index');
		}

		return Redirect::route('transactions.create')
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
		$transaction = $this->transaction->findOrFail($id);

		return View::make('scaffolds.transactions.show', compact('transaction'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transaction = $this->transaction->find($id);

		if (is_null($transaction))
		{
			return Redirect::route('transactions.index');
		}

		return View::make('scaffolds.transactions.edit', compact('transaction'));
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
		$validation = Validator::make($input, Transaction::$rules);

		if ($validation->passes())
		{
			$transaction = $this->transaction->find($id);
			$transaction->update($input);

			return Redirect::route('transactions.show', $id);
		}

		return Redirect::route('transactions.edit', $id)
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
		$this->transaction->find($id)->delete();

		return Redirect::route('transactions.index');
	}



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function master()
	{
		$transactions = Transaction::with('orderItem')->paginate(25);
		foreach ($transactions as $transaction) {
			$transaction->date               = $transaction->orderItem->created;
			$transaction->first_name         = $transaction->orderItem->user->firstname;
			$transaction->last_name          = $transaction->orderItem->user->lastname;
			$transaction->email              = $transaction->orderItem->user->email;
			$transaction->phone              = $transaction->orderItem->user->address->phone;
			$transaction->location           = $transaction->orderItem->location;
			$transaction->original_price     = $transaction->orderItem->price;
			$transaction->b_first_name       = $transaction->order_item->order->billingAddress->firstname;
			$transaction->b_last_name        = $transaction->order_item->order->billingAddress->lastname;
			$transaction->b_email            = $transaction->order_item->order->billingAddress->email;
			$transaction->b_phone            = $transaction->order_item->order->billingAddress->phone;
			$transaction->b_address1         = $transaction->order_item->order->billingAddress->address1;
			$transaction->b_address2         = $transaction->order_item->order->billingAddress->address2;
			$transaction->b_city             = $transaction->order_item->order->billingAddress->city;
			$transaction->b_state            = $transaction->order_item->order->billingAddress->province;
			$transaction->b_zip              = $transaction->order_item->order->billingAddress->postcode;
			$transaction->b_country          = $transaction->order_item->order->billingAddress->country;
			$transaction->order_id           = $transaction->order_item->order_id;
			$transaction->user_id            = $transaction->order_item->user_id;
			$transaction->product_id         = $transaction->order_item->product_id;
			$transaction->product_type_id    = $transaction->order_item->product->product_type_id;
			$transaction->product_object_id  = $transaction->order_item->product->product_object_id;
			$transaction->wp_post_id         = $transaction->order_item->product->wp_post_id ;
			$transaction->instance_id        = $transaction->order_item->instance_id;
			$transaction->instance_ids       = $transaction->order_item->instance_ids;

			$transaction->title              = TransactionsHelper::getProductTitle($transaction);
			$transaction->adjustment         = TransactionsHelper::getDiscount($transaction);
			$transaction->adjustment_amount  = $transaction->orderItem->price * TransactionsHelper::getDiscount($transaction);
			$transaction->total              = $transaction->original_price - ($transaction->original_price * $transaction->adjustment);

			// Get they Payment Dates and Amounts
			$transaction->payment_plan       = $transaction->orderItem->installment_selected == 1 ? true:false;
			$transaction->scheduled_payments = $transaction->orderItem->scheduledPayments;
			$transaction->payment_1_date     = $transaction->orderItem->order->created;
			$transaction->payment_1_amount   = $transaction->payment_plan ? $transaction->total/4 : $transaction->total;
			$transaction->payment_2_date     = "";
			$transaction->payment_2_amount   = "";
			$transaction->payment_3_date     = "";
			$transaction->payment_3_amount   = "";
			$transaction->payment_4_date     = "";
			$transaction->payment_4_amount   = "";
			$transaction->amount_paid        = "";
			$transaction->balance            = "";
			$transaction->payment_review     = "";
			if (count($transaction->scheduled_payments) > 1) {
				// $transaction->payment_2_amount = $transaction->scheduled_payments[0]->amount;
				// $transaction->payment_3_amount = $transaction->scheduled_payments[1]->amount;
				// $transaction->payment_4_amount = $transaction->scheduled_payments[2]->amount;
				// $transaction->payment_2_date   = $transaction->scheduled_payments[0]->payment_date;
				// $transaction->payment_3_date   = $transaction->scheduled_payments[1]->payment_date;
				// $transaction->payment_4_date   = $transaction->scheduled_payments[2]->payment_date;
				TransactionsHelper::getPaymentsInfo($transaction);
			}


			// if ($transaction->payment_plan) {
			// }



			$transaction->product_type_id 	 = $transaction->orderItem->product->product_type_id;
			$transaction->schedule          = "N/A";

			// Get the Start Dates
			$transaction->start_date        = "N/A";
			$transaction->end_date          = "N/A";
			TransactionsHelper::getSchedule($transaction);



		}


		return View::make('scaffolds.transactions.master', compact('transactions'));
	}


}
