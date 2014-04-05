<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.default';

	public function index()
	{
		return View::make('home.index')->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

}