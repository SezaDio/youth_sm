<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Detail Produk
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth Shopping</li>
                        <li class="active">Kelola Shopping</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div>
                            <div class="col-md-1">
                            </div><!--/.col (left) -->

                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center;">
                                        <div style="padding-bottom: 10px">
                                            <div class="col-sm-12">
                                               <H3 style="text-align: center;"><?php echo $id_produk->nama_produk;?></H3>
                                               <hr style="outline-color: : steelblue">
                                            </div>
                                        </div>
                                            <!--Gambar Produk-->
                                            <div class="col-sm-4" style="padding-top: 20px;">
                                                <div style="background-color: ghostwhite; border: solid 2px steelblue; height:250px; width: 250px">
                                                    <div class="col-md-6">
                                                        <label>Gambar</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Detail Produk-->
                                            <div class="col-sm-8" style="padding-top: 20px;">
                                                <div style="background-color: ghostwhite; border: solid 2px steelblue; height:250px;">
                                                    
                                                        <table>
                                                            <tr>
                                                                <td><label>Detail Produk</label></td>
                                                                <td><label>:</label></td>
                                                                <td><label><?php echo $id_produk->id_produk;?></label></td>
                                                            </tr>
                                                        </table>
                                                    
                                                </div>                                              
                                            </div>
                                            
                                            <div style="padding-left: 65px; padding-top: 360px; padding-right: 675px;">
                                                <!-- Tombol lihat detail -->
                                                <a href="<?php echo site_url('KelolaShopping');?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>

                                                <!-- Tombol Hapus -->
                                                <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                            </div>
                                            
                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->
                            </div><!--/.col (left) -->

                            <div class="col-md-1">
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->