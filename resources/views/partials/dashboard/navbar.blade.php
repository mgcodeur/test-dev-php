<div class="main-header">
    <div class="logo d-flex justify-content-center">
        <x-application-logo/>
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div style="margin: auto"></div>

    <div class="header-part-right">
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>

        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="{{ asset('assets/images/faces/me.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> {{ auth()->user()->name }}
                    </div>

                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                        @csrf
                        <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit()">
                            Se deconnecter
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
