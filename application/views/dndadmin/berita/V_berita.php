<!-- page content -->
        <div class="right_col" role="main">
			<div class="">
				<div class="page-title">
				  <div class="title_left">
					<h3>Form Berita</h3>
				  </div>
				</div>
            <div class="clearfix"></div>
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_content">
							<div class="container">
								<a href="<?php echo site_url('berita/tampil_tambah'); ?>" class="btn btn large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp Tambah Data</a>
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
										<th style="width:120px">Kode</th>
                    					<th style="width:120px">Judul</th>
                    					<th style="width:120px">Status </th>
										<th style="width:10px">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$berita = $this->load->M_berita->tampil_list();
									if($berita == null){

								?>
									<tr>
										<td colspan="4">Belum ada data post</td>
									</tr>
								<?php 
								}else{$no=1;
									foreach ($berita as $brt) {?>	
								<tr>
								  <td><?php echo $no++;?></td>
								  <td><?php echo $brt->kd;?></td>
				                  <td><?php echo $brt->nm;?></td>
				                  <td><?php echo $brt->is_publish;?></td>
								  <td>
									  <a class="btn btn-sm btn-info" href="<?php echo site_url('berita/edit_post/'.$brt->id_post); ?>"><span class="glyphicon glyphicon-pencil"></span> Ubah</a>
										<a class="btn btn-sm btn-danger" href="<?php echo site_url('berita/hapus/'.$brt->id_post); ?>" onClick="return confirm(' Data Yakin Mau dihapus ?');"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
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