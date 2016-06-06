<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Círculo v2.0</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('project.index') }}">Obras</a></li>
            </ul>

            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if( Auth::guest() )--}}
                    {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
                {{--@else--}}
                    {{--<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        </div>
    </div>
</nav>