<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Admin
                    </h1>
					<div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Administrator Control</a></li>
                        <li class="active">Edit Admin</li>
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
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaAdmin/edit_admin/'.$idAdmin);?>" method="POST">
                                    <div class="box-body">
                                        <div style="margin-top:10px; margin-bottom:30px">
                                            <?php if($this->session->flashdata('msg_gagal')!=''){?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('msg_gagal');?> 
                                                </div>
                                            <?php }?>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status Admin :</label><br>
                                            
                                            <select name="status_admin" required class="form-control" id="status_admin">
                                                <option value="">--Pilih Status Admin--</option>
                                                <?php
                                                    foreach ($status_admin as $key=>$status_admin) 
                                                    {
                                                        if ($key==$dataAdmin['status_admin']){
                                                            echo '<option value="'.$key.'" selected>'.$status_admin.'</option>';
                                                        }
                                                        else
                                                        {
                                                            echo '<option value="'.$key.'">'.$status_admin.'</option>';   
                                                        }
                                                    }
                                                ?>
                                            </select></br>
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username :</label>
                                            <input type="text" required name="username" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataAdmin['username']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Admin :</label>
                                            <input type="text" required name="nama_admin" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataAdmin['nama_admin']); ?>">
                                        </div>

										<div class="form-group">
                                            <label for="exampleInputEmail1">Email :</label>
                                            <input type="text" required name="email" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataAdmin['email']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telfon :</label>
                                            <input type="text" required name="telfon" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataAdmin['telfon']); ?>">
                                        </div>
										

                                        <div class='box-header'>
                                            <label>Foto Admin :</label>
                                        </div>

                                        <div class='box-header'>                
                                            <img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/upload_img_admin/'.$dataAdmin['path_foto']); ?>"/>
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
											<b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_admin" value="<?php echo $idAdmin; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Simpan</button>
                                       <a href="<?php echo site_url('KelolaAdmin/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->