<?php 

namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use Mail;
use Request;
use DateTime;
use \Input as Input;
use File;
use App\Http\Controllers\ZipArchive;

class MainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	}
	public function home()
	{
		return view('ticket_views.home');
	}
	public function login_auth()
	{
		$user_id = Request::get('user_id');
		$user_password = Request::get('user_password');

		$result_list =  \DB::select(\DB::raw("SELECT * FROM user_table")); 
		foreach($result_list as $result)
		{
			if($result->user_id == $user_id)
			{
				if($result->user_password == $user_password)
				{
					if($result->user_type == 'admin')
					{
						$_SESSION['TICKET_USER_ID'] = $user_id;
						$_SESSION['TICKET_USER_TYPE'] = $user_type;
						return view('ticket_views.home');
					}
					if($result->user_type == 'user')
					{
						$client_id = $result->client_id;
						if($client_id == 'c_robi')
						{
							$_SESSION['TICKET_USER_ID'] = $user_id;
							$_SESSION['TICKET_USER_TYPE'] = $result->user_type;
							$_SESSION['TICKET_USER_CLIENT_ID'] = $client_id;
							$_SESSION['TICKET_USER_CLIENT_TYPE'] = 'telco';
							return view('ticket_views.create_ticket_client');
						}
					}
				}
			}
		}

	}

	

}
