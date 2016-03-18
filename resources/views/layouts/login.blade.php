<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Latihan Laravel - @yield('title')</title>
        <link href="{{ asset("assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/global/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/global/plugins/uniform/css/uniform.default.css")}}" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset("assets/global/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("assets/admin/pages/css/login-soft.css") }}" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ asset("assets/global/css/components.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/global/css/plugins.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/admin/layout3/css/layout.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/admin/layout3/css/themes/default.css") }}" rel="stylesheet" type="text/css" id="style_color">
        <link href="{{ asset("assets/admin/layout3/css/custom.css") }}" rel="stylesheet" type="text/css">
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body class="login">
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>