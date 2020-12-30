<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link @yield('home-active')" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Manage</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Forum Infomations</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="series" class="sidebar-link"><span
                                            class="hide-menu"> Series
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="categories" class="sidebar-link"><span
                                            class="hide-menu"> Category
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="posts" class="sidebar-link @yield('post-active')"><span
                                            class="hide-menu"> Post
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="bell" class="feather-icon"></i><span
                                class="hide-menu">System</span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="announcements" class="sidebar-link"><span
                                        class="hide-menu"> Announcements
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="notifications" class="sidebar-link"><span
                                        class="hide-menu"> Notifications
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="users"
                                aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span
                                    class="users">Members
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="images"
                            aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span
                                class="hide-menu">Images
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="conversations"
                        aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span
                            class="hide-menu">Conversation
                        </span></a>
                </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->