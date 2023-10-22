<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body>

    @include('dashboard.layouts.navbar')

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- @include('dashboard.layouts.sidebar') --}}

        {{-- @include('dashboard.layouts.topbar') --}}

                <!-- Begin Page Content -->
                <div class="container">

                    @yield('container')
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        @include('dashboard.layouts.footer')