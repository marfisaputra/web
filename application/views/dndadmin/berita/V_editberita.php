
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Post</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    
                    <form method='post' action="<?php echo site_url("berita/ubah_post") ?>">
                      <input type="hidden" name="id_post" value="<?php echo $berita->id_post ?>">
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1">Kode</span>
                        <input type="text" name="kode" class="form-control" value="<?php echo $berita->kd ?>">
                      </div>
                      <div class="form-group">
                          <label style="font-size: 13px;margin-left: -8px;" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                          <select name="kategori" class='form-control'>
                            <?php foreach ($kategori as $kat){
                              if($kat->id_post_kat == $berita->id_post_kat)
                              {
                                  ?>
                              
                            <option value="<?php echo $kat->id_post_kat?>" selected><?php echo $kat->nm?></option>
                            <?php 
                            }else{ ?> 
                                  <option value="<?php echo $kat->id_post_kat?>"><?php echo $kat->nm?></option>
                             <?php  } 
                             } ?> 
                          </select>
                      </div>
                      <br>
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1">Judul</span>
                        <input type="text" name="judul" class="form-control" value="<?php echo $berita->nm ?>" >
                      </div>
          						<p>
            						<label for="isi">Isi berita</label>
            						<textarea name="isi_post" id="isi_post" cols="45" rows="5"><?php echo $berita->isi ?></textarea>
          						</p>
                      <div class="form-group">
                          <label style="font-size: 13px;margin-left: -8px;" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                         
                         <select class="form-control" name="status">
                              <option <?php if($berita->is_publish=='Y'){ echo "selected";} ?> value="Y">Publish</option>
                              <option <?php if($berita->is_publish=='N'){ echo "selected";} ?> value="N">Draft</option>
                         </select>
                      </div>
                      <div align="center">
                            <button type="submit" class="btn btn-primary" name="btn-save">
                            <span class="glyphicon glyphicon-plus"></span> Simpan </button>
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