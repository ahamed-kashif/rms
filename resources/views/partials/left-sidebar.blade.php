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
                        <i class="bx bx-building-house"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('project.create')}}" key="t-p-grid">Create Project</a></li>
                        <li><a href="{{route('project.index')}}" key="t-p-list">Project List</a></li>
                        <li><a href="{{route('project.investor.list')}}" key="t-p-list">Investor Project List</a></li>
{{--                        <li><a href="#" key="t-p-overview">Summary</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-customize"></i>
                        <span key="t-projects">Project Resources</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('material.index')}}" key="t-p-grid">Materials</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('invoice.create')}}" key="t-invoice-list">Create Invoice</a></li>
                        <li><a href="{{route('invoice.index')}}" key="t-invoice-list">Invoice List</a></li>
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
                <li>
                    <a href="javascript:void(0)" class="has-arrow waves-effect">
                        <i class="fas fa-table"></i>
                        <span key="t-projects">Accounts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('account.index')}}" key="t-contractor">Projects</a></li>
                        <li><a href="{{route('project.investor.account.list')}}" key="t-contractor">Investor Projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
