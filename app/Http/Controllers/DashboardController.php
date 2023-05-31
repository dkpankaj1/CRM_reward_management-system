<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        /** ------------- sale data -------------- */
        $sales =  Purchase::select(
            DB::raw('year(created_at) as year'),
            DB::raw('month(created_at) as month'),
            DB::raw('sum(amt) as amt'),
        )
            ->where(DB::raw('date(created_at)'), '>=', (string)date('Y')."-01-01")
            ->groupBy('year')
            ->groupBy('month')
            ->get()
            ->toArray();

            $data =(array) [0,0,0,0,0,0,0,0,0,0,0,0];
            foreach($sales as $sale ){
               $data[$sale['month']] = $sale['amt'];
            }

        /** ------------- reward data -------------- */

        $customers = Customer::latest()->take(5)->get();
        $r = DB::table('customers')
            ->where('purchases.isredeem','=', "0")
            ->where('purchases.deleted_at','=', null)
            ->select('customers.id as customer_id', 'customers.name', 'customers.vehicle_number', 'customers.phone', DB::raw('sum(purchases.reward) as rewards'))
            ->join('purchases', 'customers.id', '=', 'purchases.customer_id')
            ->groupBy(['customers.id', 'customers.name', 'customers.vehicle_number', 'customers.phone'])
            ->take(5)
            ->orderBy('rewards', 'DESC')
            ->get();

        // dd($r);

        return view('dashboard', ['customers' => Customer::latest()->take(5)->get(), 'rewards' => $r,'saledata' => $data]);
    }
}