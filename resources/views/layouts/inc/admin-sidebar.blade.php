<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/') }}">
            <span class="sidebar-brand-text align-middle">
                Terciel
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

            <li class="sidebar-item">
                <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset
                            Password </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Components
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI
                        Elements</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-placeholders.html">Placeholders
                        </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                    <span class="sidebar-badge badge bg-light">1.500+</span>
                </a>
                <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome
                        </a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic
                            Inputs</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts
                        </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups
                        </a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="tables-bootstrap.html">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
                </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Form
                        Plugins</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-inputs.html">Advanced
                            Inputs </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation
                        </a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">DataTables</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-responsive.html">Responsive
                            Table </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-buttons.html">Table
                            with Buttons </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-column-search.html">Column
                            Search </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-fixed-header.html">Fixed
                            Header </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-multi.html">Multi
                            Selection </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables-datatables-ajax.html">Ajax
                            Sourced Data </a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts
                        </a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="notifications.html">
                    <i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>

                </a>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Multi
                        Level</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed">Two
                            Levels</a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link collapsed">Three
                            Levels</a>
                        <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3-1" data-bs-toggle="collapse"
                                    class="sidebar-link collapsed">Item 1</a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>