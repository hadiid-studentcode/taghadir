 <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    @if(Auth::user()->role == 'admin')
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.manajemenGuru') }}">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Manajemen Guru</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.kelolaAbsensi') }}">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Kelola Absensi</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('admin.absensi') }}">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Manajemen Absensi</span>
                        </a>
                    </li>

                    @endif
                </ul>
            </nav>