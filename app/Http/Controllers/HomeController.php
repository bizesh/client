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
        
        $data = \App\ClientDetailsModel::paginate(20);

        return view('welcome')
                ->with('client_list', $data);
    }


    public function getClientPaymentsInfo(){
        $data = \App\ClientPaymentsModel::paginate(20);

        return view('payment')
                ->with('payment', $data);

    }

    public function getClientRenewalsInfo(){
        $user = \DB::table('client_details')
        ->join('renewal', 'client_details.id', '=', 'renewal.client_id')
        ->select('renewal.*', 'client_details.name')
        ->get();
        return view('renewal')->with('renewal',$user);

    }


    public function getServiceRecord(){
        $user = \DB::table('client_details')
        ->join('service', 'client_details.id', '=', 'service.client_id')
        ->select('service.*', 'client_details.name')
        ->get();
        return view('service')->with('service',$user);
    }


    public function getStaff(){
        $user = \DB::table('client_details')
        ->join('client_staff', 'client_details.id', '=', 'client_staff.client_id')
        ->select('client_staff.*', 'client_details.name')
        ->get();
        return view('staff')->with('staff',$user);
    }

    public function getSearchView(){
        return view('search');
    }

    public function getSearchResults(){
        return view('searchResults');
    }


   


}

