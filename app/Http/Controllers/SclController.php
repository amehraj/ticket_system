<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SclController extends Controller {

	public function create_ticket()
	{
		return view('ticket_views.create_ticket_scl');
	}
	public function search_scl()
	{
		return view('ticket_views.search_scl');
	}

	public function dashboard_home_scl()
	{
		return view('ticket_views.dashboard_home_scl');
	}
}
