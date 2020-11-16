<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('home')}}" key="t-default">Default</a></li>
                    </ul>
                </li>
                <li class="menu-title" key="t-apps">Apps</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-p-grid">Create Project</a></li>
                        <li><a href="#" key="t-p-list">Project List</a></li>
                        <li><a href="#" key="t-p-overview">Summary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="#" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('contractor.index')}}" key="t-contractor">Contractors</a></li>
                        <li><a href="{{route('supplier.index')}}" key="t-contractor">Suppliers</a></li>
                        <li><a href="{{route('engineer.index')}}" key="t-contractor">Engineers</a></li>
                        <li><a href="{{route('investor.index')}}" key="t-contractor">Investors</a></li>
                        <li><a href="{{route('customer.index')}}" key="t-contractor">Customers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
