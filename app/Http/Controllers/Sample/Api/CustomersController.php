<?php

namespace App\Http\Controllers\Sample\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('sample.api.customers');
    }

}
