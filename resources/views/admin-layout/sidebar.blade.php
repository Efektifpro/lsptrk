<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">LSP-TRK</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="/admin"><i class="fas fa-clipboard"></i><span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('*peserta*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('peserta.index')}}"><i class="fas fa-users"></i><span>Peserta</span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-pencil-ruler"></i><span><del>Pendaftaran Ujian</del></span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-sticky-note"></i><span><del>Soal Ujian</del></span></a>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="fas fa-money-bill-wave"></i><span><del>Pembayaran</del></span></a>
            </li>

            <li class="menu-header">Requirement Pendaftaran</li>
            <li class="{{ Request::is('*sesi*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('sesi.index')}}"><i class="fas fa-list-ul"></i><span>Jadwal Uji</span></a>
            </li>
            <li class="">
                <a class="nav-link" href="{{ route('assesment_mandiri.index') }}"><i class="fas fa-check-double"></i><span>Assesment Mandiri</span></a>
            </li>
            <li class="">
                <a class="nav-link" href=""><i class="fas fa-city"></i><span><del>Tipe Peserta Uji</del></span></a>
            </li>

            <li class="menu-header">Website</li>
            <li class="nav-item dropdown {{ Request::is(['admin/web-berita*'],['admin/web-banner*'],['admin/web-gallery*']) ? '' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i> <span>Website Setting</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/setting*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('setting.index')}}">Pengaturan Umum</a>
                    </li>
                    <li class="{{ Request::is('admin/web-berita*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('berita.index')}}">Berita</a>
                    </li>
                    <li class="{{ Request::is('admin/web-banner*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('banner.index')}}">Banner</a>
                    </li>
                    <li class="{{ Request::is('admin/web-gallery*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('gallery.index')}}">Gallery</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ Request::is(['admin/klasifikasi*'],['admin/tipe-peserta*'],['admin/institusi*'],['admin/perguruan-tinggi*']) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i> <span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/klasifikasi*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('klasifikasi.index') }}">Klasifikasi Pekerjaan</a>
                    </li>
                    <li class="{{ Request::is('admin/tipe-peserta*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('tipe-peserta.index') }}">Tipe Peserta</a>
                    </li>
                    <li class="{{ Request::is('admin/institusi*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('institusi.index') }}">Institusi</a>
                    </li>
                    <li class="{{ Request::is('admin/perguruan-tinggi*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('perguruan-tinggi.index') }}">Perguruan Tinggi</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is(['*admin/kota-uji*'],['*admin/lokasi*'],['*admin/bidang*'],['*admin/tanggal*']) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i> <span>Jadwal Ujian</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('*admin/kota-uji*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('kota.index') }}">Kota Ujian</a>
                    </li>
                    <li class="{{ Request::is('*admin/lokasi*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('lokasi.index') }}">Lokasi Ujian</a>
                    </li>
                    <li class="{{ Request::is('*admin/bidang*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bidang.index') }}">Bidang Uji</a>
                    </li>
                    <li class="{{ Request::is('*admin/tanggal*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('tanggal.index') }}">Tanggal Uji</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
