<ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">
        <i class="ti-user me-1 ms-1"></i>
        My Profile
    </a>
    <a class="dropdown-item" href="{{ route('admin.change.password') }}">
        <i class="ti-wallet me-1 ms-1"></i>
        Change Password
    </a>
    <a class="dropdown-item" href="javascript:void(0)">
        <i class="ti-email me-1 ms-1"></i>
        Inbox
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:void(0)"><i
            class="ti-settings me-1 ms-1"></i>Settings</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('admin-logout-form').submit();"><i
            class="fa fa-power-off me-1 ms-1"></i> Logout</a>
    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div class="dropdown-divider"></div>
    <div class="ps-4 p-10"><a href="javascript:void(0)"
                              class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
</ul>
