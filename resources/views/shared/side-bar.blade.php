<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Main Menu
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('alumnis.create') }}">Tambah Alumni</a>
                    <a class="nav-link" href="{{ route('events.create') }}">Tambah Event</a>
                    <a class="nav-link" href="{{ route('jobfair.create') }}">Tambah Job Fair</a>
                    <a class="nav-link" href="{{ route('beasiswa.create') }}">Tambah Beasiswa</a>
                    <a class="nav-link" href="{{ route('loker.create') }}">Tambah Lowongan Pekerjaan</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Master Data
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('alumnis.index') }}">Rekapitulasi Informasi Lulusan</a>
                    <a class="nav-link" href="{{ route('university.index') }}">Rekapitulasi Pendidikan Lanjutan</a>
                    <a class="nav-link" href="{{ route('job.index') }}">Rekapitulasi Informasi Ketenagakerjaan</a>
                    <a class="nav-link" href="{{ route('events.index') }}">Rekapitulasi Informasi Event</a>
                    <a class="nav-link" href="{{ route('jobfair.index')}}">Rekapitulasi Informasi Jobfair</a>
                    <a class="nav-link" href="{{ route('beasiswa.index') }}">Rekapitulasi Informasi Beasiswa</a>
                    <a class="nav-link" href="{{ route('loker.index') }}">Rekapitulasi Lowongan Pekerjaan</a>
                    <a class="nav-link" href="{{ route('survey.index')}}">Laporan Survey Kepuasan</a>
                    <a class="nav-link" href="{{ route('information.index') }}">Data Tambahan</a>
                </nav>
            </div>
        </div>
    </div>
</nav>
