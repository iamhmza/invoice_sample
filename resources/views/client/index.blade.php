@extends('layout')

@section('content')

<section>
  <h3>{{$organization->company_name}}</h3>
  <h4>list of Clients</h4>

  <div class="row">
    @foreach ($organization->clients as $client)
    <ul>
      <li><strong>{{$client->company_name}}</strong></li>
      {{-- <li>{{$client->address}}</li>
      <li>{{$client->city}} , {{$client->state}}, {{$client->zip}}</li>
      <li>{{$client->country}}</li> --}}
    </ul>
    @endforeach

    <div class="u-cf"></div>
  </div>

</section>


@endsection