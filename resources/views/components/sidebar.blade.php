<style>
    .sidebar-brand{
        background-color: white !important;
    }
</style>

<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('dist/img/logo/logo3.png') }}">
        </div>
    </a>
    <hr class="sidebar-divider my-0">

    <x-nav-link
        text="Dashboard"
        icon="th"
        url="{{ route('admin.dashboard') }}"
        active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mt-3 mb-0">

    <x-nav-link
        text="Diagnosa"
        icon="stethoscope"
        url="{{ route('admin.diagnosa') }}"
        active="{{ request()->routeIs('admin.diagnosa') ? ' active' : '' }}"
    />

    <x-nav-link
        text="Riwayat Diagnosa"
        icon="notes-medical"
        url="{{ route('admin.riwayat.daftar') }}"
        active="{{ request()->routeIs('admin.riwayat.daftar') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mt-3 mb-0">


    <x-nav-link
        text="Daftar Penyakit"
        icon="th-list"
        url="{{ route('admin.penyakit') }}"
        active="{{ request()->routeIs('admin.penyakit') ? ' active' : '' }}"
    />


    <x-nav-link
        text="Daftar Gejala"
        icon="th-list"
        url="{{ route('admin.gejala') }}"
        active="{{ request()->routeIs('admin.gejala') ? ' active' : '' }}"
    />



    <x-nav-link
        text="Basis Rules"
        icon="briefcase-medical"
        url="{{ route('admin.rules', 1) }}"
        active="{{ request()->routeIs('admin.rules') ? ' active' : '' }}"
    />


    <hr class="sidebar-divider mb-0">

</ul>
