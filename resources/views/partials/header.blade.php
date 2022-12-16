<header class="bg-white">
    <div class="container">
        <div class="navbar_header d-flex justify-content-between align-items-center">
            <div class="logo p-3">
                <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="">
            </div>

            <div class="menu_header d-flex">
                <a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="">characters</a>
                <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('comics')}}">comics</a>
                <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="">movies</a>
                <a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="">tv</a>
                <a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="">games</a>
                <a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="">collectibles</a>
                <a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="">videos</a>
                <a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="">fans</a>
                <a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="">news</a>
                <a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="">shop</a>
            </div>
            <div class="search">
                <input type="text" class="text-end" placeholder="Search" name="" id="">
            </div>
        </div>
    </div>
</header>