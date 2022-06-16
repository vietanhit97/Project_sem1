<?php
$menus = config('menu'); //config/menu.php duyệt menu
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/AdminLTE.css">
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/_all-skins.min.css">
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url('public/admincss')}}/css/style.css" />
    <script src="{{url('public/admincss')}}/js/angular.min.js"></script>
    <script src="{{url('public/admincss')}}/js/app.js"></script>
    <script>
    function base_url() {
        return "{{url('')}}"; //trả về đường link gốc
    }
    </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                           
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                           
                            <ul class="dropdown-menu">
                               
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://i.pinimg.com/474x/b2/57/81/b2578191becd55a7ebbc3aa9cfda9a7a.jpg" class="user-image" alt="">
                                <span class="hidden-xs">{{auth()->user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Thông Tin</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat">Đăng
                                            xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://i.pinimg.com/474x/b2/57/81/b2578191becd55a7ebbc3aa9cfda9a7a.jpg" class="img-circle" >
                    </div>
                    <div class="pull-left info">
                        <p>{{auth()->user()->name}}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                
                @foreach($menus as $menu)
                @if(isset($menu['items']) && count($menu['items']) > 0) 
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa {{$menu['icon']}}"></i> <span>{{$menu['title']}}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @foreach($menu['items'] as $item)
                            <li><a href="{{route($item['route'])}}"><i class="fa fa-circle-o"></i>{{$item['title']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li class="treeview">
                        <a href="{{route($menu['route'])}}">
                            <i class="fa {{$menu['icon']}}"></i> <span>{{$menu['title']}}</span>
                        </a>
                    </li>
                    
                    @endif
                </ul>
                @endforeach
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    @if(Session::has('ok'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('ok')}}
                    </div>
                    @endif
                    @if(Session::has('no'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('no')}}
                    </div>
                    @endif
                    <div class="box-body">
                        @yield('content')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>C2103LM 2021-2022 <a href="https://adminlte.io">Team@dminStudio</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->

    <script src="{{url('public/admincss')}}/js/jquery.min.js"></script>
    <script src="{{url('public/admincss')}}/js/jquery-ui.js"></script>
    <script src="{{url('public/admincss')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/admincss')}}/js/adminlte.min.js"></script>
    <script src="{{url('public/admincss')}}/js/dashboard.js"></script>
    <!-- <script src="tinymce/tinymce.min.js"></script>
<script src="tinymce/config.js"></script> -->
    <script src="{{url('public/admincss')}}/tinymce/tinymce.min.js"></script>
    <script src="{{url('public/admincss')}}/tinymce/config.js"></script>
    <script src="{{url('public/admincss')}}/js/function.js"></script>
    @yield('js')
</body>

</html>