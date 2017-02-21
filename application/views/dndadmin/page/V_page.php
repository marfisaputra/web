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
						<div class="container">
							<a href="<?php echo site_url('page/tampil_tambah'); ?>" class="btn btn large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp Tambah Data</a>
						</div>
						<div class="clearfix"></div><br/>
						<form method="POST">
							<div class="row well">
								<div class="col-md-6 form-group">
								  <label for="nama">Nama</label>
								  <input type="text" id="nama_page" name="nama_page" class="form-control" value="<?php echo $this->input->post('nama_page') ?>" />
								  </div>
								  <br>
								  <div class="col-md-6 form-group">
									<button class="btn btn-default">Cari</button>
									</div>
									<input type="hidden" id="offset" name="offset" value="0" />
							</div>
						</form>
						<table class="table table-condensed table-bordered table-hover table-responsive" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th style="width:50px">No</th>
									<th style="width:120px">Kode</th>
									<th style="width:120px">Nama</th>
									<th style="width:120px">Jenis</th>
									<th style="width:10px">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								// $page =$this->load->M_page->get_list();
								if ($page == null) {
									?>
									<tr>
										<td colspan="4">Belum ada data jenis</td>
									</tr>

								<?php
								}else{$i=$no; 

								foreach($page as $pages){?>
								<tr>
								  <td><?php echo $no++;?></td>
								  <td><?php echo $pages->kd;?></td>
								  <td><?php echo $pages->nm;?></td>
								  <td><?php echo $pages->jn;?></td>
								  <td>
								  <a class="btn btn-sm btn-info" href="<?php echo site_url('page/edit_page/'.$pages->id_page); ?>"><span class="glyphicon glyphicon-pencil"></span> Ubah</a>
									<a class="btn btn-sm btn-danger" href="<?php echo site_url('page/hapus/'.$pages->id_page); ?>" onClick="return confirm(' Data Yakin Mau dihapus ?');"><span class="glyphicon glyphicon-remove"></span> Hapus</a>
								  
								  </td>
								</tr>
								<?php } 
								}
								?>
							</tbody>
						</table>
						<?php echo $this->pagination->create_links(); ?> Total Data : <?php echo $total_rows; ?>
						<script>  
							  $('#paging li a').on('click',function(e){
								e.preventDefault();
								var off =$(this).attr('href').substr(1);
								$('#offset').val(off);
								$('form').attr('action','<?php echo site_url('page/V_page');?>'+$(this).attr('href'));
								$('form').submit();
								
							  });
						</script> 
					</div>	
					
				</div>
				
				
            </div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->