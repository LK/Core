<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$users = DB::table('users')->max('id');
		$events = DB::table('events')->max('id');

		return View::make('admin.index')->withUsers($users)->withEvents($events)->nest('navigation', 'child.header')->nest('footer', 'child.footer');

	}

}
