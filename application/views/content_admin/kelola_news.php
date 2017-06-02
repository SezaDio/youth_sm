<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="margin-top: 45px;">
                    <h1>
                       Kelola News
                    </h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i>Youth News</li>
                        <li class="active">Kelola News</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">

                                <!--Mulai Tampilkan Data Table-->
                                <div class="box-body">
                                    <div style="margin-top:10px; margin-bottom:30px">
                                        <?php if($this->session->flashdata('msg_berhasil')!=''){?>
                                            <div class="alert alert-success alert-dismissable">
                                                <i class="glyphicon glyphicon-ok"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <?php echo $this->session->flashdata('msg_berhasil');?> 
                                            </div>
                                        <?php }?>
                                    </div>

                                    <div class="form-group">
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab_sm" data-toggle="tab">SM News</a></li>
                                                <li><a href="#tab_youthers" data-toggle="tab">Youthers News</a></li>
                                                <li><a href="#tab_recommended" data-toggle="tab">Recommended News</a></li>
                                                <li><a href="#tab_comunity" data-toggle="tab">Community News</a></li>
                                                <li><a href="#tab_comming" data-toggle="tab">Comming Soon News</a></li>
                                                <li><a href="#tab_youth" data-toggle="tab">Youth.SM News</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <!--Tab SM News-->
                                                <div class="tab-pane active" id="tab_sm">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsSm as $sm)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $sm['id_news'] ?></td>
                                                                        <td><?php echo $sm['judul_news'] ?></td>
                                                                        <td><?php echo $sm['posted_by'] ?></td>
                                                                        <td><?php echo $sm['kategori_news'] ?></td>
                                                                        <td><?php echo $sm['hits'] ?></td>
                                                                        <td><?php echo $sm['suka'] ?></td>
                                                                        <td><?php echo $sm['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $sm['id_news']; ?>)" id="delete-button-sm" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Youthers News-->
                                                <div class="tab-pane" id="tab_youthers">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-youthers">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                  
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsYouthers as $youthers)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $youthers['id_news'] ?></td>
                                                                        <td><?php echo $youthers['judul_news'] ?></td>
                                                                        <td><?php echo $youthers['posted_by'] ?></td>
                                                                        <td><?php echo $youthers['kategori_news'] ?></td>
                                                                        <td><?php echo $youthers['hits'] ?></td>
                                                                        <td><?php echo $youthers['suka'] ?></td>
                                                                        <td><?php echo $youthers['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $youthers['id_news']; ?>)" id="delete-button-youthers" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Recommended News-->
                                                <div class="tab-pane" id="tab_recommended">
                                                    <a href="<?php echo site_url('KelolaNews/tambah_news_check/');?>">
                                                        <button type="submit" value="3" name="jenis_berita" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Recommended News</button>
                                                    </a><br><br>
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-rekomendasi">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsRekomendasi as $rekomendasi)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $rekomendasi['id_news'] ?></td>
                                                                        <td><?php echo $rekomendasi['judul_news'] ?></td>
                                                                        <td><?php echo $rekomendasi['posted_by'] ?></td>
                                                                        <td><?php echo $rekomendasi['kategori_news'] ?></td>
                                                                        <td><?php echo $rekomendasi['hits'] ?></td>
                                                                        <td><?php echo $rekomendasi['suka'] ?></td>
                                                                        <td><?php echo $rekomendasi['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $rekomendasi['id_news']; ?>)" id="delete-button-rekomendasi" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Comunity News-->
                                                <div class="tab-pane" id="tab_comunity">
                                                    <a href="<?php echo site_url('KelolaNews/tambah_news_check/');?>">
                                                        <button value="4" type="submit" name="jenis_berita" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Community News</button>
                                                    </a><br><br>
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-komunitas">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsKomunitas as $komunitas)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $komunitas['id_news'] ?></td>
                                                                        <td><?php echo $komunitas['judul_news'] ?></td>
                                                                        <td><?php echo $komunitas['posted_by'] ?></td>
                                                                        <td><?php echo $komunitas['kategori_news'] ?></td>
                                                                        <td><?php echo $komunitas['hits'] ?></td>
                                                                        <td><?php echo $komunitas['suka'] ?></td>
                                                                        <td><?php echo $komunitas['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $komunitas['id_news']; ?>)" id="delete-button-komunitas" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Comming Soon News-->
                                                <div class="tab-pane" id="tab_comming">
                                                    <a href="<?php echo site_url('KelolaNews/tambah_news_check/');?>">
                                                        <button value="5" type="submit" name="jenis_berita" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Comming Soon News</button>
                                                    </a><br><br>
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-comming">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsComming as $comming)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $comming['id_news'] ?></td>
                                                                        <td><?php echo $comming['judul_news'] ?></td>
                                                                        <td><?php echo $comming['posted_by'] ?></td>
                                                                        <td><?php echo $comming['kategori_news'] ?></td>
                                                                        <td><?php echo $comming['hits'] ?></td>
                                                                        <td><?php echo $comming['suka'] ?></td>
                                                                        <td><?php echo $comming['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $comming['id_news']; ?>)" id="delete-button-comming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Youth.SM News-->
                                                <div class="tab-pane" id="tab_youth">
                                                    <a href="<?php echo site_url('KelolaNews/tambah_news_check/');?>">
                                                        <button value="6" type="submit" name="jenis_berita" class="btn btn-info"><i class="glyphicon glyphicon-plus" ></i> Youth.SM News</button>
                                                    </a><br><br>
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-list-youth">
                                                        <thead>
                                                            <tr>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">No.</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Judul News</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Pemosting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Kategori</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Hits</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Suka</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Waktu Posting</th>
                                                                <th class="title-center" style="font-size:1em; text-align:center;">Aksi</th>                                                        
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                foreach($listNewsYouth as $youth)
                                                                { ?>
                                                                    <tr>
                                                                        <td style="text-align: center;"><?php echo $youth['id_news'] ?></td>
                                                                        <td><?php echo $youth['judul_news'] ?></td>
                                                                        <td><?php echo $youth['posted_by'] ?></td>
                                                                        <td><?php echo $youth['kategori_news'] ?></td>
                                                                        <td><?php echo $youth['hits'] ?></td>
                                                                        <td><?php echo $youth['suka'] ?></td>
                                                                        <td><?php echo $youth['waktu_posting'] ?></td>
                                                                        <td align="center">
                                                                            <!-- Tombol lihat detail -->
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil" ></i> Edit</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_news_ajax(<?php echo $youth['id_news']; ?>)" id="delete-button-youth" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->


            