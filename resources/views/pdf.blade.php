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
      Company
    </div>
    <div class="six columns">
      <h1 style="text-align:right">Invoice</h1>
    </div>
  </div>
  <table class="u-full-width">
    <thead>
      <tr>
        <td><b>Company</b></td>
        <td><b>Name</b></td>
        <td><b>Invoice ID</b></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          {{$invoice->company_name}}
        </td>
        <td>
          {{$invoice->name}}
        </td>
        <td>
          {{$invoice->invoice_id}}
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>