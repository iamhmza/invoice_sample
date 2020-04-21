<?php

namespace App\Http\Controllers;

use App\Organization;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organization = Organization::all();

        return view('list', compact('organization'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validateOrganization = $request->validate([
            'company_name' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'zip' => 'required|max:255',
        ]);

        Organization::create($validateOrganization);

        return redirect('/organization')->with('success', 'Organization has successfully saved');

    }

    public function downloadPDF($id)
    {

        $organization = Organization::find($id);
        $pdf = PDF::loadView('pdf.download', compact('or$organization'));

        return $pdf->download("invoice-$organization->id-$organization->created_at.pdf");
    }

    public function preview($id)
    {
        $organization = Organization::find($id);
        return view('pdf.preview', compact('organization'));
    }
}
