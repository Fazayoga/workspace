<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo position-relative">
        <a href="{{ url('/') }}" class="app-brand-link d-flex align-items-center">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="WorkSpace" style="height: 25px;">
            <span class="app-brand-text demo menu-text fw-bold ms-2">WorkSpace</span>
        </a>

        <!-- Tombol toggle desktop -->
        <a href="javascript:void(0);" id="desktopMenuToggle" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left align-middle"></i>
        </a>

        <!-- Tombol mobile -->
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left align-middle"></i>
        </a>
    </div>


    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
                <span class="badge rounded-pill bg-danger ms-auto">5</span>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('pegawai') ? 'active' : '' }}">
            <a href="{{ route('pegawai') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div class="text-truncate">Pegawai</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-check"></i>
                <div class="text-truncate">Ijin / Cuti</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wallet-alt"></i>
                <div class="text-truncate">Slip Gaji</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-broadcast"></i>
                <div class="text-truncate">Broadcast</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->is('data-absensi*', 'absen-disetujui*', 'reimbursement*', 'treking-lokasi*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-square"></i>
                <div class="text-truncate">Absensi</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('data-absensi*') ? 'active' : '' }}">
                    <a href="{{ route('data-absensi') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user-check"></i>
                        <div class="text-truncate">Data Absensi</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('absen-disetujui*') ? 'active' : '' }}">
                    <a href="{{ url('absen-disetujui') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-check-circle"></i>
                        <div class="text-truncate">Persetujuan</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('reimbursement*') ? 'active' : '' }}">
                    <a href="{{ url('reimbursement') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                        <div class="text-truncate">Reimbursement</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('treking-lokasi*') ? 'active' : '' }}">
                    <a href="{{ url('treking-lokasi') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-current-location"></i>
                        <div class="text-truncate">Treking Lokasi</div>
                    </a>
                </li>

            </ul>
        </li>
        <!-- Front Pages -->
        <li
            class="menu-item 
            {{ request()->routeIs('tugas-saya', 'laporan-saya', 'calender') ? 'active open' : '' }}">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div class="text-truncate">Tugas</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('tugas-saya') ? 'active' : '' }}">
                    <a href="{{ route('tugas-saya') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-group"></i>
                        <div class="text-truncate">Tugas Saya</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('laporan-saya') ? 'active' : '' }}">
                    <a href="{{ route('laporan-saya') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div class="text-truncate">Laporan Saya</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('calender') ? 'active' : '' }}">
                    <a href="{{ route('calender') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-calendar"></i>
                        <div class="text-truncate">Calender</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate" data-i18n="Email">Email</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-chat.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div class="text-truncate" data-i18n="Chat">Chat</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div class="text-truncate" data-i18n="Calendar">Calendar</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-kanban.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div class="text-truncate" data-i18n="Kanban">Kanban</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <!-- Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div class="text-truncate" data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div class="text-truncate" data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div class="text-truncate" data-i18n="Basic">Cards</div>
            </a>
        </li>
        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div class="text-truncate" data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Accordion">Accordion</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Alerts">Alerts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Badges">Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Buttons">Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-carousel.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Carousel">Carousel</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-collapse.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Collapse">Collapse</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-dropdowns.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Dropdowns">Dropdowns</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-footer.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Footer">Footer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-list-groups.html" class="menu-link">
                        <div class="text-truncate" data-i18n="List Groups">List groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-modals.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Modals">Modals</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-navbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Navbar">Navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-offcanvas.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Offcanvas">Offcanvas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Pagination & Breadcrumbs">Pagination &amp;
                            Breadcrumbs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-progress.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Progress">Progress</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-spinners.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Spinners">Spinners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tabs-pills.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-toasts.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Toasts">Toasts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tooltips-popovers.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-typography.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Typography">Typography</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div class="text-truncate" data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Text Divider">Text Divider</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div class="text-truncate" data-i18n="Boxicons">Boxicons</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp;
                Tables</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate" data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Basic Inputs">Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Input groups">Input groups</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate" data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Vertical Form">Vertical Form</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Horizontal Form">Horizontal Form</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Form Validation -->
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/form-validation.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div class="text-truncate" data-i18n="Form Validation">Form Validation</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <!-- Tables -->
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div class="text-truncate" data-i18n="Tables">Tables</div>
            </a>
        </li>
        <!-- Data Tables -->
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div class="text-truncate" data-i18n="Datatables">Datatables</div>
                <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
            </a>
        </li>
        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free/issues"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
