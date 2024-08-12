<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Backend\StoreCustomerRequest;

class Customers extends Controller
{
    public function index(StoreCustomerRequest $request)
    {
        // dd('Backend');
        return view('customers::backend.index');
    }
}
