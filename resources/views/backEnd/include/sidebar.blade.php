<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @php
        $setting = App\Models\Setting::first();
    @endphp
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset($setting->componyLogoMenu) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $setting->companyName }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Start Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- customer start --}}
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item {{ request()->routeIs('dashboard') ? 'menu-open' : '' }}">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    {{-- customer start --}}
                    <li class="nav-item {{ request()->routeIs('customer*') ? 'menu-open' : '' }} || {{ request()->routeIs('approve.customer*')? 'menu-open' : '' }} || {{ request()->routeIs('customer.list*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->routeIs('customer*') ? 'active' : '' }} || {{ request()->routeIs('approve.customer*') ? 'active' : '' }} || {{ request()->routeIs('customer.list*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-tie"></i>
                            <p>
                                Customer
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('customer') }}" class="nav-link {{ request()->routeIs('customer') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve.customer') }}" class="nav-link {{ request()->routeIs('approve.customer') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Approve Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('customer.list') }}" class="nav-link {{ request()->routeIs('customer.list') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                                 
                
                {{-- End customer start --}}
                {{-- Vendor start --}}
                <li class="nav-item {{ request()->routeIs('vendor.index*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('vendor.index*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Vendor
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('vendor.index') }}" class="nav-link {{ request()->routeIs('vendor.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vendor List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End Vendor start --}}
                {{-- Lead start --}}
                <li class="nav-item {{ request()->routeIs('lead.index*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('lead.index*') ? 'active' : ''  }}">
                        <i class="nav-icon fas fa-lg fa-tty"></i>
                        <p>
                            Lead
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('lead.index') }}" class="nav-link {{ request()->routeIs('lead.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lead List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Lead end --}}
                {{-- Sales start --}}
                <li class="nav-item {{ request()->routeIs('invoice.index*') ? 'menu-open' : '' }} || {{ request()->routeIs('estimates.index*') ? 'menu-open' : '' }} 
                    || {{ request()->routeIs('item.index*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('invoice.index*') ? 'active' : ''  }} || {{ request()->routeIs('estimates.index*') ? 'active' : ''  }} 
                        || {{ request()->routeIs('item.index*') ? 'active' : ''  }}">
                        <i class="nav-icon fab fa-lg fa-speakap"></i>
                        <p>
                            Sales
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('invoice.index') }}" class="nav-link {{ request()->routeIs('invoice.index') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('estimates.index') }}" class="nav-link {{ request()->routeIs('estimates.index') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Estimates</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('item.index') }}" class="nav-link {{ request()->routeIs('item.index') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Item</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Sales end --}}
                {{-- payment start --}}
                <li class="nav-item {{ request()->routeIs('payment*') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ request()->routeIs('payment*') ? 'active' : ''  }}">
                        <i class="nav-icon fab fa-lg fa-product-hunt"></i>
                        <p>
                            Payment
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('payment') }}" class="nav-link {{ request()->routeIs('payment') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment</p>
                            </a>
                        </li>
                    </ul>

                </li>
                {{-- payment end --}}
                {{-- Task start --}}
                <li class="nav-item {{ request()->routeIs('task.index*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('task.index*') ? 'active' : ''  }}">
                        <i class="nav-icon fas fa-lg fa-tasks"></i>
                        <p>
                            Task
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('task.index') }}" class="nav-link {{ request()->routeIs('task.index') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Task List</p>
                            </a>
                        </li>
                    </ul>

                </li>
                {{-- Task end --}}
                {{-- Projects start --}}
                <li class="nav-item {{ request()->routeIs('project.index*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('project.index*') ? 'active' : ''  }}">
                        <i class="nav-icon fas fa-lg fa-layer-group"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('project.index') }}" class="nav-link {{ request()->routeIs('project.index') ? 'active' : ''  }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                    </ul>

                </li>
                {{-- Projects end --}}
                {{-- Expense start --}}
                <li class="nav-item {{ request()->routeIs('category.index*')? 'menu-open' : '' }} || {{ request()->routeIs('expense.index*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('category.index*')? 'active' : '' }} || {{ request()->routeIs('expense.index*')? 'active' : '' }}">
                        <i class="nav-icon fab fa-lg fa-erlang"></i>
                        <p>
                            Expense
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link {{ request()->routeIs('category.index')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('expense.index') }}" class="nav-link {{ request()->routeIs('expense.index')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Expense end --}}
                {{-- Employee Start --}}
                <li class="nav-item {{ request()->routeIs('teamLeader*')? 'menu-open' : '' }} || {{ request()->routeIs('sales.person*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('teamLeader*')? 'active' : '' }} || {{ request()->routeIs('sales.person*')? 'active' : '' }}">
                        <i class="nav-icon fas fa fa-users"></i>
                        <p>
                            Employee
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('teamLeader') }}" class="nav-link {{ request()->routeIs('teamLeader')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Team Leader</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales.person') }}" class="nav-link {{ request()->routeIs('sales.person*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales Person</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Employee End --}}
                {{-- Report Start --}}
                <li class="nav-item {{ request()->routeIs('task.report*')? 'menu-open' : '' }} || {{ request()->routeIs('customerLead.report*')? 'menu-open' : '' }}
                     || {{ request()->routeIs('expense.report*')? 'menu-open' : '' }} || {{ request()->routeIs('customer.report*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('task.report*')? 'active' : ''}} || {{ request()->routeIs('customerLead.report*')? 'active' : '' }}
                        || {{ request()->routeIs('expense.report*')? 'active' : '' }} || {{ request()->routeIs('customer.report*')? 'active' : '' }}">
                        <i class="nav-icon fa fa-copy"></i>
                        <p>
                            Report
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('task.report') }}" class="nav-link  {{ request()->routeIs('task.report')? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Task</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('customerLead.report') }}" class="nav-link {{ request()->routeIs('customerLead.report')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lead</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('customer.report') }}" class="nav-link {{ request()->routeIs('customer.report')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('expense.report') }}" class="nav-link {{ request()->routeIs('expense.report')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Expense</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Report End --}}
                {{-- Settings Start --}}
                <li class="nav-item {{ request()->routeIs('setting*')? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('setting*')? 'active' : '' }}">
                        <i class="nav-icon far fa-circle nav-icon fa-lg fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('setting') }}" class="nav-link {{ request()->routeIs('setting*')? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Settings End --}}
            </ul>
        </nav>
        <!-- End Sidebar Menu -->
    </div>
    <!-- /.sidebar -->
</aside>
