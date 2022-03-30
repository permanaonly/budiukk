<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-dark btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label for="tanggal">Pilih Tanggal</label>
                <input type="date" required class="form-control" placeholder="Masukkan Tanggal" name="tanggal" id="tanggal">
            </div>
            <div class="form-group">
                <label for="jam">Pilih jam</label>
                <input type="time" required class="form-control" placeholder="Masukkan jam" name="jam" id="jam">
            </div>
            <div class="form-group">
                <label for="lokasi">Pilih lokasi</label>
                <input type="text" required class="form-control" placeholder="Masukkan lokasi" name="lokasi" id="lokasi">
            </div>
            <div class="form-group">
                <label for="suhu">Suhu Tubuh</label>
                <input type="text" required class="form-control" placeholder="Masukkan suhu" name="suhu" id="suhu">
            </div>
            <button href="#" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Simpan</span>
            </button>
        </form>
    </div>
</div>