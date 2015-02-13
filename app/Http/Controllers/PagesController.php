<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function home() {

		$data['pageTitle'] = 'Learning Laravel 5';

		return view('pages.home', $data);
	}

	public function about() {

		$data['name'] = 'Kenneth';
		$data['pageTitle'] = 'About us';

		return view('pages.about', $data);
	}

	public function contact() {

		$data['pageTitle'] = 'Contact us';

		return view('pages.contact', $data);
	}

}
