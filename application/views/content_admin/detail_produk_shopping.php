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
                        <div style="padding-left: 150px">
                            <div class="col-md-10">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    
                                    <!--Mulai Tampilkan Data Table-->
                                    <div class="box-body" style="align-content: center;">
                                            
                                            <!--Gambar Produk-->
                                            <div style="background-color: ghostwhite; border: solid 2px steelblue; height:250px; width: 250px">
                                                <div class="col-md-6">
                                                    <label>Gambar</label>
                                                </div>
                                            </div>

                                            <!--Detail Produk-->
                                            <div style= "margin-left: 270px; margin-top: -250px;">
                                                <div style="background-color: ghostwhite; border: solid 2px steelblue; height:250px; width: 495px">
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tr>
                                                                <td><label>Detail Produk</label></td>
                                                                <td><label>:</label></td>
                                                                <td><label><?php echo $id_produk->id_produk;?></label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <div style="width: 250px; margin-left: 50px; margin-top: -40px;">
                                                <!-- Tombol lihat detail -->
                                                <a href="#"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-arrow-left" ></i> Kembali</button></a>

                                                <!-- Tombol Hapus -->
                                                <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                            </div>
                                    </div><!-- /.box-body -->
                                    
                                </div><!-- /.box -->
                            </div><!--/.col (left) -->
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->