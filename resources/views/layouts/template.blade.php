<!DOCTYPE html>
<html ng-app="adminbsb">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>AdminBSB - Material Design | Documentation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="/assets/design/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/design/plugins/node-waves/waves.min.css" rel="stylesheet" />
    <link href="/assets/design/css/style.css" rel="stylesheet" />
    <link href="/assets/design/css/themes/theme-red.min.css" rel="stylesheet" />
    <link href="/assets/design/plugins/syntaxhighlighter/styles/shThemeMidnight.css" rel="stylesheet" />
    <link href="/assets/design/css/documentation.css" rel="stylesheet" />
</head>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
        @include('partials.navbar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('partials.sidebar')
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div ng-view>@yield('content')</div>
        </div>
    </section>

    <script src="/assets/design/js/angular.min.js"></script>
    <script src="/assets/design/js/angular-route.min.js"></script>
    <script src="/assets/design/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/design/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/design/plugins/node-waves/waves.min.js"></script>
    <script src="/assets/design/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/design/plugins/syntaxhighlighter/scripts/shCore.js"></script>
    <script src="/assets/design/plugins/syntaxhighlighter/scripts/shAutoloader.js"></script>
    <script src="/assets/design/js/app.js"></script>
    <script>

    </script>
</body>
</html>
