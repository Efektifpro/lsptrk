<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">LSP-TRK</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('panel') ? 'active' : '' }}">
                <a class="nav-link" href="/panel"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('*data-sertifikat*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('data-sertifikat.index')}}"><i class="fas fa-users"></i><span>Data Sertifikat</span></a>
            </li>

            <li class="{{ Request::is('*pendaftaran-ujian*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('pendaftaran.step_one')}}"><i class="fas fa-pencil-ruler"></i><span>Pendaftaran Ujian</span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-sticky-note"></i><span><del>Ujian Online</del></span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-money-bill-wave"></i><span><del>Data Ujian</del></span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-list-ul"></i><span><del>Panduan</del></span></a>
            </li>

            <li class="{{ Request::is('*data-diri*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('biodata.index')}}"><i class="fas fa-portrait"></i><span>Pengaturan Data Diri</span></a>
            </li>
        </ul>
    </aside>
</div>
