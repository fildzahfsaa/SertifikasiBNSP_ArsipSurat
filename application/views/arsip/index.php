      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Arsip Surat</h3>
              <h2>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.
                  <br>
                  Klik "Lihat" pada kolom aksi untuk menampilkan surat.
              </h2>
            </div>
          </div>

          <div class="clearfix"></div>
                <?php if (empty($arsip)) :?>
                <div class="alert alert-danger" role="alert">
                    Data Arsip tidak ditemukan
                </div>
                <?php endif; ?>
          
          <?php echo $this->session->flashdata('message'); ?>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="" method="post">
                        <div class="input-group">
                          <h4 style="margin-top: 10px;">Cari Surat : </h4>&nbsp
                          <input type="text" class="form-control" placeholder="Search" name="keyword">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Cari</button>
                          </span>
                        </div>
                      </div>
                      <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>Nomor Surat</th>
                              <th>Kategori</th>
                              <th>Judul</th>
                              <th>Waktu Pengarsipan</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($arsip as $a) : ?>
                              <tr>
                                <td><?= $a['no_surat']; ?></td>
                                <td><?= $a['kategori']; ?></td>
                                <td><?= $a['judul']; ?></td>
                                <td><?= $a['waktu_pengarsipan']; ?></td>
                                <td>
                                  <a href="<?= base_url(); ?>upload/<?= $a['file']; ?>" class="btn btn-outline-secondary btn-round">Unduh</a>
                                  <a href="<?= base_url(); ?>Arsip/hapusArsip/<?= $a['id_surat']; ?>" class="btn btn-outline-danger btn-round" onclick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?');">Hapus</a>
                                  <a href="<?= base_url(); ?>Arsip/lihatArsip/<?= $a['id_surat']; ?>" class="btn btn-outline-primary btn-round">Lihat >></a>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <br><a href="<?= base_url(); ?>Arsip/inputArsip" title="Arsipkan Surat" class="btn btn-success">Arsipkan Surat...</a><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>