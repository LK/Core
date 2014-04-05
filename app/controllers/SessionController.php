<?php

class SessionController extends \BaseController {

	protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('session.index')->nest('footer', 'child.footer')->nest('navigation', 'child.header');
	}

	/**
	 * Display register page
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.create')->nest('footer', 'child.footer')->nest('navigation', 'child.header');
	}
 
	public function store()
	{
		$input = Input::all();
		
		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
		]);

		if ($attempt) return Redirect::intended('/');

		dd('problem');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Log the user out
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}