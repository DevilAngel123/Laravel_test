@INCLUDE('products.admin.layout.head')

<!-- Page Wrapper -->

<div id="wrapper">

@INCLUDE('products.admin.layout.navbar')

<!-- Content Wrapper -->

<div id="content-wrapper" CLASS="d-flex flex-column">

<!-- Main Content -->

<div id="content">

@INCLUDE('products.admin.layout.navbar')

<!-- Begin Page Content -->

<div CLASS="container-fluid">

@yield('content')

</div>

<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

@INCLUDE('products.admin.layout.footer')

</div>

<!-- End of Content Wrapper -->

</div>

<!-- End of Page Wrapper -->

@INCLUDE('products.admin.layout.js')