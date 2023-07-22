<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/')?'active':'' }}" href="{{ url('/') }}">Home</a>
                </li>
                @php
                use App\Models\Category;
                $categories =
                Category::query()->where('display_on_navbar','1')->where('status','1')->get();
                @endphp
                @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog/'.$category->slug)||Request::is('blog/'.$category->slug.'/*')?'active':'' }}"
                        href="{{ url('blog/'.$category->slug) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <form class="d-none d-sm-inline-block">
            <div class="input-group input-group-navbar">
                <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                <button class="btn" type="button">
                    <i data-feather="search"></i>
                </button>
            </div>
        </form>
    </div>
</nav>