<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Produk</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <form method='post' action="<?php echo site_url("produk/ubah_produk")?>" enctype="multipart/form-data">
                      <table class='table table-bordered'>
                      <input type="hidden" name="id_prod" value="<?php echo $produk->id_prod ?>">
                        <tr>
                          <td>Kode</td>
                          <td><input type="text" name="kode" class="form-control" value="<?php echo $produk->kd ?>" required></td>
                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td><input type="text" name="nama" class="form-control" value="<?php echo $produk->nm ?>" required></td>
                        </tr>
                        <tr>
                          <td>Gambar</td>
                          <td>
                              <img src="<?php echo base_url('/lib/produk/'.$produk->gambar)?>"  class="img-rounded" height="200px" width="200px">
                              <br>
                              <br>
                              <input type="file" name="gambar" class="form-control" >
                          </td>
                        </tr>
                        <tr>
                          <td>Harga</td>
                          <td><input type="text" name="harga" class="form-control" value="<?php echo $produk->harga ?>" required></td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td><input type="text" name="keterangan" class="form-control" value="<?php echo $produk->ket ?>" required></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="2">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Tambah Data </button>
                            <a class="btn btn-danger" href="<?php echo site_url('produk/') ?>">
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