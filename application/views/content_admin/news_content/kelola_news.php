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
                                    <div class="form-group">

                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab_sm" data-toggle="tab">SM News</a></li>
                                                <li><a href="#tab_youthers" data-toggle="tab">Youthers News</a></li>
                                                <li><a href="#tab_recommended" data-toggle="tab">Recommended News</a></li>
                                                <li><a href="#tab_comunity" data-toggle="tab">Comunity News</a></li>
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
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_coming_ajax(<?php //echo $item['id_coming']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Youthers News-->
                                                <div class="tab-pane active" id="tab_youthers">
                                                    
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Recommended News-->
                                                <div class="tab-pane active" id="tab_recommended">
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
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_coming_ajax(<?php //echo $item['id_coming']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Comunity News-->
                                                <div class="tab-pane active" id="tab_comunity">
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
                                                                            <a href="<?php //echo site_url('KelolaComing/lihat_detail_coming/'.$item['id_coming']);?>"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open" ></i> Detail</button></a>

                                                                            <!-- Tombol Hapus -->
                                                                            <button onclick="delete_coming_ajax(<?php //echo $item['id_coming']; ?>)" id="delete-button-coming" type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" ></i> Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Comming Soon News-->
                                                <div class="tab-pane active" id="tab_comming">
                                                    
                                                </div><!-- /.tab-pane -->

                                                <!--Tab Youth.SM News-->
                                                <div class="tab-pane active" id="tab_youth">
                                                    
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


            