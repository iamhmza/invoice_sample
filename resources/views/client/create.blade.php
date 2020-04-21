@extends('layout')

@section('content')


@if (session('success'))
<div style="padding: 2rem; color:green; background-color:lightgreen">
  {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div style="padding: 2rem;">
  <ul>
    @foreach ($errors->all() as $error)
    <li style="color:red">{{ $error }}</li>
    @endforeach
  </ul>
</div><br />
@endif

<section class="section">

  <h3 class="head">
    Add new client
  </h3>

  <div class="body">

    <form method="POST" action="{{ route('client.store')}}">
      @csrf
      <div class="row">
        <div class="twelve columns">
          <label for="organization">Organization</label>
          <select class="u-full-width" id="organization" name="organization_id">
            @foreach ($organizations as $org)

            <option value="{{$org->id}}">{{$org->company_name}}</option>

            @endforeach
          </select>
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="company">Company Name</label>
          <input class="u-full-width" type="text" placeholder="company name" name="company_name" id="company">
        </div>

        <div class="six columns">
          <label for="name">Your Name</label>
          <input class="u-full-width" type="text" placeholder="name" name="name" id="name">
        </div>

      </div>
      <div class="row">
        <div class="twelve columns">
          <label for="address">address</label>
          <input class="u-full-width" type="text" placeholder="address" name="address" id="address">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="city">City</label>
          <input class="u-full-width" type="text" placeholder="city" name="city" id="city">
        </div>

        <div class="six columns">
          <label for="state">State</label>
          <input class="u-full-width" type="text" placeholder="state" name="state" id="state">
        </div>

      </div>
      <div class="row">
        <div class="six columns">
          <label for="country">Country</label>
          <input class="u-full-width" type="text" placeholder="country" name="country" id="country">
        </div>

        <div class="four columns">
          <label for="zip">Zip</label>
          <input class="u-full-width" type="text" placeholder="zip" name="zip" id="zip">
        </div>

      </div>

      <input class="button-primary" type="submit" value="Submit">
    </form>
  </div>
</section>




@endsection