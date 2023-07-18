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
                        <a class="dropdown-item" href="{{ url('admin/profile') }}"><i class="align-middle me-1"
                                data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="{{ url('admin') }}"><i class="align-middle me-1"
                                data-feather="pie-chart"></i>
                            Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('admin/settings') }}"><i class="align-middle me-1"
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
                class="sidebar-item {{ Request::is('admin')||Request::is('admin/ecommerce')||Request::is('admin/crypto') ? 'active':'' }}">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin')||Request::is('admin/ecommerce')||Request::is('admin/crypto') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
                <ul id="dashboards"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin')||Request::is('admin/ecommerce')||Request::is('admin/crypto') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin') }}">Analytics</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/ecommerce') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/ecommerce') }}">E-Commerce
                        </a></li>
                    <li class="sidebar-item {{ Request::is('admin/crypto') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/crypto') }}">Crypto</a></li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('admin/categories')||Request::is('admin/categories/create') ? 'active':'' }}">
                <a data-bs-target="#categories" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/categories')||Request::is('admin/categories/create') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="categories"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/categories')||Request::is('admin/categories/create') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/categories/create') ? 'active':'' }}"><a
                            class="sidebar-link" href="{{ url('admin/categories/create') }}">Add Category</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/categories') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/categories') }}">View Categories</a></li>
                </ul>
            </li>

            <li class="sidebar-item {{ Request::is('admin/posts')||Request::is('admin/posts/create') ? 'active':'' }}">
                <a data-bs-target="#posts" data-bs-toggle="collapse"
                    class="sidebar-link {{ Request::is('admin/posts')||Request::is('admin/posts/create') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Posts</span>
                </a>
                <ul id="posts"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/posts')||Request::is('admin/posts/create') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/posts/create') ? 'active':'' }}"><a
                            class="sidebar-link" href="{{ url('admin/posts/create') }}">Add Post</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/posts') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/posts') }}">View Posts</a></li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ Request::is('admin/settings')||Request::is('admin/projects')||Request::is('admin/clients')||Request::is('admin/orders')||Request::is('admin/pricing')||Request::is('admin/chats')||Request::is('admin/blank') ? 'active':'' }}">
                <a data-bs-target="#pages" data-bs-toggle="collapse"
                    class="sidebar-link collapsed {{ Request::is('admin/settings')||Request::is('admin/projects')||Request::is('admin/clients')||Request::is('admin/orders')||Request::is('admin/pricing')||Request::is('admin/chats')||Request::is('admin/blank') ? '':'collapsed' }}">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="pages"
                    class="sidebar-dropdown list-unstyled collapse {{ Request::is('admin/settings')||Request::is('admin/projects')||Request::is('admin/clients')||Request::is('admin/orders')||Request::is('admin/pricing')||Request::is('admin/chats')||Request::is('admin/blank') ? 'show':'' }}"
                    data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('admin/settings') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/settings') }}">Settings</a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/projects') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/projects') }}">Projects</a></li>
                    <li class="sidebar-item {{ Request::is('admin/clients') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/clients') }}">Clients</a></li>
                    <li class="sidebar-item {{ Request::is('admin/orders') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/orders') }}">Orders</a></li>
                    <li class="sidebar-item {{ Request::is('admin/pricing') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/pricing') }}">Pricing</a></li>
                    <li class="sidebar-item {{ Request::is('admin/chats') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/chats') }}">Chat</a></li>
                    <li class="sidebar-item {{ Request::is('admin/blank') ? 'active':'' }}"><a class="sidebar-link"
                            href="{{ url('admin/blank') }}">Blank Page</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item {{ Request::is('admin/profile') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('admin/profile') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/web-settings') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('admin/web-settings') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Website
                        Settings</span>

                </a>
            </li>
            <li class="sidebar-item {{ Request::is('admin/invoice') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('admin/invoice') }}">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/tasks') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('admin/tasks') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>

                </a>
            </li>

            <li class="sidebar-item {{ Request::is('admin/calendar') ? 'active':'' }}">
                <a class="sidebar-link" href="{{ url('admin/calendar') }}">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>

                </a>
            </li>
        </ul>
    </div>
</nav>