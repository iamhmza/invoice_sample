@extends('layout')

@section('content')

<h3>Invoices</h3>

<table class="u-full-width">
  <thead>
    <tr>
      <th>Company</th>
      <th>Name</th>
      <th>address</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($organization as $organization)
    <tr>
      <td>{{$organization->company_name}}</td>
      <td>{{$organization->name}}</td>
      <td>{{$organization->address}}</td>
      <td>
        <a class="button button-primary" href="{{action('OrganizationController@downloadPDF', $organization->id)}}">
          download PDf
        </a>
        <a class="button" href="{{action('OrganizationController@preview', $organization->id)}}">
          preview
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection