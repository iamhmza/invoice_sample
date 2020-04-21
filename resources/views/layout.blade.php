<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>invoice generator sample</title>
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/skeleton.css') }}" rel="stylesheet" type="text/css" />

  <style>
    .section {
      background-color: #fff;
      margin-bottom: 2rem;
      margin-top: 2rem;
      box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
    }

    .section>.head {
      margin: 0;
      padding: 1.5rem;
    }

    .section>.body {
      padding: 1.5rem;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 2rem 0;
    }

    nav ul {
      display: flex;
      content: space-between;
      align-items: center;
    }

    nav ul li {
      margin-left: 1rem
    }
  </style>
</head>

<body>
  <div class="container">

    <nav>
      <h2>Invoice APP</h2>

      <ul>
        <li><a href="/organizations">Organizations</a></li>
        <li><a href="/organization">add Organization</a></li>
        <li><a href="/client">add client</a></li>
      </ul>

    </nav>
  </div>

  <div class="container">
    @yield('content')
  </div>

</body>

</html>