<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.default';

	public function index()
	{
		return View::make('home.index')->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

	public function contact()
	{
		return View::make('generic.contact')->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

	public function faq()
	{
		return View::make('generic.faq')->nest('navigation', 'child.header')->nest('footer', 'child.footer');
	}

}