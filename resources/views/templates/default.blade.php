<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    </head>

    <body>
        @include('templates.partials.nav')
        @yield('content')
    </body>

    @yield('scripts')

</html>