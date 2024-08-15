<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.superadmin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function superadmin_user_index()
    {
        return view('user.superadmin.user.index');
    }
    public function superadmin_role_index()
    {
        return view('user.superadmin.role.index');
    }
    public function superadmin_role_create()
    {
        return view('user.superadmin.role.create');
    }
    public function superadmin_general_setting()
    {
        return view('user.superadmin.setting.general');
    }
    public function superadmin_email_setting()
    {
        return view('user.superadmin.setting.email');
    }
    public function superadmin_language_setting()
    {
        return view('user.superadmin.setting.language');
    }
    public function superadmin_customer_create()
    {
        return view('user.superadmin.customer.create');
    }
    public function superadmin_customer_index()
    {
        return view('user.superadmin.customer.index');
    }
    public function superadmin_expense_create()
    {
        return view('user.superadmin.expense.create');
    }
    public function superadmin_expense_index()
    {
        return view('user.superadmin.expense.index');
    }
    public function superadmin_expense_category_create()
    {
        return view('user.superadmin.expense.expense_categories.create');
    }
    public function superadmin_expense_category_index()
    {
        return view('user.superadmin.expense.expense_categories.index');
    }
    public function superadmin_report_in_stock_medicine()
    {
        return view('user.superadmin.report.in_stock');
    }
    public function superadmin_report_low_stock_medicine()
    {
        return view('user.superadmin.report.low_stock');
    }
    public function superadmin_report_upcoming_stock_medicine()
    {
        return view('user.superadmin.report.upcoming_expried');
    }
    public function superadmin_report_expire_stock_medicine()
    {
        return view('user.superadmin.report.already_expried');
    }
    public function superadmin_supplier_create()
    {
        return view('user.superadmin.supplier.create');
    }
    public function superadmin_supplier_index()
    {
        return view('user.superadmin.supplier.index');
    }
    public function superadmin_vendor_create()
    {
        return view('user.superadmin.vendor.create');
    }
    public function superadmin_vendor_index()
    {
        return view('user.superadmin.vendor.index');
    }
    public function superadmin_medicine_create()
    {
        return view('user.superadmin.medicine.create');
    }
    public function superadmin_medicine_index()
    {
        return view('user.superadmin.medicine.index');
    }
    public function superadmin_medicine_category()
    {
        return view('user.superadmin.medicine.category');
    }
    public function superadmin_medicine_unit()
    {
        return view('user.superadmin.medicine.unit');
    }
    public function superadmin_medicine_leaf()
    {
        return view('user.superadmin.medicine.leaf');
    }
    public function superadmin_medicine_type()
    {
        return view('user.superadmin.medicine.type');
    }
    public function superadmin_medicine_import()
    {
        return view('user.superadmin.medicine.import');
    }
    public function superadmin_purchase_create()
    {
        return view('user.superadmin.purchase.create');
    }
    public function superadmin_purchase_index()
    {
        return view('user.superadmin.purchase.index');
    }
    public function superadmin_purchase_history()
    {
        return view('user.superadmin.purchase.history');
    }
    public function superadmin_sale_pos()
    {
        return view('user.superadmin.sale.pos');
    }



    public function superadmin_payment()
    {
        return view('user.superadmin.payment.index');
    }
}
