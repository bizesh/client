<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getPaymentView(){

        return view('payment');
    }

    public function getClientInfoList(){
        
        $search['name'] = \Input::get('name', '');
        $search['address'] = \Input::get('address', '');
        $search['phone'] = \Input::get('phone', '');
        $search['contract_created'] = \Input::get('contract_created', '');
        $search['start_date'] = \Input::get('start_date', '');
        $search['end_date'] = \Input::get('end_date', '');

        $data = new \App\ClientDetailsModel;

        if(strlen(trim($search['name'])))
        {
            $data = $data->where('name', 'LIKE', '%'.$search['name'].'%');
        }

        if(strlen(trim($search['phone'])))
        {
            $data = $data->where('phone', 'LIKE', '%'.$search['phone'].'%');
        }

        if(strlen(trim($search['address'])))
        {
            $data = $data->where('address', 'LIKE', '%'.$search['address'].'%');
        }

        if(strlen(trim($search['start_date'])))
        {
            $data = $data->where('contract_created', '>=', $search['start_date']);
        }

        if(strlen(trim($search['end_date'])))
        {
            $data = $data->where('contract_created', '<=', $search['end_date']);
        }

        $data = $data->paginate(20);       


        return view('welcome')
                ->with('client_list', $data)
                ->with('search', $search);


    }


    public function getClientPaymentsInfo(){
        $user = \DB::table('client_details')
        ->join('payment', 'client_details.id', '=', 'payment.client_id')
        ->join('renewal', 'payment.renewal_id', '=', 'renewal.id')
        ->select('payment.*', 'client_details.name','client_details.id as client_id')
        ->get();
        return view('payment')->with('payment',$user);

    }

    public function getClientRenewalsInfo(){
        $user = \DB::table('client_details')
        ->join('renewal', 'client_details.id', '=', 'renewal.client_id')
        ->select('renewal.*', 'client_details.name','client_details.id as client_id')
        ->get();

        $data = \App\ClientDetailsModel::get();
        return view('renewal')->with('renewal',$user)->with('name',$data);

    }


    public function getServiceRecord(){
        $user = \DB::table('client_details')
        ->join('service', 'client_details.id', '=', 'service.client_id')
        ->select('service.*', 'client_details.name','client_details.id as client_id')
        ->get();

        $data = \App\ClientDetailsModel::get();
       


        return view('service')->with('service',$user)->with('name',$data);
    }


    public function getServicePayments(){
        $user = \DB::table('client_details')
        ->join('service_payment', 'client_details.id', '=', 'service_payment.client_id')
        ->join('service', 'service.id', '=', 'service_payment.service_id')
        ->select('service_payment.*', 'client_details.name','client_details.id as client_id','service_payment.service_id')
        ->get();

        $data = \App\ClientDetailsModel::get();
       


        return view('service_payment')->with('service_payment',$user)->with('name',$data);
    }



    public function getStaff(){
        $user = \DB::table('client_details')
        ->join('client_staff', 'client_details.id', '=', 'client_staff.client_id')
        ->select('client_staff.*', 'client_details.name','client_details.id as client_id')
        ->get();
        $data = \App\ClientDetailsModel::get();
        return view('staff')->with('staff',$user)->with('name',$data);
    }

    public function getSearchView(){
        return view('search');
    }

    public function getSearchResults(){
        return view('searchResults');
    }


   


}

