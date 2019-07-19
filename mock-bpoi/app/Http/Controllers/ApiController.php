<?php

namespace App\Http\Controllers;

use App\Api;
use App\Http\Resources\Api as ApiResource;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use StdClass;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function getEmp(Request $request,$empId)
    {
    	$popo = new StdClass();
    	if ($request->header('token')) {
    		if($request->header('token') == 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyYWRtaW5faWQiOiJVU0VSQURNSU4wMDEiLCJ0eXBlIjoiYWRtaW4iLCJpYXQiOjE1MjYyOTQ4NzEsImV4cCI6MTUyNjM4MTI3MX0.SX-LzZZCD6jWhMlg8990ZKXQUZTJ4OLRu17c7xNQd2g')
        	{
        	}
        	else
        	{
    	    	$popo->success = false;
        		$popo->message='Authentication failed. User not found.';
        		return response()->json($popo);
        	}
    	}
    	else
    	{
        	$popo->success = false;
    		$popo->message='Authentication failed. User not found.';
    		return response()->json($popo);
    	}

    	$popo->bu_code = 'BPOI';
    	$popo->first_name = 'Mark';
    	$popo->middle_name = 'Anthony';
    	$popo->last_name = 'Fernandez';
    	$popo->date_of_birth = '1980--01--31';
    	$popo->email = 'mac@thousandminds.com';
    	$popo->mobile_number = '09171234567';
    	$popo->secondary_phone_number = '021234567';
    	$popo->tin = '111-111-102';
    	$popo->sss = '10-0000001-2';
    	$popo->nationality = 'Filipino';
    	$popo->gender = 'Male';
    	$popo->permanent_address = 'Unit 123, Zeta Building, 1 Salcedo Street, Makati City, Philippines';
    	$popo->base_monthly_salary = '10000.00';
    	$popo->net_monthly_salary = '10000.00';
    	$popo->employment_start_date = '1/1/1900';
    	$popo->employment_status = 'REGULAR';
    	$popo->bank_name = 'BPI';
    	$popo->bank_account_no = '1000000097';
    	$popo->payday_schedule = '15/30';

    	return response()->json($popo);
    }
    public function authenticator(Request $request)
    {
    	$popo = new StdClass();
    	if($request->username == 'FSP-P2P' && $request->password=='123456789')
    	{
        	$popo->message='User authenticated!';
        	$popo->token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyYWRtaW5faWQiOiJVU0VSQURNSU4wMDEiLCJ0eXBlIjoiYWRtaW4iLCJpYXQiOjE1MjYyOTQ4NzEsImV4cCI6MTUyNjM4MTI3MX0.SX-LzZZCD6jWhMlg8990ZKXQUZTJ4OLRu17c7xNQd2g';
    	}
    	else
    	{
        	$popo->success = false;
    		$popo->message='Authentication failed. User not found.';
    	}

    	return response()->json($popo);
    }
    public function confirm()
    {
    	$popo = new StdClass();
    	
    	$popo->message='Success';

    	return response()->json($popo);
    }
    public function xor_this($string) 
    {

        $encrypted = Crypt::encryptString('Hello world.');

        $decrypted = Crypt::decryptString($encrypted);

        return $decrypted;
    }
}