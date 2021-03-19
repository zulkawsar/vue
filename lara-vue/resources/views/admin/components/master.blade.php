<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
      <!-- Navbar -->
      @include('admin.components.navbar')
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      @include('admin.components.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       {{--  <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Blank Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blank Page</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section> --}}
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <router-view></router-view>
          <!-- /.card -->
        </section>
        <!-- /.content -->
      </div>

      @include('admin.components.footer')

    </div>
    <!-- ./wrapper -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </body>
</html>