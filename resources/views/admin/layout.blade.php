<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
    @yield('title')
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" />
    @stack('css')
    <style>
        .active-current {
            background: rgba(201,210,227,.5);
        }
    </style>
</head>

<body>

<div id="app" class="app {{request()->routeIs('photo.*')  ? 'app-content-full-height' : ''}}">

    @empty(request()->get('disabePartials'))
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    @endempty



  <div id="content" class="{{request()->has('disabePartials') ? 'app':'app-content'}} {{request()->routeIs('photo.*')  ? 'p-0' : ''}}">

    @yield('content')

  </div>


  <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script src="{{asset('admin/assets/js/app.min.js')}}"></script>


@stack('js')
</body>

</html>
