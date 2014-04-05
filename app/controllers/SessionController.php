<?php

class SessionController extends \BaseController {

	protected $layout = 'layouts.default';

	/**
	 * Show the login form
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.create')->nest('footer', 'child.footer')->nest('navigation', 'child.header');
	}
 
 	/**
 	 * Validate and create the user's session
 	 */
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
	 * Log the user out
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}