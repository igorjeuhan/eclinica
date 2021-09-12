<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class AdmController extends Controller
{
    public function adm()
    {
        $customers = Customer::all();

        return view('admin.adm.adm', compact('customers'));
    }

    public function formAdd(CustomerRequest $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage =  $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/customers'), $imageName);
        }
        Customer::create($request->all());

        return redirect()->route('site.adm');
    }

    public function deletar($id)
    {
        Customer::destroy($id);
        return redirect()->route('site.adm');
    }
}
