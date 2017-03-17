<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Account-home | Bootstrap HTML5 Classified Template</title>

     <!-- Favicon -->
    <?=$this->Html->css('Frontend/bootstrap.min.css')?> 
   <?=$this->Html->css('Frontend/jasny-bootstrap.min.css')?>    
   <?=$this->Html->css('Frontend/jasny-bootstrap.min.css')?>  
    <!-- Material CSS -->
   <?=$this->Html->css('Frontend/material-kit.css')?>  
    <!-- Font Awesome CSS -->
   <?=$this->Html->css('Frontend/font-awesome.min.css')?>
        <!-- Line Icons CSS -->
   <?=$this->Html->css('Frontend/line-icons.css')?>
        <!-- Line Icons CSS -->
   <?=$this->Html->css('Frontend/line-icons.css')?>
    <!-- Main Styles -->
   <?=$this->Html->css('Frontend/main.css')?>
    <!-- Animate CSS -->
   <?=$this->Html->css('Frontend/animate.css')?>
    <!-- Owl Carousel -->
   <?=$this->Html->css('Frontend/owl.carousel.css')?>
   <?=$this->Html->css('Frontend/owl.theme.css')?>   
    <!-- Responsive CSS Styles -->
   <?=$this->Html->css('Frontend/responsive.css')?>
    <!-- Slicknav js -->
   <?=$this->Html->css('Frontend/slicknav.css')?>
    <!-- Bootstrap Select -->
   <?=$this->Html->css('Frontend/bootstrap-select.min.css')?>
    
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.html"><?=$this->Html->image('Frontend/logo.png')?></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><?=$this->Html->link('<i class="lnr lnr-enter"></i> login','/users/login', ['escape' => false]);?></li>
              <li><?=$this->Html->link('<i class="lnr lnr-user"></i> Registar','/users/register', ['escape' => false]);?></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      <!-- Off Canvas Navigation -->
      <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
      <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <i class="fa fa-close"></i>
        </div>
          <h3 class="title-menu">All Pages</h3>
          <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="index.html">Home</a></li>
            <li><a href="index-v-2.html">Home Page V2</a></li>
            <li><a href="about.html">About us</a></li>            
            <li><a href="category.html">Category</a></li>             
            <li><a href="ads-details.html">Ads details</a></li>    
            <li><a href="pricing.html">Pricing Tables</a></li>    
            <li><a href="account-archived-ads.html">Account archived</a></li>
            <li><a href="account-close.html">Account-close</a></li>
            <li><a href="account-favourite-ads.html">Favourite ads</a></li>
            <li><a href="account-home.html">Account home</a></li>
            <li><a href="account-myads.html">Account myads</a></li>
            <li><a href="account-pending-approval-ads.html">pending approval</a></li>
            <li><a href="account-saved-search.html">saved search</a></li> 
            <li><a href="post-ads.html">Post ads</a></li> 
            <li><a href="posting-success.html">Posting-success</a></li>  
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="forgot-password.html">Forgot-password</a></li>
            <li><a href="faq.html">Faq</a></li>
            <li><a href="signup.html">Signup</a></li>
        </ul><!--- End Menu -->
      </div> <!--- End Off Canvas Side Menu -->
      <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
        <p><i class="fa fa-file-text-o"></i> All Pages</p>
      </div>
    </div>
    <!-- Header Section End -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 page-sideabr">
            <aside>
              <div class="inner-box">
                <div class="user-panel-sidebar">
                  <div class="collapse-box">
                    <h5 class="collapset-title no-border">My Classified <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myclassified"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="myclassified" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <li class="active">
                          <a href="account-home.html"><i class="fa fa-home"></i> Personal Home</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box">
                    <h5 class="collapset-title">My Ads <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="myads" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <li>
                          <a href="account-myads.html"><i class="fa fa-credit-card"></i> My Ads <span class="badge"></span></a>
                        </li>
                        <li>
                          <a href="account-favourite-ads.html"><i class="fa fa-heart-o"></i> Favourite Ads <span class="badge"></span></a>
                        </li>
                        <li>
                          <a href="account-saved-search.html"><i class="fa fa-star-o"></i> Saved Search <span class="badge"></span></a>
                        </li>
                        <li>
                          <a href="account-archived-ads.html"><i class="fa fa-folder-o"></i> Archived Ads <span class="badge"></span></a>
                        </li>
                        <li>
                          <a href="account-pending-approval-ads.html"><i class="fa fa-hourglass-o"></i> Pending Approval <span class="badge"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box">
                    <h5 class="collapset-title">Terminate Account <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#close"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="close" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <li>
                          <a href="account-close.html"><i class="fa fa-close"></i> Close Account</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-sm-9 page-content">
            <div class="inner-box">
              <div class="usearadmin">
                <?= $this->Form->create($user,['enctype'=>'multipart/form-data']); ?>
               <h3><?= $this->Html->image($user['profile_picture'], array('width'=> '100px'));   ?></h3>
              </div>
            </div>
            <div class="inner-box">
              <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> My details </a> </h4>
                  </div>
                  <div class="panel-collapse collapse in" id="collapseB1">
                    <div class="panel-body">
                      
                        <div class="form-group">
                          <label class="control-label">First Name</label>
                          <?= $this->Form->input('first_name', ['class'=>'form-control', 'placeholder'=>'First Name', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Last name</label>
                          <?= $this->Form->input('last_name', ['class'=>'form-control', 'placeholder'=>'Last Name', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">New Password</label>
                          <?= $this->Form->input('password', ['type' => 'password', 'empty'=>'true', 'placeholder'=> 'New Password', 'class'=>'form-control', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Confirm Password</label>
                          <?= $this->Form->input('password', ['type' => 'password', 'placeholder'=> 'Confirm Password', 'class'=>'form-control', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <?= $this->Form->input('email', ['class'=>'form-control', 'placeholder'=>'Email', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Username</label>
                          <?= $this->Form->input('username', ['class'=>'form-control', 'placeholder'=>'username', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label for="Phone" class="control-label">Phone</label>
                          <?= $this->Form->input('mobile_number', ['class'=>'form-control', 'placeholder'=>'Mobile Number', 'label'=>false]) ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Birth Date</label>
                          <?= $this->Form->input('date_of_birth', ['class'=>'form-control', 'label'=>false]) ?>
                        </div>
                          <label class="control-label">Profile Picture</label>
                       <?= $this->Form->input('profile_picture', array('type'=>'file', 'label'=>false)) ?> <br>
                        <div class="form-group">
                          <button type="submit" class="btn btn-common">Update</button>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">About</h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Links</h3>
                <ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Left Sidebar</a></li>
                  <li><a href="#">Pricing Plans</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Full Width Page</a></li>
                  <li><a href="#">Notifications</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Latest Tweets</h3>
                <div class="twitter-content clearfix">
                  <ul class="twitter-list">
                    <li class="clearfix">
                      <span>
                        Make sure you are following
                        <a href="#">@Graygrids</a> for all your Wingthemes needs! 
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                        Eight marketplaces, one Graygrids Market. Join us: 
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Premium Ads</h3>
                <ul class="featured-list">
                  <li>
                    <?=$this->Html->image('Frontend/featured/img1.jpg')?>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <?=$this->Html->image('Frontend/featured/img2.jpg')?>>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <?=$this->Html->image('Frontend/featured/img3.jpg')?>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <?=$this->Html->image('Frontend/featured/img4.jpg')?>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <?=$this->Html->image('Frontend/featured/img5.jpg')?>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                  <li>
                    <?=$this->Html->image('Frontend/featured/img6.jpg')?>
                    <div class="hover">
                      <a href="#"><span>$49</span></a>
                    </div>
                  </li>
                </ul>           
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2016 - Design & Development by <a href="http://graygrids.com">Graygrids</a></p>
              </div>              
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a> 
      
    <!-- Main JS  -->
    <?=$this->Html->script('Frontend/jquery-min.js')?>
    <?=$this->Html->script('Frontend/bootstrap.min.js')?>
    <?=$this->Html->script('Frontend/material.min.js')?>
    <?=$this->Html->script('Frontend/material-kit.js')?>
    <?=$this->Html->script('Frontend/jquery.parallax.js')?>
    <?=$this->Html->script('Frontend/owl.carousel.min.js')?>
    <?=$this->Html->script('Frontend/wow.js')?>
    <?=$this->Html->script('Frontend/main.js')?>
    <?=$this->Html->script('Frontend/jquery.counterup.min.js')?>
    <?=$this->Html->script('Frontend/waypoints.min.js')?>
    <?=$this->Html->script('Frontend/jasny-bootstrap.min.js')?>
    <?=$this->Html->script('Frontend/form-validator.min.js')?>
    <?=$this->Html->script('Frontend/contact-form-script.js')?>
    <?=$this->Html->script('Frontend/jquery.themepunch.revolution.min.js')?>
    <?=$this->Html->script('Frontend/jquery.themepunch.tools.min.js')?>
    <?=$this->Html->script('Frontend/bootstrap-select.min.js')?> 
  </body>
</html>