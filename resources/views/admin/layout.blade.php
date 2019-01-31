<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico"/>
    <title>Wardrobe CMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('js/admin/require.min.js') }}"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('css/bundle.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
    {{--<script src="./assets/js/dashboard.js"></script>--}}
    <!-- c3.js Charts Plugin -->
    {{--<link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />--}}
    {{--<script src="./assets/plugins/charts-c3/plugin.js"></script>--}}
    <!-- Google Maps Plugin -->
    {{--<link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />--}}
    {{--<script src="./assets/plugins/maps-google/plugin.js"></script>--}}
    <!-- Input Mask Plugin -->
    {{--<script src="./assets/plugins/input-mask/plugin.js"></script>--}}
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="./index.html">
                        Wardrobe CMS
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar" style="background-image: url({{ auth()->user()->gravatar }})"></span>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default">{{ auth()->user()->name }}</span>
                                    <small class="text-muted d-block mt-1">Administrator</small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                       data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 ml-auto">
                        <a href="" class="btn btn-block btn-outline-primary">
                            <i class="fe fe-edit"></i> Add Post
                        </a>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->route()->named('admin.dashboard') ? 'active' : '' }}"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-toggle="dropdown"><i class="fe fe-book"></i> Posts</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="" class="dropdown-item ">Published</a>
                                    <a href="" class="dropdown-item ">Drafts</a>
                                    <a href="" class="dropdown-item ">Series</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"><i class="fe fe-trending-up"></i> Analytics</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"><i class="fe fe-users"></i> Authors</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"><i class="fe fe-settings"></i> Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source
                                code</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright &copy; {{ date('Y') }} <a href="http://wardrobecms.com">Wardrobe CMS</a>.
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>