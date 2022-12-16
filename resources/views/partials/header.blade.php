<header class="bg-white">
    <div class="container">
        <div class="navbar_header d-flex justify-content-between align-items-center">
            <div class="logo p-3">
                <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="">
            </div>

            <div class="menu_header d-flex">
                <a href="">characters</a>
                <a class="active" href="{{ route('comics')}}">comics</a>
                <a href="">movies</a>
                <a href="">tv</a>
                <a href="">games</a>
                <a href="">collectibles</a>
                <a href="">videos</a>
                <a href="">fans</a>
                <a href="">news</a>
                <a href="">shop</a>
            </div>
            <div class="search">
                <input type="text" class="text-end" placeholder="Search" name="" id="">
            </div>
        </div>
    </div>
</header>