<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/skeleton.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="row">
    <div class="six columns">
      <p> <strong>{{$organization->company_name}}</strong> </p>
      <p> {{$organization->name}} <br>
        {{$organization->address}} <br>
        {{$organization->city}}, {{$organization->state}}, {{$organization->zip}} <br>
        {{$organization->country}} </p>
    </div>
    <div class="six columns">
      <h1 style="text-align:right">organization</h1>
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
      <p> <strong>{{$organization->company_name}}</strong> </p>
      <p> {{$organization->name}} <br>
        {{$organization->address}} <br>
        {{$organization->city}}, {{$organization->state}}, {{$organization->zip}} <br>
        {{$organization->country}} </p>
    </div>
    <div class="four columns">
      <p>
        <strong>Invoice #</strong>
        <br>
        <strong>Invoice Date </strong> 02.02.20
      </p>
    </div>
  </div>
  <table class="u-full-width">
    <thead>
      <tr>
        <td><b>Company</b></td>
        <td><b>Name</b></td>
        <td><b>Address</b></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          {{$organization->company_name}}
        </td>
        <td>
          {{$organization->name}}
        </td>
        <td>
          {{$organization->address}}
        </td>
      </tr>
    </tbody>
  </table>


</body>

</html>