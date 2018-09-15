<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BP Website</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
  @include('inc.navbar')

  <div class="container">
    @yield('content')
  </div>
</body>
</html>