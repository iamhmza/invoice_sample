<?php

namespace App\Http\Controllers;

use App\Client;
use App\Organization;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($org_id)
    {
        $organization = Organization::find($org_id);

        if (!$organization->exists()) {
            return redirect('/organization/list')->with('message', 'no organization matched');
        }

        return view('client.index', compact('organization'));

    }
    public function create()
    {
        $organizations = Organization::all();
        return view('client.create', compact('organizations'));
    }

    public function store(Request $request)
    {

        $validateOrganization = $request->validate([
            'organization_id' => 'required',
            'company_name' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
            'zip' => 'required|max:255',
        ]);

        Client::create($validateOrganization);

        return redirect('/client')->with('success', 'Organization has successfully saved');

    }
}
