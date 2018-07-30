<?php

namespace App\Http\Controllers;

use App\stores_control_incoming_products;
use App\stores_control_vendor_bills;
use App\stores_inventory;
use App\stores_purchase_orders_new_deliveries_and_invoices;
use App\stores_purchase_orders_new_products;
use App\stores_purchase_products;
use App\stores_purchase_vendors;
use App\stores_request_for_quotation_new_deliveries_and_invoices;
use App\stores_request_for_quotation_new_products;
use App\stores_requisitions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

Class StoresController extends Controller
{

    public function stores_home()
    {
        return view('departments.stores.home');
    }

    public function stores_purchases()
    {
        return view('departments.stores.purchases.home');
    }

    public function stores_control(){
        return view('departments.stores.purchases.control.home');
    }

    public function stores_purchase(){
        return view('departments.stores.purchases.purchase.home');
    }

    public function stores_reporting(){
        return view('departments.stores.purchases.reporting.home');
    }
    public function stores_control_incoming_products()
    {
        $incoming_results = DB::table('stores_control_incoming_products')->get();
        return view('departments.stores.purchases.control.incoming_products',[
            'incoming_results'=>$incoming_results
        ]);
    }
    public function stores_control_vendor_bills()
    {
        $vendor_results = DB::table('stores_control_vendor_bills')->get();
        return view('departments.stores.purchases.control.vendor_bills',[
            'vendor_results'=>$vendor_results
        ]);
    }



    public function stores_request_for_quotation(){
        return view('departments.stores.purchases.purchase.request_for_quotation.home');
    }

    public function stores_rfq_new_products(){
        $np_results = DB::table('stores_request_for_quotation_new_products')->get();
        return view('departments.stores.purchases.purchase.request_for_quotation.new_products',[
            'np_results'=>$np_results,
        ]);
    }

    public function stores_rfq_new_deliveries_and_invoices(){
        $ndi_results = DB::table('stores_request_for_quotation_new_deliveries_and_invoices')->get();
        return view('departments.stores.purchases.purchase.request_for_quotation.new_deliveries_and_invoices',[
            'ndi_results'=>$ndi_results,
        ]);
    }

    public function stores_purchases_purchase_orders(){
        return view('departments.stores.purchases.purchase.purchase_orders.home');
    }
    public function stores_po_new_products()
    {
        $products_results = DB::table('stores_purchase_orders_new_products')->get();
        return view('departments.stores.purchases.purchase.purchase_orders.new_products',[
            'products_results'=>$products_results
        ]);
    }
    public function stores_po_new_deliveries_and_invoices()
    {
        $deliveries_results = DB::table('stores_purchase_orders_new_deliveries_and_invoices')->get();
        return view('departments.stores.purchases.purchase.purchase_orders.new_deliveries_and_invoices',[
            'deliveries_results'=>$deliveries_results
        ]);
    }


    public function stores_purchase_vendors(){
        $spv_results = DB::table('stores_purchase_vendors')->get();
        return view('departments.stores.purchases.purchase.vendors',[
            'spv_results'=>$spv_results,
        ]);
    }

    public function stores_purchase_products(){
        $spp_results = DB::table('stores_purchase_products')->get();
        return view('departments.stores.purchases.purchase.products',[
            'spp_results'=>$spp_results,
        ]);
    }



    public function inventory()
    {
        $inventory_results = DB::table('stores_inventories')->get();
        return view('departments.stores.inventory',[
            'inventory_results'=>$inventory_results
        ]);
    }


    public function requests()
    {
        $requests_results = DB::table('stores_requests')->get();
        return view('departments.stores.requests',['requests_results' => $requests_results]);
    }


    public function suppliers()
    {
        $suppliers_results = DB::table('stores_suppliers')->get();
        return view('departments.stores.suppliers',['suppliers_results' => $suppliers_results]);
    }
    public function requisitions()
    {

        $requisitions_results = DB::table('stores_requisitions')->get();
        return view('departments.stores.requisitions',['requisitions_results'=>$requisitions_results]);
    }
    public function inventory_post()
    {
        $inventory = new stores_inventory(Input::all());
        $inventory->save();
        return redirect(route('inventory'));
    }
    public function requisitions_post()
    {
        $inventory = new stores_requisitions(Input::all());
        $inventory->save();
        return redirect(route('requisitions'));
    }

    public function stores_control_incoming_products_post()
    {
        $products = new stores_control_incoming_products(Input::all());
        $products->save();
        return redirect(route('stores_control_incoming_products'));
    }

    public function stores_po_new_products_post()
    {
        $newproducts = new stores_purchase_orders_new_products(Input::all());
        $newproducts->save();
        return redirect(route('stores_po_new_products'));
    }
    public function stores_po_new_deliveries_and_invoices_post()
    {
        $newdeliveries = new stores_purchase_orders_new_deliveries_and_invoices(Input::all());
        $newdeliveries->save();
        return redirect(route('stores_po_new_deliveries_and_invoices'));
    }
    public function stores_control_vendor_bills_post()
    {
        $vendorbill = new stores_control_vendor_bills(Input::all());
        $vendorbill->save();
        return redirect(route('stores_control_vendor_bills'));
    }

    public function stores_rfq_new_deliveries_and_invoices_post(){
        $rfq_new_deliveries = new stores_request_for_quotation_new_deliveries_and_invoices(Input::all());
        $rfq_new_deliveries->save();
        return redirect(route('stores_rfq_new_deliveries_and_invoices'));
    }

    public function stores_rfq_new_products_post(){
        $rfq_new_products = new stores_request_for_quotation_new_products(Input::all());
        $rfq_new_products->save();
        return redirect(route('stores_rfq_new_products'));
    }

    public function stores_purchase_products_post(){
        $stores_purchase_products = new stores_purchase_products(Input::all());
        $stores_purchase_products->save();
        return redirect(route('stores_purchase_products'));
    }

    public function stores_purchase_vendors_post(){
        $stores_purchase_vendors = new stores_purchase_vendors(Input::all());
        $stores_purchase_vendors->save();
        return redirect(route('stores_purchase_vendors'));
    }

}