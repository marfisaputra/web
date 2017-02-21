<!-- page content -->
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

                    <form method='post' action="<?php echo site_url("menu/ubah_menu") ?>">
              <table class='table table-bordered'>
                <input type="hidden" name="id_menu" value="<?php echo $menu->id_menu ?>"/>
                <tr>
                  <td>Kode</td>
                  <td><input type='text' name='kode' value="<?php echo $menu->kd ?>" class='form-control' required></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><input type='text' name='nama' value="<?php echo $menu->nm ?>" class='form-control' required></td>
                </tr>
                <tr>
                  <td>Page</td>
                  <td>
                    <select class="input-xlarge" name="page" class='form-control'>
                      <?php foreach ($page as $pg){
                        if($pg->id_page == $menu->id_page)
                        {
                            ?>
                        
                      <option value="<?php echo $pg->id_page?>" selected><?php echo $pg->id_page.'-'.$pg->nm?></option>
                      <?php 
                      }else{ ?> 
                            <option value="<?php echo $pg->id_page?>"><?php echo $pg->id_page.'-'.$pg->nm?></option>
                       <?php  } 
                       } ?> 
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Par</td>
                  <td><input type='text' name='parent' class='form-control' value="<?php echo $menu->par?>" required></td>
                </tr>
                <tr>
                  <td>Seq</td>
                  <td><input type='text' name='seq' class='form-control' value="<?php echo $menu->seq?>" required></td>
                </tr>
               
                <tr>
                  <td>Keterangan</td>
                  <td><input type='text' name='keterangan' class='form-control' value="<?php echo $menu->ket ?>" required></td>
                </tr>
                  <tr>
                  <td align="center" colspan="2">
                  <button type="submit" class="btn btn-primary" name="btn-save">
                  <span class="glyphicon glyphicon-plus"></span>Simpan</button>
                  <a class="btn btn-danger" href="<?php echo site_url('menu/') ?>">
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