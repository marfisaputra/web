<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Page</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form method='post' action="<?php echo site_url("page/ubah_page") ?>">
              <table class='table table-bordered'>
                <input type="hidden" name="id_page" value="<?php echo $page->id_page ?>" />
                <tr>
                  <td>Kode</td>
                  <td><input type='text' name='kode' class='form-control' value="<?php echo $page->kd ?>" required></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type='text' name='nama' class='form-control' value="<?php echo $page->nm ?>" required></td>
                </tr>
                <tr>
                  <td>Jenis</td>
                  <td><input type='text' name='jenis' class='form-control' value="<?php echo $page->jn ?>" required></td>
                </tr>
                <tr>
                  <td>Thumb</td>
                  <td><input type='text' name='thumb' class='form-control' value="<?php echo $page->thumb ?>" required></td>
                </tr>
                <tr>
                  <td>Isi</td>
                  <td><textarea rows="5" cols="50" name="isi" class='form-control' ><?php echo $page->isi ?></textarea></td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td><input type='text' name='keterangan' class='form-control' value="<?php echo $page->ket ?>" required></td>
                </tr>
                  <tr>
                  <td align="center" colspan="2">
                  <button type="submit" class="btn btn-primary" name="btn-save">
                  <span class="glyphicon glyphicon-plus"></span>Simpan </button>
                  <a class="btn btn-danger" href="<?php echo site_url('page/') ?>">
                  <span class="glyphicon glyphicon-remove-sign"></span> Cancel </button>
                  </td>
                  </tr>
                  
                  </table>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->