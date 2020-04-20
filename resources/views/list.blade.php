@extends('layout')

@section('content')

<h3>Invoices</h3>

<table class="u-full-width">
  <thead>
    <tr>
      <th>Company</th>
      <th>Name</th>
      <th>Invioce ID</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($invoices as $invoice)
    <tr>
      <td>{{$invoice->company_name}}</td>
      <td>{{$invoice->name}}</td>
      <td>{{$invoice->invoice_id}}</td>
      <td>
        <a class="button button-primary" href="{{action('InvoiceController@downloadPDF', $invoice->id)}}">Download
          PDF</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection