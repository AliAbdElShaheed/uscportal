<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Ali Mohammed</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.index') }}"><i
                        class="fa fa-home"></i><span>@lang('site.dashboard')</span></a></li>

            @if (auth()->user()->hasRole('super_admin') || auth()->user()->hasRole('admin') || auth()->user()->hasPermission('users_read'))
                <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>@lang('site.users')</span></a>
                </li>
            @endif




            @if (auth()->user()->hasRole('super_admin') || auth()->user()->hasRole('admin') ||auth()->user()->hasPermission('navigationMenu_read'))
                <li><a href="{{ route('nav-menu.index') }}"><i class="fa fa-list"
                                                               aria-hidden="true"></i><span>@lang('site.navigationMenu')</span></a>
                </li>
            @endif



            @if (auth()->user()->hasRole('super_admin') || auth()->user()->hasRole('admin') ||auth()->user()->hasPermission('navigationMenu_read'))
                <li><a href="{{ route('sub_nav-menu.index') }}"><i class="fa fa-list-alt"
                                                                   aria-hidden="true"></i><span>@lang('site.navigationMenu')</span></a>
                </li>
            @endif




            @if (auth()->user()->hasPermission('categories_read'))
                <li><a href="{{ route('categories.index') }}"><i
                            class="fa fa-sitemap"></i><span>@lang('site.categories')</span></a></li>
            @endif



            @if (auth()->user()->hasPermission('blogs_read'))
                <li><a href="{{ route('blogs.index') }}"><i
                            class="fa fa-newspaper-o"></i><span>@lang('site.blogs')</span></a>
                </li>
            @endif



            @if (auth()->user()->hasPermission('events_read'))
                <li><a href="{{ route('events.index') }}"><i
                            class="fa fa-newspaper-o"></i><span>@lang('site.events')</span></a>
                </li>
            @endif




            @if (auth()->user()->hasPermission('reports_read'))
                <li><a href="{{ route('reports.index') }}"><i
                            class="fa fa-cart-arrow-down"></i><span>@lang('site.reports')</span></a>
                </li>
            @endif



            {{--Reports--}}
            <li class="treeview {{ request()->is('*profile*') || request()->is('*password*')  ? 'is-expanded' : '' }}">
                <a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-user-circle"></i><span
                        class="app-menu__label">@lang('site.sub_menu')</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="#"><i
                                class="icon fa fa-circle-o"></i>@lang('users.edit_profile')</a></li>
                    <li><a class="treeview-item" href="#"><i
                                class="icon fa fa-circle-o"></i>@lang('users.change_password')</a></li>
                </ul>
            </li>


            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </section>

</aside>

