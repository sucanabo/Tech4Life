<a class="top-btn">
        <i class="fas fa-arrow-up"></i>
    </a>
    <header class="main-navbar main-navbar__group py-1">
        <nav class="main-navbar__container container px-md-0">
            <div class="main-navbar__left">
                <a href="./index.html" class="main-navbar_logo mr-lg-5 d-block">
                    <img src="https://cdn.viblo.asia/_nuxt/img/fbfe575.svg" alt="logo">
                </a>
                <ul class="main-menu ">
                    <li class="main-menu__item"><a href="" class="link">
                            <div class="el-badge badge-new">
                                Post
                                <!-- <sup class="el-badge__content el-badge dot fixed"></sup> -->
                            </div>

                        </a></li>
                    <li class="main-menu__item"><a href="" class="link">
                            <div class="el-badge badge-new">
                                Question
                                <sup class="el-badge__content el-badge dot fixed"></sup>
                            </div>

                        </a></li>
                    <li class="main-menu__item"><a href="" class="link">
                            <div class="el-badge badge-new">
                                Disscussions
                                <!-- <sup class="el-badge__content el-badge dot fixed"></sup> -->
                            </div>

                        </a></li>
                </ul>
            </div>
            <div class="main-navbar__right">
                <div class="sb mr-1 flex-fill">
                    <input type="text" placeholder="Search Viblo" class="sb__input" />
                    <button class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="main-navbar__group">
                    <span class="flyout announcement-flyout mr-1 ">
                        <div class="el-badge">
                            <div class="el-popover flyout-popover toggle-ppv" id="ann-ppv">
                                <div class="flyout__header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-dark">Announcements</span>
                                        <a class="link" href="#" title="Mark all as read" data-toggle="tooltip">Mark all
                                            as read</a>
                                    </div>
                                </div>
                                <div class="flyout__body">
                                    <div class="announce__container">
                                        <a href="#" class="announce__item">
                                            <span>Viblo bổ sung chức năng Content Listening, tích hợp Creative
                                                Common copy right licenes</span>
                                            <small class="subtext">Sep 4th, 3:36 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CTF: "Xoắn não" hôm nay cùng 3 Puzzle mới trên hệ thống!</span>
                                            <small class="subtext">Aug 19th, 1:12 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CV: Trải nghiệm nhiều mẫu CV mới - "Độc mà Lạ"!</span>
                                            <small class="subtext">Aug 14th, 3:01 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>FAQ: Những câu hỏi thường gặp với Viblo Mayfest</span>
                                            <small class="subtext">May 11th, 10:18 AM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CV: Trải nghiệm nhiều mẫu CV mới - "Độc mà Lạ"!</span>
                                            <small class="subtext">Aug 14th, 3:01 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>FAQ: Những câu hỏi thường gặp với Viblo Mayfest</span>
                                            <small class="subtext">May 11th, 10:18 AM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CV: Trải nghiệm nhiều mẫu CV mới - "Độc mà Lạ"!</span>
                                            <small class="subtext">Aug 14th, 3:01 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>FAQ: Những câu hỏi thường gặp với Viblo Mayfest</span>
                                            <small class="subtext">May 11th, 10:18 AM</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="flyout__footer">
                                    <div class="text-right">
                                        <a href="./pages/accnoucement.html">All accnoucements</a>
                                    </div>
                                </div>
                            </div>
                            <button class="button el-button el-button--text text-muted nav-control" id="annouce-btn" onclick="openPopover('#ann-ppv')"><i
                                    class="fa fa-info"></i></button>
                            <sup class="el-badge__content fixed">6</sup>
                        </div>
                    </span>

                    @if(Auth::check())
                        @if(isset($user))
                    <span class="flyout notifications-flyout mr-1 ">
                        <div class="el-badge">
                            <div class="el-popover flyout-popover noti-popover toggle-ppv" id="noti-ppv">
                                <div class="flyout__header">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-dark">Notifications</span>
                                        <a href="#"><i class="fas fa-cog"></i></a>
                                    </div>
                                </div>
                                <div class="flyout__body">
                                    <div class="announce__container">
                                        <a href="#" class="announce__item">
                                            <span>Viblo bổ sung chức năng Content Listening, tích hợp Creative
                                                Common copy right licenes</span>
                                            <small class="subtext">Sep 4th, 3:36 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CTF: "Xoắn não" hôm nay cùng 3 Puzzle mới trên hệ thống!</span>
                                            <small class="subtext">Aug 19th, 1:12 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>Viblo CV: Trải nghiệm nhiều mẫu CV mới - "Độc mà Lạ"!</span>
                                            <small class="subtext">Aug 14th, 3:01 PM</small>
                                        </a>
                                        <a href="#" class="announce__item">
                                            <span>FAQ: Những câu hỏi thường gặp với Viblo Mayfest</span>
                                            <small class="subtext">May 11th, 10:18 AM</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="flyout__footer">
                                    <div class="text-center">
                                        <a href="./pages/notifications.html">See All</a>
                                    </div>
                                </div>
                            </div>
                            <button class="button el-button el-button--text text-muted nav-control" id="noti-btn" onclick="openPopover('#noti-ppv')"><i
                                    class="far fa-bell"></i></button>
                            <!-- <sup class="el-badge__content">6</sup> -->
                        </div>
                    </span>
                </div>
                <div class="main-navbar__group">
                    <div class="mr-2 el-dropdown">
                        <ul id="write-ppv"  class="toggle-ppv" style="display: none;">
                            <li><a href="publish/post">
                                    <span class="mr-3"><i class="fas fa-pen"></i></span>Write post</a>
                            </li>
                            <li class="item-deivide"><a href="publish/series">
                                    <span class="mr-3"><i class="fas fa-list-ul"></i></span>New Series</a>
                                </a></li>
                            <li class="item-deivide"><a href="question/ask">
                                    <span class="mr-3"><i class="fas fa-question-circle"></i></i></span>Ask question</a>
                                </a></li>
                        </ul>
                        <button type="button" id="write-btn" class="button el-button el-button--text text-muted nav-control" onclick="openPopover('#write-ppv')"><i
                                class="far fa-edit" data-toggle="tooltip" title="Write"></i></button>
                        
                    </div>
                    <span class="user-setting user-setting-btn nav-control " id="user-setting-btn" onclick="openPopover('#user-ppv')">
                        <div class="el-popover user-menu__popover border toggle-ppv" id="user-ppv">
                            <div class="user-menu__top d-flex justify-content-between">
                                <img src="{{ URL::asset('img') }}/{{ auth()->user()->avatar }}" alt="user-img">
                                <div class="flex-fill overflow-hidden">
                                    <div class="user-menu__info mb-3">
                                        <div class="text-primary font-weight-bold text-truncate">{{ auth()->user()->username }}
                                        </div>
                                        <div class="text-muted text-truncate">@sucanabo</div>
                                    </div>
                                    <a href="user/edit"
                                        class="btn btn-primary text-light el-button--primary el.el-button--medium">Edit</a>
                                </div>
                            </div>
                            <hr>
                            <div class="user-menu__list">
                                <div class="user-menu__item">
                                    <a href="user/sucanabo" class="link link--plain">
                                        <span><i class="fas fa-user"></i></span> Profile
                                    </a>
                                </div>
                                <div class="user-menu__item">
                                    <a href="user/sucanabo" class="link link--plain">
                                        <span><i class="far fa-file-alt"></i></span> My Content
                                    </a>
                                </div>
                                <div class="user-menu__item">
                                    <a href="user/sucanabo" class="link link--plain">
                                        <span><i class="fas fa-building"></i></span> Organizations
                                    </a>
                                </div>
                                <div class="user-menu__item">
                                    <a href="user/sucanabo" class="link link--plain">
                                        <span><i class="fas fa-cog"></i></span> Preferences
                                    </a>
                                </div>
                                <hr>
                                <div class="user-menu__item">
                                    <a href="checkLogout" class="link link--plain">
                                        <span><i class="fas fa-sign-out-alt" ></i></span> Sign out
                                    </a>
                                </div>
                            </div>

                        </div>
                        <img src="{{ URL::asset('img') }}/{{ auth()->user()->avatar }}" alt="current user" class="rounded-circle"
                            id="avatar">
                    </span>
                </div>
                @endif
                @else
                 <b><a href="login">Sign in / Sign up</a></b>
             @endif   
            </div>
        </nav>
    </header>