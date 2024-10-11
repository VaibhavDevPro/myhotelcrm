@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">



            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    {{-- <span class="material-symbols-outlined">
                        menu
                    </span> --}}
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>


            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <span class="material-symbols-outlined">
                            group
                        </span>
                        <span class="title">@lang('quickadmin.user-management.title')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title">
                                        @lang('quickadmin.roles.title')
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span class="title">
                                        @lang('quickadmin.users.title')
                                    </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('country_access')
                <li class="{{ $request->segment(2) == 'countries' ? 'active' : '' }}">
                    <a href="{{ route('admin.countries.index') }}">
                        <span class="material-symbols-outlined">
                            flag_check
                        </span>
                        <span class="title">@lang('quickadmin.countries.title')</span>
                    </a>
                </li>
            @endcan
            @can('category_create')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                    <a href="{{ route('admin.categories.index') }}">
                        <span class="material-symbols-outlined">
                            category_search
                        </span>
                        <span class="title">
                            @lang('quickadmin.categories.title')
                        </span>
                    </a>
                </li>
            @endcan

            @can('customer_access')
                <li class="{{ $request->segment(2) == 'customers' ? 'active' : '' }}">
                    <a href="{{ route('admin.customers.index') }}">
                        <span class="material-symbols-outlined">
                            for_you
                        </span>
                        <span class="title">@lang('quickadmin.customers.title')</span>
                    </a>
                </li>
            @endcan

            @can('room_access')
                <li class="{{ $request->segment(2) == 'rooms' ? 'active' : '' }}">
                    <a href="{{ route('admin.rooms.index') }}">
                        <span class="material-symbols-outlined">
                            bed
                        </span>
                        <span class="title">@lang('quickadmin.rooms.title')</span>
                    </a>
                </li>
            @endcan

            @can('booking_access')
                <li class="{{ $request->segment(2) == 'bookings' ? 'active' : '' }}">
                    <a href="{{ route('admin.bookings.index') }}">
                        <span class="material-symbols-outlined">
                            notifications_active
                        </span>
                        <span class="title">@lang('quickadmin.bookings.title')</span>
                    </a>
                </li>
            @endcan

            @can('find_room_access')
                <li class="{{ $request->segment(2) == 'find_rooms' ? 'active' : '' }}">
                    <a href="{{ route('admin.find_rooms.index') }}">
                        <span class="material-symbols-outlined">
                            meeting_room
                        </span>
                        <span class="title">@lang('quickadmin.find-room.title')</span>
                    </a>
                </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <span class="material-symbols-outlined">
                        key
                    </span>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
