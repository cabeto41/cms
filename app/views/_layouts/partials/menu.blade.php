<div class="page-sidebar" id="main-menu">
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <!-- BEGIN MINI-PROFILE -->
        <div class="user-info-wrapper">
            <div class="profile-wrapper"> <img src="{{ asset('assets/dashboard/img/profiles/avatar.jpg') }}"  alt="" data-src="{{ asset('assets/dashboard/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/dashboard/img/profiles/avatar2x.jpg') }}" width="69" height="69" /> </div>
            <div class="user-info">
                <div class="greeting">Welcome</div>
                <div class="username"><span class="semi-bold">{{ Auth::user()->username }}</span></div>
                <div class="status">Status<a href="#">
                        <div class="status-icon green"></div>
                        Online</a></div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
        <ul>
            <li class="start active open ">
                <a href="javascript:;">
                    <i class="fa fa-folder-open"></i> <span class="title">Manage Content</span> <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('CPanel.admin.sections.index') }}"> Sections </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>