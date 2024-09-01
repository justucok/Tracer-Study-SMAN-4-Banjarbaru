<form class="col-6 d-flex" action="{{ route('alumnis.index') }}" method="GET">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group p-2">
        <input type="radio" class="btn-check" name="filter" id="btnradio1" value="minggu_ini" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio1">Minggu Ini</label>

        <input type="radio" class="btn-check" name="filter" id="btnradio2" value="bulan_ini" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Bulan Ini</label>

        <input type="radio" class="btn-check" name="filter" id="btnradio3" value="tahun_ini" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Tahun Ini</label>
    </div>
    <button type="submit" class="btn btn-primary mx-2">Cari..</button>
</form>
