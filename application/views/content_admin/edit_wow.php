<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Wow
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Wow</a></li>
                        <li class="active">Edit Wow</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        

                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                
                                <!-- form start -->
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaWow/edit_wow_check/');?>" method="POST">
                                    <div class="box-body">
										<div class="form-group">
                                            <label for="exampleInputEmail1">Kategori   :</label><br>
                                            <select name="kategori" required class="form-control" id="kategori">
                                                <option value="">--Pilih Kategori Wow--</option>
                                                <option value="Wow Sains">Wow Sains</option>
                                                <option value="Wow Teknologi">Wow Teknologi</option>
                                                <option value="Wow Sejarah">Wow Sejarah</option>
                                                <option value="Wow Politik">Wow Politik</option>
                                                <option value="Wow Fiksi">Wow Fiksi</option>
                                                <option value="Wow Rekomendasi">Wow Rekomendasi</option>
                                                <option value="Wow Komunitas">Wow Komunitas</option>
                                                <option value="Wow Lain-Lain">Wow Lain-Lain</option>
                                            </select></br>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Wow   :</label>
                                            <input type="text" required name="judul_wow" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($wow->judul_wow); ?>">
                                            
                                        </div>
										
										<div class="form-group">
											<div class='box-header'>
												 <label>Deskripsi Wow :</label>
											</div>
											<div class='box-body pad'>
												<textarea required id="editor_wow" name="deskripsi_wow" rows="10" cols="80">
												    <?php echo htmlspecialchars($wow->deskripsi); ?>
												</textarea>                                    
											</div>
                                        </div>

                                        <label style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" required >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        <button type="submit" name="submit" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->