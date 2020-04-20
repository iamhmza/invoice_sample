@extends('layout')

@section('content')

<h3>Create invoice</h3>

@if ($errors->any())
<div style="padding: 2rem;">
  <ul>
    @foreach ($errors->all() as $error)
    <li style="color:red">{{ $error }}</li>
    @endforeach
  </ul>
</div><br />
@endif

<form method="POST" action="{{ route('invoice.store')}}">
  @csrf
  <div class="row">
    <div class="four columns">
      <label for="company">Company Name</label>
      <input class="u-full-width" type="text" placeholder="company name" name="company_name" id="company">
    </div>

    <div class="four columns">
      <label for="name">Name</label>
      <input class="u-full-width" type="text" placeholder="name" name="name" id="name">
    </div>

    <div class="four columns">
      <label for="invoice_id">Invoice ID</label>
      <input class="u-full-width" type="text" placeholder="invoice id" name="invoice_id" id="invoice_id">
    </div>

  </div>

  <input class="button-primary" type="submit" value="Submit">
</form>



@endsection