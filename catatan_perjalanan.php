<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $no = 1;
                    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                    $user = $_SESSION['nik'] . "|" . $_SESSION['nama'];

                    foreach ($data as $value) :
                        $pecah = explode("|", $value);
                        @$key = $pecah['0'] . "|" . $pecah['1'];

                        if ($key == $user) :



                    ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pecah['2'] ?></td>
                                <td><?= $pecah['3'] ?></td>
                                <td><?= $pecah['4'] ?></td>
                                <td><?= $pecah['5'] ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>