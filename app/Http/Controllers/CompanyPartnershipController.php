<?php

namespace App\Http\Controllers;

use App\Models\CompanyPartnership;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyPartnershipRequest;
use App\Http\Requests\UpdateCompanyPartnershipRequest;

class CompanyPartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partnerships = CompanyPartnership::orderByDesc("id")->paginate(10);
        return view('admin.partnerships.index', compact('partnerships'));
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
    public function store(StoreCompanyPartnershipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyPartnership $partnerships)
    {
        //
        return view('admin.partnerships.details', compact('partnerships'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyPartnership $companyPartnership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyPartnershipRequest $request, CompanyPartnership $companyPartnership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyPartnership $companyPartnership)
    {
        //
    }
}
