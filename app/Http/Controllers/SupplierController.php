<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::all();
        
        return view('suppliers', compact('suppliers'));
    }

    public function create(){
        return view('supplier-create.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'      => 'required',
            'address'   => 'required',
            'phone'     => 'required',
        ]);

        Supplier::create([
            'name'      => $request->name,
            'address'   => $request->address,
            'phone'     => $request->phone,
        ]);

        return redirect('/suppliers')->with('message','A new supplier has been added');
    }

    public function show(Supplier $supplier)
    {
        
        return view('supview', compact('supplier'));
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect('/suppliers')->with('message', 'Supplier deleted successfully.');
    }


}
