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

                    <form method='post' action="<?php echo site_url("page/tambah") ?>">
              <table class='table table-bordered'>
                <tr>
                  <td>Kode</td>
                  <td><input type='text' name='kode' class='form-control' required></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type='text' name='nama' class='form-control' required></td>
                </tr>
                <tr>
                  <td>Jenis</td>
                  <td><input type='text' name='jenis' class='form-control' required></td>
                </tr>
                <tr>
                  <td>Thumb</td>
                  <td><input type='text' name='thumb' class='form-control' required></td>
                </tr>
                <tr>
                  <td>Isi</td>
                  <td><textarea rows="5" cols="50" name="isi" class='form-control'></textarea></td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td><input type='text' name='keterangan' class='form-control' required></td>
                </tr>
                  <tr>
                  <td align="center" colspan="2">
                  <button type="submit" class="btn btn-primary" name="btn-save">
                  <span class="glyphicon glyphicon-plus"></span> Tambah Data </button>
                  <a class="btn btn-danger" href="<?php echo site_url('page/') ?>">
                  <span class="glyphicon glyphicon-remove-sign"></span> Cancel </button>
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