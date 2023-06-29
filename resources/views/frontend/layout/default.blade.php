<!DOCTYPE html>
<html lang="en" dir="ltr" data-scheme="light">

<head>
    @include('frontend.include.head')
</head>

<body class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope
    itemtype="http://schema.org/WebPage">

    @include('frontend.include.header')

    @yield('content')

    @include('frontend.include.footer')
</body>

</html>