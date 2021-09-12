<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;

class PrincipalController extends Controller
{
    public function principal()
    {
        $customers = Customer::all();
        return view('admin.principal.principal', compact('customers'));
    }
}
