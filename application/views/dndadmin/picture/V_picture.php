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
							<div class="container">
								<a href="<?php echo site_url('picture/tampil_tambah'); ?>" class="btn btn large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp Tambah Data</a>
							</div>
							<div class="clearfix"></div><br/>
							<form method="POST">
								<div class="row well">
									<div class="col-md-6 form-group">
										<label for="nama">Nama</label>
										<input type="text" id="nama_page" name="nama_menu" class="form-control" value="<?php //echo $this->input->post('nama_page') ?>" />
									</div>
									<br>
									<div class="col-md-6 form-group">
										<button class="btn btn-default">Cari</button>
									</div>
									<input type="hidden" id="offset" name="offset" value="0" />
								</div>
							</form>
							<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
								<thead>
									<tr>
										<th style="width:50px">No</th>
										<th style="width:120px">Gambar</th>
                    					<th style="width:120px">Nama</th>
                    					<th style="width:120px">Keterangan</th>
										<th style="width:10px">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$picture = $this->load->M_picture->tampil_list();
									if($picture == null){

								?>
									<tr>
										<td colspan="4">Belum ada data picture</td>
									</tr>
								<?php 
								}else{$no=1;
									foreach ($picture as $pct) {?>	
								<tr>
								  <td><?php echo $no++;?></td>
								  <td><img src="<?php echo base_url('/lib/pict_man/'.$pct->pic);?>"  class="img-rounded" height="100px" width="100px"></td>
				                  <td><?php echo $pct->nm;?></td>
				                  <td><?php echo $pct->ket;?></td>
								  <td>
									  <a class="btn btn-sm btn-info" href="<?php echo site_url('picture/edit_picture/'.$pct->id_pic); ?>"><span class="glyphicon glyphicon-pencil"></span> Ubah</a>
										<a class="btn btn-sm btn-danger" href="<?php echo site_url('picture/hapus/'.$pct->id_pic); ?>" onClick="return confirm(' Data Yakin Mau dihapus ?');"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
								  </td>
								</tr> 
								<?php
										}
									}
								?> 
								</tbody>
							</table>
						</div>
					</div>
                  </div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->