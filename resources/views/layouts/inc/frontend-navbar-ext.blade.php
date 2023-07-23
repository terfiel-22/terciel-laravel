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
                    <a class="nav-link {{ Request::is('/')?'active':'' }}"
                        href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about')?'active':'' }}"
                        href="{{ url('/about') }}">ABOUT</a>
                </li>
                <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ Request::is('blog/*')||Request::is('result')?'active':'' }}" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							CATEGORIES
						</a>
						<div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                            @php
                            use App\Models\Category;
                            $categories =
                            Category::query()->where('display_on_navbar','1')->where('status','1')->get();
                            @endphp
                            @foreach ($categories as $category)
                                <a class="dropdown-item {{ Request::is('blog/'.$category->slug)||Request::is('blog/'.$category->slug.'/*')?'active':'' }}"
                                    href="{{ url('blog/'.$category->slug) }}">{{ $category->name }}</a>
                            @endforeach
						</div>
					</li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact')?'active':'' }}"
                        href="{{ url('/contact') }}">CONTACT</a>
                </li>
            </ul>
        </div>

        <form method="GET" action="/result" class="d-none d-sm-inline-block">
            <div class="input-group input-group-navbar">
                <input type="text" name="keyword" class="form-control" placeholder="Search…" aria-label="Search"
                    value="{{ Request::is('result')?$keyword:'' }}">
                <button class="btn" type="submit">
                    <i data-feather="search"></i>
                </button>
            </div>
        </form>
    </div>
</nav>