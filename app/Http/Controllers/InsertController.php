<?php

namespace App\Http\Controllers;


use App\ClientDetailsModel;
use App\ClientServiceModel;
use App\ClientRenewalsModel;
use App\ClientPaymentsModel;
use App\ClientStaffModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsertController extends Controller
{
    
    public function storeClient(Request $request)
    {
        
        $client = new ClientDetailsModel;

        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->contract_created = $request->cc;

        $client->save();
        \Session::flash('flash_message','New Client has been Added');
        return redirect()->back(); 
    }

    public function storeService(Request $request)
    {
        
        $service = new ClientServiceModel;

        $service->client_id = $request->name;
        $service->service_date = $request->sd;
        $service->served_by = $request->sb;
        $service->remarks = $request->rem;
        

        $service->save();
        \Session::flash('flash_message','New Service Record Added');
        return redirect()->back(); 
    }

    public function storeRenewal(Request $request)
    {
        \DB::beginTransaction();
        $renewal = new ClientRenewalsModel;
        $payment = new ClientPaymentsModel;

        $renewal->client_id = $request->name;
        $renewal->renewal_date= $request->rd;
        $renewal->total_receipt_amount = $request->tra;
        $renewal->next_renewal = $request->nr;

        $renewal->save();

        $payment->client_id = $request->name;
        $payment->renewal_id = $renewal->id;
        $payment->paid_at= $request->rd;
        $payment->paid_amount= $request->tra;
        $payment->remarks = "renewal";
        
        
        $payment->save();
        \DB::commit();
        \Session::flash('flash_message','New Renewal Record Added');
        return redirect()->back(); 
    }
    public function storeStaff(Request $request)
    {
        
        $staff = new ClientStaffModel;

        $staff->client_id = $request->name;
        $staff->position= $request->position;
        $staff->staff_name = $request->staff_name;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->address = $request->address;
        

        $staff->save();
        \Session::flash('flash_message','New Client Staff Record Added');
        return redirect()->back(); 
    }
   
}
