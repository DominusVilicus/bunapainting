<!doctype html>
<html {!! get_language_attributes() !!}>
    @include('partials.head')
    <body {!! body_class() !!}>
        {!! do_action('get_header') !!}
        @include('partials.header')
        <main class="main">
            @yield('content')
        </main>
        {!! do_action('get_footer') !!}
        @include('partials.footer')
        {!! wp_footer() !!}
    </body>
</html>
