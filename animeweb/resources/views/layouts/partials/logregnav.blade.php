<div class="lognavbar fix">
	@if (Route::has('login'))
        <div class="top-right links fix">
                <a href="{{ action('HomepageController@show_home') }}">HOME</a>
            @auth
                <p>WELCOME</p>
            @else
                <a href="{{ action('Auth\AdminLoginController@showLoginForm') }}">Admin Login</a>
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
     @endif
</div>