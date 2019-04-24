<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use App\JamOperasi;
use App\Lapangan;
use App\Profile_Customer;
use App\Profile_Mitra;
use App\Reservation;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {
        return view('Customer.beranda');
    }
    public function indexFutsal()
    {
    	$data['field'] = Lapangan::orderBy('created_at', 'desc')->get();
        return view('Customer.Futsal.beranda', $data);
    }
}
