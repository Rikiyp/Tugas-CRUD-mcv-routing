<div class="sidebar">
    <div class="logo">
        <img src="" alt="">
    </div>
    <ul class="menu">
        <li>
            <a href="<?= BASEURL ?>/Home">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="active">
            <a href="<?= BASEURL ?>/Penyewa">
                <i class="fas fa-table"></i>
                <span>Data Penyewa</span>
            </a>
        </li>
        <li>
            <a href="<?= BASEURL ?>/InsertDataPenyewa">
                <i class="fas fa-table-columns"></i>
                <span>Tambah Data Penyewa</span>
            </a>
        </li>
        <li class="logout">
            <a href="<?= BASEURL ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

<div class="main--content">
    <div class="row">
        <div class="col-lg-6">
            <!-- Masukkan konten yang sesuai di sini jika diperlukan -->
        </div>
    </div>
    <div class="header--wrapper">
        <div class="header--title">
            <h2>Apart</h2>
        </div>
        <div class="user--info">
            <img src="../assets/background.jpg" alt="">
        </div>            
    </div>

    <div class="tabular--wrapper">
        <h3 class="main--title">Data Apoteker</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Penyewa <button type="submit" name="sort" value="nama_Apoteker"><i class="bi bi-sort-alpha-up"></i></button> </th>
                        <th>No Identitas <button type="submit" name="sort" value="no_identitas"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Alamat <button type="submit" name="sort" value="alamat"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>No Telepon <button type="submit" name="sort" value="no_telepon"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>No Unit <button type="submit" name="sort" value="no_unit"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Kategori <button type="submit" name="sort" value="kategori"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Tanggal Mulai <button type="submit" name="sort" value="tanggal_mulai"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Tangal Selesai <button type="submit" name="sort" value="tanggal_selesai"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Harga <button type="submit" name="sort" value="harga"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Status <button type="submit" name="sort" value="status"><i class="bi bi-sort-alpha-up"></i></button></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data["Penyewa"] as $Penyewa) : ?>
                        <tr>
                        <td><?= $Penyewa['id_penyewa']; ?></td>
                        <td><?= $Penyewa['nama_penyewa']; ?></td>
                        <td><?= $Penyewa['no_identitas']; ?></td>
                        <td><?= $Penyewa['alamat']; ?></td>
                        <td><?= $Penyewa['no_telepon']; ?></td>
                        <td><?= $Penyewa['no_unit']; ?></td>
                        <td><?= $Penyewa['kategori']; ?></td>
                        <td><?= $Penyewa['tanggal_mulai']; ?></td>
                        <td><?= $Penyewa['tanggal_selesai']; ?></td>
                        <td><?= $Penyewa['harga']; ?></td>
                        <td><?= $Penyewa['status']; ?></td>
                        <td><a href="<?= BASEURL; ?>/Penyewa/editPenyewa/<?= $Penyewa['id_penyewa']; ?>" class="badge text-bg-success float-center tampilModalUbahPenyewa" data-bs-toggle="modal" data-bs-target="#formModalPenyewa" data-id="<?= $Penyewa['id_penyewa']; ?>">Edit</a> <a href="<?= BASEURL; ?>/Penyewa/hapusPenyewa/<?= $Penyewa['id_penyewa']; ?>" class="badge text-bg-danger float-center" onclick="return confirm('Apakah anda yakin?')">Hapus</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="formModalApoteker" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Edit Data Apoteker</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/Apoteker/editApoteker" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_apoteker" id="id_apoteker">
                    <!-- Elemen formulir untuk Nama Apoteker -->
                    <div class="mb-3">
                        <label for="nama_apoteker" class="form-label">Nama Apoteker</label>
                        <input type="text" class="form-control" id="nama_apoteker" name="nama_apoteker" required>
                    </div>
                    <!-- Elemen formulir untuk Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <!-- Elemen formulir untuk Telepon -->
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
