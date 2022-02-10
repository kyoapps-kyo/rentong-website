<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        @if(config('admin.show_version'))
        <strong>Version</strong>&nbsp;&nbsp; {!! \Encore\Admin\Admin::VERSION !!}
        @endif

        <strong>Powered by <a href="https://github.com/z-song/laravel-admin" target="_blank">laravel-admin</a>
        Coded by <a href="https://github.com/kyoapps-kyo" target="_blank">Kyo</a>
        </strong>

    </div>
    <!-- Default to the left -->
    <strong>© <a href="http://rentongwebsite.test" target="_blank">RENTONG</a> all rights reserved (2021~)</strong>
</footer>
