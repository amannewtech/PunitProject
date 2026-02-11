<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('backend/images/logo-small.png') }}" alt="" class="logo logo-lg" />
                <img src="{{ asset('backend/images/logo-small.png') }}" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('dashboard') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="">
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Master Data</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('superadmin.stream.list') }}">Stream</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('superadmin.department.list') }}">Department</a></li>
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('superadmin.designation.list') }}">Designation</a></li>
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('superadmin.employeeType.list') }}">Employee Type</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('superadmin.bloodGroup.list') }}">Blood
                                Gorup</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link" href="#">Document Category</a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Staff</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('superadmin.teachingStaff.list') }}">Teaching Staff</a></li>
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('superadmin.nonTeachingStaff.list') }}">Non-teaching</a></li>
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Announcement</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="apps-chat.html">Notices</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-email.html">Events</a></li>
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Gallery</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="apps-chat.html">Photo Gallery</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-email.html">Video Gallery</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="apps-email.html">Media Release</a></li>
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Documents Upload</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="apps-chat.html">Upload Documents</a></li>
                    </ul>
                </li>

                {{-- <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Proposal</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="proposal.html">Proposal</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="proposal-view.html">Proposal View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="proposal-edit.html">Proposal Edit</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="proposal-create.html">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="payment.html">Payment</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="invoice-view.html">Invoice View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="invoice-create.html">Invoice Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="customers.html">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="customers-view.html">Customers View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="customers-create.html">Customers Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="leads.html">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="leads-view.html">Leads View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="leads-create.html">Leads Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="projects.html">Projects</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="projects-view.html">Projects View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="projects-create.html">Projects Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="widgets-lists.html">Lists</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="widgets-tables.html">Tables</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="widgets-charts.html">Charts</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="widgets-statistics.html">Statistics</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="widgets-miscellaneous.html">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="settings-general.html">General</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-seo.html">SEO</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-tags.html">Tags</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-email.html">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-tasks.html">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-leads.html">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-support.html">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-finance.html">Finance</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-gateways.html">Gateways</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-customers.html">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-localization.html">Localization</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-recaptcha.html">reCAPTCHA</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="settings-miscellaneous.html">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-power"></i></span>
                            <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-login-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-login-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-login-creative.html">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Register</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-creative.html">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Error-404</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-creative.html">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Reset Pass</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-creative.html">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Verify OTP</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-creative.html">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Maintenance</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-cover.html">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-minimal.html">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-creative.html">Creative</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-life-buoy"></i></span>
                            <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#!">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="help-knowledgebase.html">KnowledgeBase</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/docs/documentations">Documentations</a></li>
                        </ul>
                    </li> --}}
            </ul>
            <div class="card text-center">
                <div class="card-body py-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="feather-log-out"></i> Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
