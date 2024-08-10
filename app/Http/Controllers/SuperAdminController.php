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
        return view('User.superadmin.expense.expense_categories.create');
    }
    public function superadmin_expense_category_index()
    {
        return view('User.superadmin.expense.expense_categories.index');
    }
    public function superadmin_report_in_stock_medicine()
    {
        return view('User.superadmin.report.in_stock');
    }
    public function superadmin_report_low_stock_medicine()
    {
        return view('User.superadmin.report.low_stock');
    }
    public function superadmin_report_upcoming_stock_medicine()
    {
        return view('User.superadmin.report.upcoming_expried');
    }
    public function superadmin_report_expire_stock_medicine()
    {
        return view('User.superadmin.report.already_expried');
    }
}
