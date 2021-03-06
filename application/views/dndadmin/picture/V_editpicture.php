<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Picture</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method="post" action="<?php echo site_url("picture/ubah_picture") ?>" enctype="multipart/form-data" >
                      <table class="table table-bordered">
                      <input type="hidden" name="id_pic" value="<?php echo $picture->id_pic ?>">
                      <input type="hidden" name="id_user" value="<?php echo $picture->id_user ?>">
                        <tr>
                          <td>Nama</td>
                          <td><input type="text" name="nama" value="<?php echo $picture->nm ?>" class="form-control" required></td>
                        </tr>
                        <tr>
                          <td>Picture</td>
                          <td>
                              <img src="<?php echo base_url('/lib/pict_man/'.$picture->pic)?>"  class="img-rounded" height="200px" width="200px">
                              <br>
                              <br>
                              <input type="file" name="picture" class="form-control" >
                          </td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td><input type="text" name="keterangan" class="form-control" value="<?php echo $picture->ket ?>" required></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="2">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Simpan </button>
                            <a class="btn btn-danger" href="<?php echo site_url('picture/') ?>">
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