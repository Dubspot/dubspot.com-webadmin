<?php

class Promotions_issuedController extends BaseController {

	/**
	 * Promotion_issued Repository
	 *
	 * @var Promotion_issued
	 */
	protected $promotion_issued;

	public function __construct(PromotionIssued $promotion_issued)
	{
		$this->promotion_issued = $promotion_issued;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $promotions_issued = $this->promotion_issued->all();
		$promotions_issued = PromotionIssued::paginate(50);

		return View::make('scaffolds.promotions_issued.index', compact('promotions_issued'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scaffolds.promotions_issued.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, PromotionIssued::$rules);

		if ($validation->passes())
		{
			$this->promotion_issued->create($input);

			return Redirect::route('promotions_issued.index');
		}

		return Redirect::route('promotions_issued.create')
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
		$promotion_issued = $this->promotion_issued->findOrFail($id);

		return View::make('scaffolds.promotions_issued.show', compact('promotion_issued'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promotion_issued = $this->promotion_issued->find($id);

		if (is_null($promotion_issued))
		{
			return Redirect::route('promotions_issued.index');
		}

		return View::make('scaffolds.promotions_issued.edit', compact('promotion_issued'));
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
		$validation = Validator::make($input, PromotionIssued::$rules);

		if ($validation->passes())
		{
			$promotion_issued = $this->promotion_issued->find($id);
			$promotion_issued->update($input);

			return Redirect::route('promotions_issued.show', $id);
		}

		return Redirect::route('promotions_issued.edit', $id)
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
		$this->promotion_issued->find($id)->delete();

		return Redirect::route('promotions_issued.index');
	}

}
