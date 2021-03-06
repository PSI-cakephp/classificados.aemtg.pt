<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Classificados AEMTG</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
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
              <?php if ($user = $this->request->session()->read('Auth.User')):?>
                <li><span style="display:block; padding:7px">User: <?=$user['username']?></span></li>
                <li><?=$this->Html->link('<i class="lnr lnr-exit"></i> logout','/users/logout', ['escape' => false]);?></li>
              <?php else: ?>
                <li><?=$this->Html->link('<i class="lnr lnr-enter"></i> login','/users/login', ['escape' => false]);?></li>
              
              <li><?=$this->Html->link('<i class="lnr lnr-user"></i> Registar','/users/register', ['escape' => false]);?></li>
              <?php endif;?>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html">Colocar Anúncio</a>
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
          <h3 class="title-menu">Todas as Páginas</h3>
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
        <p><i class="fa fa-file-text-o"></i> Páginas</p>
      </div>
    </div>
    <!-- Header Section End -->

    <?= $this->fetch('content'); ?>

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">Sobre nós</h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
                        <div class="widget">
                            <h3 class="block-title">Links Úteis</h3>
                            <ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Left Sidebar</a></li>
                  <li><a href="#">Pricing Plans</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Full Width Page</a></li>
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.5s">
                        <div class="widget">
                            <h3 class="block-title">Anúncios aleatórios</h3>
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
                <p>Todos os direitos reservados @ 2017 - Realizado por 12ºC</p>
              </div>                        
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a>
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
