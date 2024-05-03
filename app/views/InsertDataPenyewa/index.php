<div class="sidebar">
        <div class="logo"><img src="" alt=""></div>
            <ul class="menu">
                <li >
                    <a href="<?= BASEURL ?>/Home">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/Penyewa">
                        <i class="fas fa-table"></i>
                        <span>Data Penyewa</span>
                    </a>
                </li>
                <li class="active">
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
            

            <form action="<?= BASEURL; ?>/Penyewa/tambahPenyewa" method="post" >
                
                <div class="mb-3">
                    <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
                    <input type="text" class="form-control" id="type" name="nama_penyewa" required>
                </div>
                
                <!-- Elemen formulir untuk alamat -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">No Identitas</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" required>
                </div>
                
                <!-- Elemen formulir untuk telepon -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                </div>
                <!-- Elemen formulir untuk Nama Pasien -->
                <div class="mb-3">
                    <label for="no_unit" class="form-label">No Unit</label>
                    <input type="text" class="form-control" id="no_unit" name="no_unit" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" required>
                </div>
                    <!-- Tombol Submit -->
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>