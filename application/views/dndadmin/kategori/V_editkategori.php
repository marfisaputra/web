<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Kategori</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method='post' action="<?php echo site_url("kategori/ubah_kategori") ?>">
                      <table class='table table-bordered'>
                        <input type="hidden" name="id_post_kat" value="<?php echo $kategori->id_post_kat ?>">
                        <tr>
                          <td>Kode</td>
                          <td><input type='text' name='kode' class='form-control' value="<?php echo $kategori->kd ?>" required></td>
                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td><input type='text' name='nama' class='form-control' value="<?php echo $kategori->nm ?>" required></td>
                        </tr>
                        <tr>
                          <td>Par</td>
                          <td><input type='text' name='parent' class='form-control' value="<?php echo $kategori->par ?>" required></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="2">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Simpan </button>
                            <a class="btn btn-danger" href="<?php echo site_url('kategori/') ?>">
                            <span class="glyphicon glyphicon-remove-sign"></span> Cancel </a>
                          </td>
                        </tr>    
                      </table>
                    </form>
                  </div>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->