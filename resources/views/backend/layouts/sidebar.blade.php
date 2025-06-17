<aside class="app-sidebar">
    <div class="main-sidebar-header justify-content-between">
        <a href="/admin/dashboard" class="w-100 h-100 d-flex justify-content-center align-items-center text-center">
            <img class="w-auto h-100" src="{{ asset('img/frontend/logo/white-logo.webp') }}"
                style="max-height: 20px !important; max-width: 80% !important">
        </a>
        <button class="d-block d-md-none btn text-white close-btn" onclick="hideSidebar();">
            <i class="fi fi-sr-cross-small"></i>
        </button>
    </div>

    <div class="main-sidebar" data-scrollbars>
        <div class="simplebar-content-wrapper">
            <div class="simplebar-content">
                <ul class="main-menu" id="main-menu">
                    <li class="slide">
                        <a href="/admin/dashboard" id="dashboard" class="side-menu__item">
                            <i class="fi fi-rr-home side-menu__icon"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>

                    <div class="sidebar-menu-header">APPEARANCE</div>

                    <!-- <li class="slide">
                        <a href="#" class="side-menu__item accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#gallery" aria-expanded="false" aria-controls="gallery">
                            <i class="fi fi-rr-picture side-menu__icon"></i>
                            <span class="side-menu__label">Media</span>
                        </a>
                        <ul id="gallery" class="slide-menu accordion-collapse collapse" data-bs-parent="#main-menu">
                            <li class="slide">
                                <a href="/admin/gallery" id="albums" class="side-menu__item">
                                    <i class="fi fi-rr-angle-double-small-right side-menu__icon"></i>
                                    <span class="side-menu__label">Albums</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="/admin/video" id="videos" class="side-menu__item">
                                    <i class="fi fi-rr-angle-double-small-right side-menu__icon"></i>
                                    <span class="side-menu__label">Videos</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="slide">
                        <a href="/admin/blog" id="categories" class="side-menu__item">
                            <i class="fi fi-rr-blog-text side-menu__icon"></i>
                            <span class="side-menu__label">Blogs</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="/admin/gallery" id="gallery" class="side-menu__item">
                            <i class="fi fi-rr-picture side-menu__icon"></i>
                            <span class="side-menu__label">Gallery</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="/admin/tour-packages" id="tourPackages" class="side-menu__item">
                            <i class="fi fi-rr-plane side-menu__icon"></i>
                            <span class="side-menu__label">Tour Packages</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="/admin/category" id="categories" class="side-menu__item">
                            <i class="fi fi-rr-apps side-menu__icon"></i>
                            <span class="side-menu__label">Categories</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="/admin/tour-packages" id="tour-packages" class="side-menu__item">
                            <i class="fi fi-rr-plane side-menu__icon"></i>
                            <span class="side-menu__label">Tour Packages</span>
                        </a>
                    </li>

                    <!--
                    <div class="sidebar-menu-header">SITE SETTINGS</div>

                    <li class="slide">
                        <a href="#" class="side-menu__item accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#setup" aria-expanded="false" aria-controls="setup">
                            <i class="fi fi-rr-settings side-menu__icon"></i>
                            <span class="side-menu__label">Setup</span>
                        </a>
                        <ul id="setup" class="slide-menu accordion-collapse collapse" data-bs-parent="#main-menu">

                            <li class="slide">
                                <a href="/admin/site-settings" id="logoFavicon" class="side-menu__item">
                                    <i class="fi fi-rr-angle-double-small-right side-menu__icon"></i>
                                    <span class="side-menu__label">Logo & Favicon</span>
                                </a>
                            </li>

                            <li class="slide">
                                <a href="/admin/settings/email" id="email" class="side-menu__item">
                                    <i class="fi fi-rr-angle-double-small-right side-menu__icon"></i>
                                    <span class="side-menu__label">Email Setup</span>
                                </a>
                            </li>

                            <li class="slide">
                                <a href="/admin/admin" id="admin" class="side-menu__item">
                                    <i class="fi fi-rr-angle-double-small-right side-menu__icon"></i>
                                    <span class="side-menu__label">Admin and Role</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <div class="sidebar-menu-header">MY SETTINGS</div>

                    <li class="slide">
                        <a href="/admin/profile" id="profile" class="side-menu__item">
                            <i class="fi fi-rr-user side-menu__icon"></i>
                            <span class="side-menu__label">My Profile</span>
                        </a>
                    </li>

                    <li class="slide">
                        <a href="/admin/logout" class="side-menu__item">
                            <i class="fi fi-rr-power side-menu__icon"></i>
                            <span class="side-menu__label">Logout</span>
                        </a>
                    </li>

                </ul>
                {{-- <p class="text-white-50 align-self-end text-center px-4 copyright py-2"
                    style="font-size: 12px; bottom: 0">
                    Design and Development by Addix Platforms. All rights reserved. <br>
                    <a class="text-white" href="/terms-of-use">Terms of Use</a>
                </p> --}}
            </div>
        </div>
    </div>
</aside>
