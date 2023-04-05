<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Resources\customerCollection;
use App\Http\Resources\customerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Method;

class customerController extends Controller
{
    public function index(){
        return new customerCollection(customer::all());
    }

    public function show(Customer $customer){
        return new customerResource($customer);
    }
    public function store(StoreCustomerRequest $request){
        Customer::create($request->validated());
        return response()->json('created customer');
    }
    public function update(StoreCustomerRequest $request , Customer $customer){
        $customer->update($request->validated());
        return response()->json('costumer updated');
    }
    public function destroy( Customer $customer){
        $customer->delete();
      
    }
}
