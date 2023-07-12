@if (Route::is('login') || Route::is('register') )
    <h4 class="page-bar text-center">
        {{ strtoupper(Request::segment(1))  }}
    </h4>

@elseif ( Route::is('password.reset'))
<h4 class="page-bar text-center">
    RESET PASSWORD
</h4>

@endif

