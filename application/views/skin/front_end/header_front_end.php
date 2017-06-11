<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Youth.SM">

      <title> Youth.SM </title>

      <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>" type="image/x-icon">

      <!-- Core Bootstrap File -->
      <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

      <!-- Mega Menu -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/megaMenu.css'); ?>">

      <!-- Template Core Css -->
      <link href="<?php echo base_url('asset/css/style_front_end.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/breakingNews.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ANIMATE CSS -->
      <link href="<?php echo base_url('asset/css/animate.min.css'); ?>" rel="stylesheet" type="text/css">

      <!-- ZERO GRID CSS -->
      <link href="<?php echo base_url('asset/css/zerogrid.css'); ?>" rel="stylesheet" type="text/css">

      
      <!-- Font Awesome Icons -->
      <link href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/themify-icons.css'); ?>" type="text/css">

      <!-- Owl Slider Css -->
      <link href="<?php echo base_url('asset/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url('asset/css/owl.theme.default.css'); ?>" rel="stylesheet" type="text/css">


      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="<?php echo base_url('asset/css/colors/defualt.css'); ?>">

      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
   </head>
   <body>

      <!--Top Bar-->
      <section class="topbar">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                  <div class="col-md-6 col-sm-3 col-xs-12">
                     
                  </div>
                  <div class="col-md-6 col-sm-9 col-xs-12">
                     <ul>
                        <li> <i class="ti-calendar"></i> Saturday 28 January, 2017</li>
                        <li class="dropdown" role="presentation">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><i class="ti-user"></i> login <span class="caret"></span></a>
                              <div class="dropdown-menu" style="width: 400px; right: 0px; left: unset; padding: 20px;">
                                    <form class="omb_loginForm" id="form-login" action="<?php //echo site_url('Account/login'); ?>" autocomplete="on" method="POST">
                                          <?php 
                                                //$this->load->library('form_validation');
                                                //echo validation_errors(); 
                                          ?>

                                          <p style="color:red; font-family: Comic Sans Ms;"><?php //echo $this->session->flashdata('notification'); ?></p>
                                          
                                          <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input type="text" class="form-control" name="username" placeholder="username" required value="<?php //echo set_value('username'); ?>">
                                          </div>
                                          <span class="help-block"></span>
                                                                        
                                          <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input  type="password" class="form-control" name="password" placeholder="Password" required value="<?php //echo set_value('password'); ?>">
                                          </div>
                                          <span class="help-block"><hr class="omb_hrOr"></span>

                                          <button class="btn btn-colored-blog pull-right" type="submit" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                                          <p class="omb_forgotPwd" style="color:blue;"><a href="#">Forgot password?</a></p>
                                    </form>
                              </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      
      <!--Big Logo-->
      <section class="logo-row logo-center">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="logo"> <a href="#"><img alt="" src="<?php echo base_url('asset/img/logo1.png'); ?>"></a> </div>
               </div>
            </div>
         </div>
      </section>

      <!--Navigation Bar-->
      <section class="menu-container-section">
         <nav id="menu-3" class="megaMenu" data-color="">
            <div class="nav-container">
               <div class="sticky-container">
                  <!-- mobile trigger button for show the collapse drop down -->
                  <ul class="menu-mobile-trigger">
                     <li><i class="fa fa-bars"></i></li>
                  </ul>
                  <ul class="menu-logo hidden-md">
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('asset/img/logo-small.png'); ?>" class="img-responsive" alt="logo">
                        </a>
                     </li>
                  </ul>
                  <ul class="menu-search-bar-mobile">
                     <li>
                        <form action="#">
                           <button type="submit"><i class="fa fa-search"></i></button>
                           <input type="search" name="s" placeholder="Search...">
                        </form>
                     </li>
                  </ul>
                  <ul class="menu-links pull-right">
                     <li class="active">
                        <a href="javascript:void (0)">
                        <span class="text">  Home </span>
                        </a>
                        <ul class="drop-down">
                           <li><a href="index.html"> <i class="fa fa-file-image-o"></i> Home 1  </a></li>
                           <li><a href="index2.html"> <i class="fa fa-apple"></i> Home 2  </a></li>
                           <li><a href="index3.html"> <i class="fa fa-university"></i> Home 3  </a></li>
                           <li><a href="index4.html"> <i class="fa fa-adjust"></i> Home 4</a></li>
                           <li><a href="index5.html"> <i class="fa fa-archive"></i> Home 5</a></li>
                           <li><a href="index6.html"> <i class="fa fa-bar-chart"></i> Home 6</a></li>
                           <li><a href="index7.html"> <i class="fa fa-adjust"></i> Home 7</a></li>
                           <li><a href="index8.html"> <i class="fa fa-automobile"></i> Home 8</a></li>
                           <li><a href="index-box.html"> <i class="fa fa-automobile"></i> Home Box Width</a></li>
                        </ul></li>
                     <li>
                        <a href="blog-grids.html"><span class="text">  Food </span> </a>
                     </li>
                     <li>
                        <a href="blog-grids.html">
                        <span class="text"> World</span>
                        </a>
                     </li>
                     <li>
                        <a href="blog-grids.html">
                        <span class="text"> Life Style</span>
                        </a>
                     </li>
                     <li>
                        <a href="blog-grids.html">
                        <span class="text"> Technology</span>
                        </a>
                     </li>
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">  DropDown</span>
                        </a>
                        <ul class="drop-down">
                           <li><a href="#"> ENTERTAINMENT </a></li>
                           <li><a href="#"> EDUCATION </a></li>
                           <li>
                              <a href="javascript:void (0)"> CREATIVE </a>
                              <ul class="drop-down">
                                 <li><a href="#">Product #1 </a></li>
                                 <li><a href="#">Product #2</a></li>
                                 <li><a href="#">Product #3</a></li>
                                 <li><a href="#">Product #4</a></li>
                                 <li><a href="#">Product #5</a></li>
                                 <li>
                                    <a href="javascript:void (0)">Product #6</a>
                                    <ul class="drop-down left">
                                       <li><a href="#">Product #1 </a></li>
                                       <li><a href="#">Product #2</a></li>
                                       <li><a href="#">Product #3</a></li>
                                       <li><a href="#">Product #4</a></li>
                                       <li><a href="#">Product #5</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="#">Product #7</a></li>
                                 <li><a href="#">Product #8</a></li>
                              </ul>
                           </li>
                           <li><a href="#"> CORPORATE</a></li>
                           <li><a href="#">ECOMMERCE</a></li>
                           <li><a href="#"> TECHNOLOGY</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">Pages</span>
                        </a>
                        <div class="drop-down-medium col-md-8 col-md-pull-1">
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Blog Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="blog-grids.html"> <i class="ti-angle-right"></i> Blog Grid</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-grids-2.html"> <i class="ti-angle-right"></i> Blog Grid 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-listing.html"> <i class="ti-angle-right"></i> Blog Listing</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="blog-grids-small.html"> <i class="ti-angle-right"></i> Blog Grid Small</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Detail Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="standard-post.html"> <i class="ti-angle-right"></i> Statndard Post</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post2.html"> <i class="ti-angle-right"></i> Statndard Post 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post-full.html"> <i class="ti-angle-right"></i> Full Width Image</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="standard-post-full-width.html"> <i class="ti-angle-right"></i> Full Width Post</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Extra Pages</h4>
                                 <ul>
                                    <li>
                                       <a href="about.html"> <i class="ti-angle-right"></i> About</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="contact.html"> <i class="ti-angle-right"></i> Contact</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="contact-2.html"> <i class="ti-angle-right"></i> Contact 2</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="404.html"> <i class="ti-angle-right"></i> 404 Pages</a>
                                       <hr>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="list-items">
                                 <h4>Order List</h4>
                                 <ol>
                                    <li>
                                       <a href="auther-posts.html">Auther Posts</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                    <li>
                                       <a href="#">Items</a>
                                       <hr>
                                    </li>
                                 </ol>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="col-sm-12">
                              <h4>Paragraph</h4>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis eaque eos esse
                                 exercitationem fuga, id laudantium maiores officiis perferendis quidem veniam? Ducimus
                                 esse excepturi hic provident sunt velit voluptas?
                                 <a href="#">Readmore...</a>
                              </p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">Fashion</span>
                        </a>
                        <div class="drop-down-large space-remove nav-tabs">
                           <div class="col-sm-3 col-md-2 space-remove">
                              <ul class="nav nav-tabs vertical" role="tablist">
                                 <li class="active"><a href="#tab1" role="tab" data-toggle="tab"> <i class="fa fa-file-text"></i> All </a></li>
                                 <li><a href="#tab2" role="tab" data-toggle="tab"> <i class="fa fa-compress"></i> Music </a></li>
                                 <li><a href="#tab3" role="tab" data-toggle="tab"> <i class="fa fa-picture-o"></i> Technology </a></li>
                                 <li><a href="#tab4" role="tab" data-toggle="tab"> <i class="fa fa-video-camera"></i> Video </a></li>
                              </ul>
                           </div>
                           <div class="col-sm-9 col-md-10 space-remove">
                              <div class="tab-content vertical">
                                 <div class="active tab-pane fade in" id="tab1">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/40.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/41.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/42.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade in" id="tab2">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/63.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/62.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/61.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade in" id="tab3">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/60.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/59.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="tab4">
                                    <div class="row">
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-green" href="#">
                                                         <div>Travel</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 Hours Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/57.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-pink" href="#">
                                                         <div>Life Style</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-quote-left"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  3 Hours ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                       <article class="col-md-4 col-sm-4 col-xs-12">
                                          <div class="grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/56.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-lightblue" href="#">
                                                         <div>technology</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-image"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                   <li>  5 mins Ago </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </article>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="javascript:void (0)">
                        <span class="text">Sports</span>
                        </a>
                        <div class="drop-down-medium col-md-9 col-md-pull-1 nav-tabs">
                           <div class="col-sm-3 col-md-2 space-remove">
                              <ul class="nav nav-tabs vertical" role="tablist">
                                 <li class="active"><a href="#tab-1" role="tab" data-toggle="tab"> <i class="fa fa-file-text"></i> All </a></li>
                                 <li><a href="#tab-2" role="tab" data-toggle="tab"> <i class="fa fa-compress"></i> World News </a></li>
                                 <li><a href="#tab-3" role="tab" data-toggle="tab"> <i class="fa fa-picture-o"></i> Movies </a></li>
                                 <li><a href="#tab-4" role="tab" data-toggle="tab"> <i class="fa fa-video-camera"></i> Sports </a></li>
                              </ul>
                           </div>
                           <div class="col-sm-9 col-md-10 space-remove">
                              <div class="tab-content vertical">
                                 <div class="active tab-pane fade in" id="tab-1">
                                    <div class="row">
                                       <article class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="latest-news-grid grid-1">
                                             <div class="picture">
                                                <div class="category-image">
                                                   <a href="standard-post.html">
                                                   <img alt="" class="img-responsive" src="images/posts/1.jpg">
                                                   </a>
                                                   <div class="catname">
                                                      <a class="btn btn-gray" href="#">
                                                         <div>Food and Health</div>
                                                      </a>
                                                   </div>
                                                   <div class="hover-show-div">
                                                      <a href="" class="post-type">
                                                      <i class="ti-music-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="detail">
                                                <div class="caption">
                                                   <h5>
                                                      <a href="standard-post.html">New cookie dough shop opens in NYC to be your best friend</a>
                                                   </h5>
                                                </div>
                                                <ul class="post-tools">
                                                   <li> by <a href=""><strong> Arsoo</strong> </a></li>
                                                   <li>  March 10, 2017 </li>
                                                   <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                                </ul>
                                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a standard dummy text ever since the 1500s. <a href="" class="readmore">Read More</a> </p>
                                             </div>
                                          </div>
                                       </article>
                                       <ul class="small-grid">
                                          <li class="col-md-6 col-sm-6 col-xs-12">
                                             <div class="small-post">
                                                <div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-7.jpg" alt=""></a> </div>
                                                <div class="post-content">
                                                   <h3> <a href="standard-post.html">Dogs have great smelling capacity </a> </h3>
                                                   <ul class="post-tools">
                                                      <li>  January 09, 2016 </li>
                                                      <li title="Comments"> <a href=""><i class="ti-thought"></i> 35 </a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-md-6 col-sm-6 col-xs-12">
                                             <div class="small-post">
                                                <div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-8.jpg" alt=""></a> </div>
                                                <div class="post-content">
                                                   <h3> <a href="standard-post.html">People paid migrant workers to stand in line overnight.</a> </h3>
                                                   <ul class="post-tools">
                                                      <li>  April 12, 2016 </li>
                                                      <li title="Comments"> <a href=""><i class="ti-thought"></i> 56</a> </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-md-6 col-sm-6 col-xs-12">
                                             <div class="small-post">
                                                <div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-9.jpg" alt=""></a> </div>
                                                <div class="post-content">
                                                   <h3> <a href="standard-post.html">Get a stern talking-to from your parents with Kit Kat's Lunar</a> </h3>
                                                   <ul class="post-tools">
                                                      <li>  April 02, 2016 </li>
                                                      <li title="Comments"> <a href=""><i class="ti-thought"></i> 90</a> </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-md-6 col-sm-6 col-xs-12">
                                             <div class="small-post">
                                                <div class="small-thumb"> <a href="standard-post.html"><img class="" src="images/small-posts/small-10.jpg" alt=""></a> </div>
                                                <div class="post-content">
                                                   <h3> <a href="standard-post.html">Byco newest creation may be the grossest fast food invention</a> </h3>
                                                   <ul class="post-tools">
                                                      <li>  July 25, 2016 </li>
                                                      <li title="Comments"> <a href=""><i class="ti-thought"></i> 60</a> </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade in" id="tab-2">
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/63.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-green" href="#">
                                                      <div>Travel</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-music-alt"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 Hours Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/62.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-pink" href="#">
                                                      <div>Life Style</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-quote-left"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  3 Hours ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/61.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-lightblue" href="#">
                                                      <div>technology</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-image"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 mins Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="tab-pane fade in" id="tab-3">
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/60.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-green" href="#">
                                                      <div>Travel</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-music-alt"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 Hours Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/59.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-pink" href="#">
                                                      <div>Life Style</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-quote-left"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  3 Hours ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-lightblue" href="#">
                                                      <div>technology</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-image"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 mins Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="tab-pane fade" id="tab-4">
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/58.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-green" href="#">
                                                      <div>Travel</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-music-alt"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Computer issue for United Airlines in the U.S.</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 Hours Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/57.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-pink" href="#">
                                                      <div>Life Style</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-quote-left"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Super Bowl battles a domain for being John</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  3 Hours ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                    <article class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="grid-1">
                                          <div class="picture">
                                             <div class="category-image">
                                                <a href="standard-post.html">
                                                <img alt="" class="img-responsive" src="images/posts/56.jpg">
                                                </a>
                                                <div class="catname">
                                                   <a class="btn btn-lightblue" href="#">
                                                      <div>technology</div>
                                                   </a>
                                                </div>
                                                <div class="hover-show-div">
                                                   <a href="" class="post-type">
                                                   <i class="ti-image"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="detail">
                                             <div class="caption">
                                                <h5>
                                                   <a href="standard-post.html">Charity is buying a search engine for research papers</a>
                                                </h5>
                                             </div>
                                             <ul class="post-tools">
                                                <li> by <a href=""> <strong> Arsoo</strong> </a></li>
                                                <li>  5 mins Ago </li>
                                                <li><a href=""> <i class="ti-thought"></i> 57</a> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="contact.html">
                        <span class="text"> Contact</span>
                        </a>
                     </li>
                  </ul>
                  <ul class="menu-search-bar-desktop">
                     <li>
                        <a href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                        </a>
                        <div id="open-1" class="drop-down">
                           <form action="#">
                              <input type="search" name="s" placeholder="Search...">
                              <button type="submit">Search</button>
                           </form>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </section>