
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Menu</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method='post' action="<?php echo site_url("berita/tambah") ?>">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1">Kode</span>
                        <input type="text" name="kode" class="form-control" placeholder="Kode Post">
                      </div>
                      <div class="form-group">
                          <label style="font-size: 13px;margin-left: -8px;" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                          <select class="form-control" name="kategori">
                            <?php foreach ($kategori as $kt) {?>
                              <option value="<?php echo $kt->id_post_kat?>"><?php echo $kt->nm ?>
                            <?php } ?>
                          </select>
                      </div>
                      <br>
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1">Judul</span>
                        <input type="text" name="judul" class="form-control" placeholder="Judul Post">
                      </div>
          						<p>
            						<label for="isi">Isi berita</label>
            						<textarea name="isi" id="isi" cols="45" rows="5"></textarea>
          						</p>
                      <div class="form-group">
                          <label style="font-size: 13px;margin-left: -8px;" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                          <select class="form-control" name="status">
                              <option value="Y">Publish</option>
                              <option value="N">Draft</option>
                          </select>
                      </div>
                      <div align="center">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Tambah Data </button>
                            <a class="btn btn-danger" href="<?php echo site_url('berita/') ?>">
                            <span class="glyphicon glyphicon-remove-sign"></span> Cancel </a>
                      </div>
                  </form>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>