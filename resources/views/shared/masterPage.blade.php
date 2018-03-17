<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Laiane Hermes">
        <title>@yield('title')</title>
        @include('shared.defaultAssets')
        
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Laiane Lima Hermes Souza</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">{{trans('default.masterpage.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">{{trans('default.masterpage.services')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">{{trans('default.masterpage.portfolio')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">{{trans('default.masterpage.contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        
        @yield('scripts')
        <script type="text/javascript">        
            /* function menuControl() {
                
            }
            window.menuBar = new menuControl();
            $(function () {
                ko.applyBindings(menuBar, document.getElementById('page-top'));
            }) */
        </script>
    </body>
</html>
