<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ Config::get('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('login') }}">{{ Str::limit(env('APP_NAME'), $limit = 1) }}</a>
        </div>
        <ul class="sidebar-menu">
            @if(Auth::user()->role_id == 1)

              @include('admin.adminmenu')
            @elseif (Auth::user()->role_id == 2)

              @include('merchant.merchantmenu')
            @elseif (Auth::user()->role_id == 3 && Auth::user()->store_details == 1)

              @include('seller.sellermenu')
            @elseif (Auth::user()->role_id == 5)

              @include('rider.ridermenu')
            @endif
        </ul>
    </aside>
</div>
