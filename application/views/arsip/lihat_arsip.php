      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                        <h3>Arsip Surat >> Lihat</h3>
                        <p>
                            <h4 style="margin-top: 10px;">Nomor: <?= $surat['no_surat'];?></h4>
                        <p>
                        <p>
                            <h4 style="margin-top: 10px;">Kategori: <?= $surat['kategori'];?></h4>
                        </p>
                        <p>
                            <h4 style="margin-top: 10px;">Judul: <?= $surat['judul'];?></h4>
                        </p>
                        <p>
                            <h4 style="margin-top: 10px;">Waktu Unggah: <?= $surat['waktu_pengarsipan'];?></h4>
                        </p>
                          <object type="application/pdf" data= "<?= base_url(); ?>upload/<?= $surat['file']; ?>" width="100%" height="500px">
                            <embed src="<?= base_url(); ?>upload/<?= $surat['file']; ?>" type="application/pdf"></embed>
                          </object>
                        <!-- <iframe src="upload/<?= $surat['file']; ?>" width="100%" height="500px"></iframe> -->
                        <!-- <a src="/uploads/pdf/suratcinta.pdf"></a> -->
                        <br>
                        <a href="<?= base_url(); ?>" title="Arsipkan Surat" class="btn btn-success"><< Kembali</a>
                        <a href="<?= base_url(); ?>upload/<?= $surat['file']; ?>" title="Arsipkan Surat" class="btn btn-success">Unduh</a>
                        <a href="<?= base_url(); ?>Arsip/editArsip/<?= $surat['id_surat']; ?>" title="Arsipkan Surat" class="btn btn-success">Edit/Ganti File</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>