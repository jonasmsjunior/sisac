<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <title>SISAC Admin </title>
    @include('includes.header')
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->

    @include('includes.navHeader')
    @include('includes.navLeft')
    <div id="page-wrapper">

        <div class="container-fluid">

          

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('assets/js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
