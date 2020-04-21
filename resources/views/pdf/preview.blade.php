<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> pdf Document preview</title>
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/skeleton.css') }}" rel="stylesheet" type="text/css" />

  <style>
    .preview {
      background-color: #eee;
      padding: 3rem 4rem;
      box-sizing: border-box;
    }

    .preview>div {
      border: 2px solid #ccc;
      background-color: #fff;
      padding: 3rem;
      height: 1080px;
    }
  </style>
</head>

<body>


  <section class="preview">

    <div class="container">

      @include('pdf/download')

    </div>
  </section>



</body>

</html>