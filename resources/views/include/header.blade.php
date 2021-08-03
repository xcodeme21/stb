<header id="header" class="fixed-top">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
        <h1 class="logo mr-auto">
            <a href="{{ url('/home') }}"><img src="{{ asset('public/assets/img/logo.jpg') }}" /></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{ asset('public/assets/img/logo.jpg') }}" alt=""></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li class="@if(Route::current()->getName() == 'home') active @endif"><a href="{{ url('/home') }}">Home</a></li>
            <li class="@if(Route::current()->getName() == 'competition') active @endif"><a href="{{ route('competition') }}">Competition</a></li>
            <li class="@if(Route::current()->getName() == 'schedule') active @endif"><a href="{{ route('schedule') }}">Schedule</a></li>
            <li class="@if(Route::current()->getName() == 'tour') active @endif"><a href="{{ route('tour') }}">Tour</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->
        </div>
    </div>
    </div>
</header>