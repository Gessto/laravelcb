<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right" style="float: right!important;">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ CRUDBooster::myPhoto() }}" class="rounded-circle mr-1" style="width:35px; height: 35px;">
                <div class="d-sm-none d-lg-inline-block">{{ CRUDBooster::myName() }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">{{ CRUDBooster::myPrivilegeName() }}</div>
                <a href="{{ route('getLockScreen') }}" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Lockscreen
                </a>
                <a href="{{ route('AdminCmsUsersControllerGetProfile') }}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Edit profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger" onclick="swal({
                    title: '{{cbLang('alert_want_to_logout')}}',
                    type:'info',
                    showCancelButton:true,
                    allowOutsideClick:true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '{{cbLang('button_logout')}}',
                    cancelButtonText: '{{cbLang('button_cancel')}}',
                    closeOnConfirm: false
                    }, function(){
                    location.href = '{{ route("getLogout") }}';

                    });" title="{{cbLang('button_logout')}}">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
