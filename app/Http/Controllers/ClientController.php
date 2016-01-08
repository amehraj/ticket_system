<?php namespace App\Http\Controllers;
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

class ClientController extends Controller {

	//
	public function create_ticket()
	{
		return view('ticket_views.create_ticket_client');
	}
	public function search_client()
	{
		return view('ticket_views.search_client');
	}
	public function dashboard_home_client()
	{
		return view('ticket_views.dashboard_home_client');
	}
	public function insert_robi_ticket()
	{
		date_default_timezone_set('Asia/Dhaka');
		$escalation_time = date('Y/m/d h:i:s a', time());
		//secho $date;
		$client_id = $_SESSION['TICKET_USER_CLIENT_ID'];
		$client_type = $_SESSION['TICKET_USER_CLIENT_TYPE'];
		// $client_priority = Request::get('client_priority');
		// $link_type = Request::get('link_type');
		$problem_category = Request::get('problem_category');
		$problem_source = Request::get('problem_source');
		// $region = Request::get('region');
		$district = Request::get('district');
		// $reason = Request::get('reason');
		$event_time = Request::get('event_time');
		$link_name = Request::get('link_name');
		$client_impact = Request::get('client_impact');
		$client_site_count = Request::get('client_site_count');
		// $vendor_site_count = Request::get('vendor_site_count');
		// $vendor_impact = Request::get('vendor_impact');
		$remarks = Request::get('remarks');
		// $ticket_status = Request::get('ticket_status');
		// $responsible_vendor = Request::get('responsible_vendor');
		// $responsible_concern = Request::get('responsible_concern');
		// $responsible_field_team = Request::get('responsible_field_team');


		

		$query_insert_robi_ticket = "INSERT INTO ticket_table (client_id,client_type,client_priority,link_type,problem_category,problem_source,region,district,reason,event_time,escalation_time,link_name,client_impact,client_site_count,vendor_site_count, vendor_impact, remarks,ticket_status,responsible_vendor,responsible_concern,responsible_field_team,attachment_path) values ('".$client_id."','".$client_type."','NULL','NULL','".$problem_category."','".$problem_source."','NULL','".$district."','NULL','".$event_time."','".$escalation_time."','".$link_name."','".$client_impact."','".$client_site_count."','NULL','NULL','".$remarks."','open','NULL','NULL','NULL','NULL');";
		\DB::insert(\DB::raw($query_insert_robi_ticket));

		$result_list =  \DB::select(\DB::raw("SELECT ticket_table_row_id FROM ticket_table ORDER BY ticket_table_row_id DESC limit 1"));

		foreach($result_list as $result)
		{
			$ticket_table_row_id = $result->ticket_table_row_id;
		}
		if(Input::hasFile('attachment_path'))
        {          
            // $path_test = '../Uploaded_Files/'.$ticket_table_row_id;    
            // if(File::exists($path_test))
            // {
            //     File::delete($path_test);
            // }
            $dirPath = '../Uploaded_Files/';
            $files = Input::file('attachment_path');
            foreach($files as $file)
            {
                // $filename = "test.txt";
                // $file->move($dirPath,$filename);
                $filename = $file->getClientOriginalName();
		 		$file->move($dirPath,$filename);
            }
            
        }
		$attachment_path = 'uploaded_files/'.$ticket_table_row_id;
		$ticket_update_querystring = "UPDATE ticket_table SET attachment_path='".$attachment_path."',ticket_id='".$ticket_table_row_id."' WHERE ticket_table_row_id='".$ticket_table_row_id."'";
		\DB::update(\DB::raw($ticket_update_querystring));

	}

	

}
