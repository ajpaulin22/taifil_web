<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="Tai-Fil Manpower Services Corp" name="description" />
    <meta content="Alphy Jay Paulin" name="author" />

    <!-- site favicon -->
	<link rel="icon" type="image/png" href="/images/favicon.ico">
	<!-- Place favicon.ico in the root directory -->
    <title>Tai-Fil Manpower Services Corp.</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'FTL Traceability System') }}</title>
    @push('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endpush
    <style type="text/css">

        .goog-logo-link,.goog-te-gadget span{
            display:none !important;
        }
        .goog-te-gadget{
            color:transparent!important;
            font-size :0;
        }
        .goog-te-banner-frame{
            display:none !important;
        }
        #goog-gt-tt, .goog-te-balloon-frame
        {
            display: none !important;
        }
        .goog-text-highlight 
        { 
            background: none !important;
            box-shadow: none !important;
        }
    
      </style>
    @stack('styles')
    
</head>
    {{-- <div id="page-loader" class="fade show"><span class="spinner"></span></div> --}}

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <a href="#" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>


    @include('layout_part.navbar')

    <div id="content" class="content">
        @yield('content')
    </div>
    @include('layout_part.footer')
    <div class="row">  
        <div class="col-md-12 copy">  
        <p class="text-center mb-0"> © Copyright 2023 - Tai-Fil Manpower Services Corp.  All rights reserved. </p>  
        </div>  
      </div>
    @push('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    @endpush
    @stack('scripts')
</body>
</html>