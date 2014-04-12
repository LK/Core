<?php

class AdminUserController extends \BaseController {

	public function index()
	{
		$users = User::all();

		return View::make('admin.user.index')->withUsers($users)->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		if ($user) return View::make('admin.user.show')->withUser($user)->nest('navigation', 'child.header')->nest('footer', 'child.footer');
		else return View::make('errors.404')->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return Redirect::route('admin.users.index');
	}

}
