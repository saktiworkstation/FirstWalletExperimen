<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/topup-and-withdrawal*') ? 'active' : '' }}"
                    href="/dashboard/topup-and-withdrawal">
                    <span data-feather="dollar-sign"></span>
                    Top Up and Withdrawal
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}" href="/dashboard/beneficiaries">
                    <span data-feather="external-link"></span>
                    Money Transfer
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/bills*') ? 'active' : '' }}" href="/dashboard/bills">
                    <span data-feather="credit-card"></span>
                    Bill Payments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}" href="/dashboard/">
                    <span data-feather="shield"></span>
                    Security Features
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}" href="/dashboard/">
                    <span data-feather="gift"></span>
                    Promotions and Discounts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}" href="/dashboard/">
                    <span data-feather="flag"></span>
                    Reports and Analysis
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/*') ? 'active' : '' }}" href="/dashboard/">
                    <span data-feather="help-circle"></span>
                    Help Center and Support
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/wallets*') ? 'active' : '' }}" href="/dashboard/wallets">
                        <span data-feather="grid"></span>
                        Users Wallets
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>
