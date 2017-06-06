<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Edit Produk Shopping
                    </h1>
                    <div id="instafeed"></div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Kelola Shopping</a></li>
                        <li class="active">Edit Produk</li>
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
                                
                                <form role="form" enctype="multipart/form-data" action="<?php echo site_url('KelolaShopping/edit_shopping/'.$idShopping);?>" method="POST">
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
                                            <label for="exampleInputEmail1">Nama Produk   :</label>
                                            <input type="text" required name="nama_produk" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataShopping['nama_produk']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Produk :</label><br>
                                            
                                            <select name="jenis_produk" required class="form-control" id="kategori">
                                                <option value="">--Pilih Jenis Produk--</option>
                                                <?php
                                                    foreach ($kategori_shopping as $key=>$kategori) 
                                                    {
                                                        if ($key==$dataShopping['jenis_produk']){
                                                            echo '<option value="'.$key.'" selected>'.$kategori.'</option>';
                                                        }
                                                        else
                                                        {
                                                            echo '<option value="'.$key.'">'.$kategori.'</option>';   
                                                        }
                                                    }
                                                ?>
                                            </select></br>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Penjual   :</label>
                                            <input type="text" required name="posted_by" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataShopping['posted_by']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Telephone   :</label>
                                            <input type="text" required name="phone_number" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataShopping['phone_number']); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga Produk   :</label>
                                            <input type="text" required name="harga_produk" class="form-control" id="exampleInputEmail1" value="<?php echo htmlspecialchars($dataShopping['harga_produk']); ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class='box-header'>
                                                 <label>Deskripsi Produk :</label>
                                            </div>
                                            
                                                <textarea required id="editor_wow" name="deskripsi_produk" rows="10" cols="80">
                                                    <?php echo htmlspecialchars($dataShopping['deskripsi_produk']); ?>
                                                </textarea>                                    
                                            
                                        </div>

                                        <div class='box-header'>
                                            <label>Gambar Produk :</label>
                                        </div>

                                        <div class='box-header'>                
                                                <img style="height: 250px; padding: 4px; max-width:250px; border: solid 1px black" src="<?php echo base_url('asset/upload_img_shopping/'.$dataShopping['path_gambar']); ?>"/>
                                        </div>
                                        
                                        <label class='box-header' style="color: blue;" id="ganti">Ganti Gambar ?</label><br>
                                        <div class="ganti_gambar">
                                            <input class="form" type="file" name="filefoto" >
                                            <b><p style="color:red;">File diizinkan: jpg, jpeg, dan png (Max 2Mb)</p></b>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <input type="hidden" name="id_shopping" value="<?php echo $idShopping; ?>">
                                    <div class="box-footer">
                                        <button type="submit" name="save" value="1" class="btn btn-primary">Simpan</button>
                                       <a href="<?php echo site_url('KelolaShopping/');?>"><button type="button" name="submit" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->

                        <div class="col-md-2"></div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->