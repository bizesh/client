<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function getPaymentView(){

        return view('payment');
    }

    public function getClientInfo(){
        return view('welcome');
    }
    public function getServiceRecord(){
        return view('service');
    }

    public function getRenewal(){
        return view('renewal');
    }

    public function getStaff(){
        return view('staff');
    }
}

