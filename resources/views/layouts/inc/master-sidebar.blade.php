@php
$webSetting = App\Models\WebSetting::query()
->where('id', '1')
->first();
@endphp
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/') }}">
            <span class="sidebar-brand-text align-middle">
                <h1>{{ $webSetting->name ?? 'Terciel' }}<span class="text-danger">.</span></h1>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1"
                        alt="Charles Hall" />
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Charles Hall
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="{{ url('master/profile') }}"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="{{ url('author') }}"><i class="align-middle me-1"
                                data-feather="pie-chart"></i>
                            Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('master/settings') }}"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                            Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>

                    <div class="sidebar-user-subtitle">Designer</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Request::is('master') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master') }}">
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Analytics</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ Request::is('master/profile') || Request::is('master/profile/settings') ? 'active' : '' }}">
                <a data-bs-target="#profile" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('master/profile') || Request::is('master/profile/settings') ? '' : 'collapsed' }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
                <ul id="profile"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('master/profile') || Request::is('master/profile/settings') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('master/profile') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{ url('master/profile') }}">View Profile</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('master/profile/settings') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{ url('master/profile/settings') }}">Profile Settings</a></li>
                </ul>
            </li>

            <li class="sidebar-item {{ Request::is('master/chats') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/chats') }}">
                    <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Chats</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ Request::is('master/posts') || Request::is('master/posts/create') || Request::is('master/posts/*/edit') ? 'active' : '' }}">
                <a data-bs-target="#posts" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('master/posts') || Request::is('master/posts/create') || Request::is('master/posts/*/edit') ? '' : 'collapsed' }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Posts</span>
                </a>
                <ul id="posts"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('master/posts') || Request::is('master/posts/create') || Request::is('master/posts/*/edit') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('master/posts/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{ url('master/posts/create') }}">Add Post</a>
                    </li>
                    <li
                        class="sidebar-item {{ Request::is('master/posts') || Request::is('master/posts/*/edit') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('master/posts') }}">View Posts</a>
                    </li>
                </ul>
            </li>

            @if (Auth::user()->role == 1)
            <li
                class="sidebar-item {{ Request::is('admin/banner-slides') || Request::is('admin/banner-slides/create') || Request::is('admin/banner-slides/*/edit') ? 'active' : '' }}">
                <a data-bs-target="#bannerSlides" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/banner-slides') || Request::is('admin/banner-slides/create') || Request::is('admin/banner-slides/*/edit') ? '' : 'collapsed' }}">
                    <i class="align-middle" data-feather="film"></i> <span class="align-middle">Banner
                        Slides</span>
                </a>
                <ul id="bannerSlides"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/banner-slides') || Request::is('admin/banner-slides/create') || Request::is('admin/banner-slides/*/edit') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/banner-slides/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{ url('admin/banner-slides/create') }}">Add Banner Slide</a>
                    </li>
                    <li
                        class="sidebar-item {{ Request::is('admin/banner-slides') || Request::is('admin/banner-slides/*/edit') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('admin/banner-slides') }}">View Banner Slides</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('admin/categories') || Request::is('admin/categories/*/edit') || Request::is('admin/categories/create') ? 'active' : '' }}">
                <a data-bs-target="#categories" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/categories') || Request::is('admin/categories/*/edit') || Request::is('admin/categories/create') ? '' : 'collapsed' }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="categories"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/categories') || Request::is('admin/categories/*/edit') || Request::is('admin/categories/create') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/categories/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{ url('admin/categories/create') }}">Add Category</a>
                    </li>
                    <li
                        class="sidebar-item {{ Request::is('admin/categories') || Request::is('admin/categories/*/edit') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('admin/categories') }}">View Categories</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('admin/settings/website') || Request::is('admin/settings/banner') ? 'active' : '' }}">
                <a data-bs-target="#settings" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/settings/website') || Request::is('admin/settings/banner') ? '' : 'collapsed' }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                </a>
                <ul id="settings"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/settings/website') || Request::is('admin/settings/banner') ? 'show' : '' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/settings/website') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{ url('admin/settings/website') }}">Website</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/settings/banner') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ url('admin/settings/banner') }}">Banner</a>
                    </li>
                </ul>
            </li>
            @endif

            <li class="sidebar-item {{ Request::is('master/tasks') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/tasks') }}">
                    <i class="align-middle" data-feather="list"></i>
                    <span class="align-middle">Tasks</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('master/calendar') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/calendar') }}">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>

                </a>
            </li>

        </ul>
    </div>
</nav>