<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/') }}">
            <span class="sidebar-brand-text align-middle">
                Terciel<span class="text-primary">.</span>
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
                        <a class="dropdown-item" href="{{ url('author/profile') }}"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="{{ url('author') }}"><i class="align-middle me-1"
                                data-feather="pie-chart"></i>
                            Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('author/settings') }}"><i class="align-middle me-1"
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
            <li
                class="sidebar-item {{ Request::is('author')||Request::is('author/ecommerce')||Request::is('author/crypto') ? 'active':'' }}">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('author')||Request::is('author/ecommerce')||Request::is('author/crypto') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
                <ul id="dashboards"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('author')||Request::is('author/ecommerce')||Request::is('author/crypto') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('author') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author') }}">Analytics</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('author/ecommerce') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/ecommerce') }}">E-Commerce
                        </a></li>
                    <li class="sidebar-item {{ Request::is('author/crypto') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/crypto') }}">Crypto</a></li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('author/categories')||Request::is('author/categories/create') ? 'active':'' }}">
                <a data-bs-target="#categories" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('author/categories')||Request::is('author/categories/create') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="categories"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('author/categories')||Request::is('author/categories/create') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('author/categories/create') ? 'active':'' }}"><a
                            class="sidebar-link" href="{{ url('author/categories/create') }}">Add Category</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('author/categories') ? 'active':'' }}"><a
                            class="sidebar-link" href="{{ url('author/categories') }}">View Categories</a></li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('author/posts')||Request::is('author/posts/create') ? 'active':'' }}">
                <a data-bs-target="#posts" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('author/posts')||Request::is('author/posts/create') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Posts</span>
                </a>
                <ul id="posts"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('author/posts')||Request::is('author/posts/create') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('author/posts/create') ? 'active':'' }}"><a
                            class="sidebar-link" href="{{ url('author/posts/create') }}">Add Post</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('author/posts') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/posts') }}">View Posts</a></li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('author/settings')||Request::is('author/projects')||Request::is('author/clients')||Request::is('author/orders')||Request::is('author/pricing')||Request::is('author/chats')||Request::is('author/blank') ? 'active':'' }}">
                <a data-bs-target="#pages" data-bs-toggle="collapse"
                    class="sidebar-link collapsed {{ Request::is('author/settings')||Request::is('author/projects')||Request::is('author/clients')||Request::is('author/orders')||Request::is('author/pricing')||Request::is('author/chats')||Request::is('author/blank') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="pages"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('author/settings')||Request::is('author/projects')||Request::is('author/clients')||Request::is('author/orders')||Request::is('author/pricing')||Request::is('author/chats')||Request::is('author/blank') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('author/settings') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/settings') }}">Settings</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('author/projects') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/projects') }}">Projects</a></li>
                    <li class="sidebar-item {{ Request::is('author/clients') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/clients') }}">Clients</a></li>
                    <li class="sidebar-item {{ Request::is('author/orders') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/orders') }}">Orders</a></li>
                    <li class="sidebar-item {{ Request::is('author/pricing') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/pricing') }}">Pricing</a></li>
                    <li class="sidebar-item {{ Request::is('author/chats') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/chats') }}">Chat</a></li>
                    <li class="sidebar-item {{ Request::is('author/blank') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('author/blank') }}">Blank Page</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item {{ Request::is('author/profile') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('author/profile') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('author/web-settings') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('author/web-settings') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Website
                        Settings</span>

                </a>
            </li>
            <li class="sidebar-item {{ Request::is('author/invoice') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('author/invoice') }}">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('author/tasks') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('author/tasks') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>

                </a>
            </li>

            <li class="sidebar-item {{ Request::is('author/calendar') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('author/calendar') }}">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>

                </a>
            </li>
        </ul>
    </div>
</nav>