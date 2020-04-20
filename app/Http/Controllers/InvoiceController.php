<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    //

    public function index()
    {
        $invoices = Invoice::all();

        return view('list', compact('invoices'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validateInvioce = $request->validate([
            'company_name' => 'required|max:255',
            'name' => 'required|max:255',
            'invoice_id' => 'required|max:255',
        ]);

        Invoice::create($validateInvioce);

        return redirect('/invoice')->with('success', 'invoice has successfully saved');

    }

    public function downloadPDF($id)
    {
        $invoice = Invoice::find($id);
        $pdf = PDF::loadView('pdf', compact('invoice'));

        return $pdf->download('disney.pdf');
    }
}
