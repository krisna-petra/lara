<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Halo Laravel</title>
</head>
<body>
    <div class="container">
        {{-- Header --}}
        <div class="row">
            <div class="col-md-12 p-3 border border-dark"><h2>Halo Laravel</h2></div>
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark">
                @include('includes.sidenav')
            </div>
            <div class="col-md-10 border border-dark">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
</body>
</html>
