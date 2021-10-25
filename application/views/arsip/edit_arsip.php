<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Arsip Surat >> Edit</h3>
                <h2>Unggah surat yang telah terbit pada form ini untuk diarsipkan.
                    <br>
                    Catatan:
                    1. Gunakan file berformat PDF
              </h2>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <div class="card-body">
                                <?php if (validation_errors()): ?>
                                <div class="alert alert-danger" role="alert">
                                <?= validation_errors()?>
                            </div>
                            <?php endif ?> 

                            <?php echo form_open_multipart(); ?>
                            <input type="hidden" name="id_surat" value="<?= $surat['id_surat'];?>">
                            <div class="form-group">
                                <label for="Nomor Surat">Nomor Surat</label>
                                <input type="text" class="form-control" id="no_surat" placeholder="Nomor Surat" name="no_surat" value="<?= $surat['no_surat'];?>">
                            </div>

                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Kategori" name="kategori" value="<?= $surat['kategori'];?>">
                            </div>

                            <div class="form-group">
                                <label for="Judul">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" Value="<?= $surat['judul'];?>">
                            </div>

                            <div class="form-group">
                                <label for="file">File Surat (PDF)</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="waktu_pengarsipan" name="waktu_pengarsipan" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); ?>">
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                            <?php echo form_close(); ?>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>   