<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        try {
            $resources = Purchase::query();
            /** if isset search */ 
            if (request('search')) {
               $resources->where('name', 'Like', '%' . request('search') . '%')
                   ->orwhere('card', 'Like', '%' . request('search') . '%');
            }
            $data =  $resources->paginate(10);
            return view('index', compact('data'));
        } catch (\Exception $e) {
            return view('error.404', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        try {
            $resource = Customer::all();
            return view('purchase.create',['customers' => $resource]);
        } catch (\Exception $e) {
            return view('error.404', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
        ]);

        $data = [ 
        ];

        try {
            Purchase::create($data);
            return redirect()->route('index')->with('success', 'Create successfull');
        } catch (\Exception $e) {
            return back()->with('danger', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase) : View
    {
         try {
            return view('show', ['data' =>$purchase]);
        } catch (\Exception $e) {
            return view('error.404', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase) : View
    {
         try {
            return view('edit', ['data' => $purchase]);
        } catch (\Exception $e) {
            return view('error.404', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase) :RedirectResponse
    {
      $request->validate([
        ]);

        $data = [ 
        ];

        try {
            $purchase->update($data);
            return redirect()->route('index')->with('success', 'Update successfull');
        } catch (\Exception $e) {
            return back()->with('danger', $e->getMessage());
        }   
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function delete(Purchase $purchase) : View
    {
        try {
            return view('delete', ['data' => $purchase]);
        } catch (\Exception $e) {
            return view('error.404', ['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase) : RedirectResponse
    {
        try {
            $purchase->delete();
            return redirect()->route('index')->with('success', 'delete successfull');
        } catch (\Exception $e) {
            return back()->with('danger', $e->getMessage());
        }
    }
}
