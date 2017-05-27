<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Tambah Wow
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Wow</a></li>
                        <li class="active">Tambah Wow</li>
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
								
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaWow/tambah_wow_check/');?>" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Wow   :</label>
                                            <input type="text" required name="judul_wow" class="form-control" id="exampleInputEmail1" 
											value="">
											<small>* Maksimal 100 Karakter</small>
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Penulis   :</label>
                                            <input type="text" required name="penulis" class="form-control" id="exampleInputEmail1"
											value="#"
											>
											<small>* Maksimal 50 Karakter</small>
                                        </div>
										
										<div class="form-group">
										
												<div class='box-header'>
													 <label>Deskripsi Wow :</label>
												</div><!-- /.box-header -->
												<div class='box-body pad'>
													<textarea required id="editor1" name="deskripsi_wow" rows="10" cols="80">
														
													</textarea>                                    
												</div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="exampleInputFile">Unggah File Gambar :</label>
                                            <input accept="image/*" type="file" name="gambar" id="exampleInputFile"><br/>
											<b><p style="color:red;">File diizinkan: jpg, jpeg, png, Max 2MB</p></b>
                                        </div>-->
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (left) -->
                        
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->