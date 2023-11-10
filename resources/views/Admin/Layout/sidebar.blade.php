<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <!-- User -->
            <li class="menu">
                <a href="#user" data-active="{{ request()->is('admin/user*') ? 'true' : '' }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>کاربران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->is('admin/user*') ? 'show' : '' }}" id="user" data-parent="#user">
                    <li class="{{ request()->is('admin/user') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">لیست</a>
                    </li>
                </ul>
            </li>
            <!-- User -->

            <!-- Skill -->
            <li class="menu">
                <a href="#skill" data-active="{{ request()->is('admin/skill*') ? 'true' : '' }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>مهارت ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->is('admin/skill*') ? 'show' : '' }}" id="skill" data-parent="#skill">
                    <li class="{{ request()->is('admin/skill') ? 'active' : '' }}">
                        <a href="{{ route('skill.index') }}">لیست</a>
                    </li>
                    <li class="{{ request()->is('admin/skill/create') ? 'active' : '' }}">
                        <a href="{{ route('skill.create') }}">ایجاد</a>
                    </li>
                </ul>
            </li>
            <!-- Skill -->

            <!-- Portfolio -->
            <li class="menu">
                <a href="#portfolio" data-active="{{ request()->is('admin/portfolio*') ? 'true' : '' }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>نمونه کار ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->is('admin/portfolio*') ? 'show' : '' }}" id="portfolio" data-parent="#portfolio">
                    <li class="{{ request()->is('admin/portfolio') ? 'active' : '' }}">
                        <a href="{{ route('portfolio.index') }}">لیست</a>
                    </li>
                    <li class="{{ request()->is('admin/portfolio/create') ? 'active' : '' }}">
                        <a href="{{ route('portfolio.create') }}">ایجاد</a>
                    </li>
                </ul>
            </li>
            <!-- Portfolio -->

            <!-- Experience -->
            <li class="menu">
                <a href="#experience" data-active="{{ request()->is('admin/experience*') ? 'true' : '' }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>تجربیات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->is('admin/experience*') ? 'show' : '' }}" id="experience" data-parent="#experience">
                    <li class="{{ request()->is('admin/experience') ? 'active' : '' }}">
                        <a href="{{ route('experience.index') }}">لیست</a>
                    </li>
                    <li class="{{ request()->is('admin/experience/create') ? 'active' : '' }}">
                        <a href="{{ route('experience.create') }}">ایجاد</a>
                    </li>
                </ul>
            </li>
            <!-- Experience -->

            <!-- Comment -->
            <li class="menu">
                <a href="#comment" data-active="{{ request()->is('admin/comment*') ? 'true' : '' }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>کامنت ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->is('admin/comment*') ? 'show' : '' }}" id="comment" data-parent="#comment">
                    <li class="{{ request()->is('admin/comment') ? 'active' : '' }}">
                        <a href="{{ route('comment.index') }}">لیست</a>
                    </li>
                    <li class="{{ request()->is('admin/comment/create') ? 'active' : '' }}">
                        <a href="{{ route('comment.create') }}">ایجاد</a>
                    </li>
                </ul>
            </li>
            <!-- Comment -->

        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
<!--  END SIDEBAR  -->
