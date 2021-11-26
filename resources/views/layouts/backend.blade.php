<!DOCTYPE html>
<html>
@include('includes.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('includes.nav')

    @include('includes.sidebar')

   @yield('content')


    @include('includes.footer')
</div>
<!-- ./wrapper -->

@include('includes.script')
</body>
</html>
