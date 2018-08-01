<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fullpage/dist/fullpage.css')}}"/>
    @yield('style-add')
    <title>@yield('title')</title>
    {{ Html::style('css/core.common.css') }}
</head>
<body class="position-relative">

@yield('bodycontent')
{{ Html::script('js/core.common.js') }}
<script type="text/javascript" src="{{URL::asset('fullpage/dist/fullpage.js')}}"></script>
@yield('script-private')



</body>
@yield('script')
</html>
