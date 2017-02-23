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
              <li><a href="login.html"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="signup.html"><i class="lnr lnr-user"></i> Registar</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="post-ads.html"><span class="fa fa-plus-circle"></span> Coloca um Anúncio</a>
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

    <!-- Start intro section -->
    <section id="intro" class="section-intro">
      <div class="overlay">
        <div class="container">
          <div class="main-text">
            <h1 class="intro-title">Bem Vindo ao Classificados <span style="color: #3498DB">AEMTG</span></h1>
            <p class="sub-title">Compra e venda de tudo!</p>

            <!-- Start Search box -->
            <div class="row search-bar">
              <div class="advanced-search">
                <form class="search-form" method="get">
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select">
                        <select class="dropdown-product selectpicker" name="product-cat" >
                          <option value="0">All Categories</option>
                          <option class="subitem" value="community"> Community</option>
                          <option value="items-for-sale"> Items For Sale</option>
                          <option value="jobs"> Jobs</option>
                          <option value="personals"> Personals</option>
                          <option value="training"> Training</option>
                          <option value="real_estate"> Real Estate</option>
                          <option value="services"> Services</option>
                          <option value="vehicles"> Vehicles</option>
                        </select>                                    
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select location-select">
                        <select class="dropdown-product selectpicker" name="product-cat" >
                          <option value="0">All Locations</option>
                          <option value="New York">New York</option>
                          <option value="California">California</option>
                          <option value="Washington">Washington</option>
                          <option value="churches">Birmingham</option>
                          <option value="Birmingham">Chicago</option>
                          <option value="Phoenix">Phoenix</option>
                        </select>                                    
                      </label>
                    </div>


                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search box -->
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->

    <div class="wrapper">
      <!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Browse Ads from 8 Categories</h3>
            </div>          
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-1 wow fadeInUpQuick" data-wow-delay="0.3s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-users color-1"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Community</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Announcements</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Car Pool - Bike Ride</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Charity - Donate - NGO</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Lost - Found</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Tender Notices</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">General Entertainment</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">View all subcategories →</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
             <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-2 wow fadeInUpQuick" data-wow-delay="0.6s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-laptop-phone color-2"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Electronics</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Home Electronics</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">LCDs</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Charity - Donate - NGO</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Mobile & Tablets</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">TV & DVDs</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Technical Services</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Others</a>
                      <sapn class="category-counter">1</sapn>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-3 wow fadeInUpQuick" data-wow-delay="0.9s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-cog color-3"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Services</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Cleaning Services</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Educational</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Food Services</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Medical</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Office & Home Removals</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">General Entertainment</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">View all subcategories →</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-4 wow fadeInUpQuick" data-wow-delay="1.2s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-cart color-4"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Shopping</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Bags</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Beauty Products</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Jewelry</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Shoes M/F</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Tender Notices</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Others</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-5 wow fadeInUpQuick" data-wow-delay="1.5s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-briefcase color-5"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Jobs</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Accounts Jobs</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Cleaning & Washing</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Web design</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Design & Code</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Finance Jobs</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Data Entry</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">View all subcategories →</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-6 wow fadeInUpQuick" data-wow-delay="1.8s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-graduation-hat color-6"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Training</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Android Development</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">20 Days HTML/CSS</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">iOS Development with Swift</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">SEO for rest of us</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Mastering in Java</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Others</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">View all subcategories →</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-7 wow fadeInUpQuick" data-wow-delay="2.1s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-apartment color-7"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Real Estate</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Farms</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Home for rent</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Hotels</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Land for sale</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Offices for rent</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Others</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                  </ul>
                </div>
              </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="category-box border-8 wow fadeInUpQuick" data-wow-delay="2.3s">
                <div class="icon">
                  <a href="category.html"><i class="lnr lnr-car color-8"></i></a>
                </div>
                <div class="category-header">  
                  <a href="category.html"><h4>Vehicles</h4></a>
                </div>
                <div class="category-content">
                  <ul>
                    <li>
                      <a href="category.html">Cars</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Fancy Cars</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Kids Bikes</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Motor Bikes</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Classic & Modern</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">Kinds</a>
                      <sapn class="category-counter">3</sapn>
                    </li>
                    <li>
                      <a href="category.html">View all subcategories →</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>     
          </div>
        </div>
      </section>
      <!-- Categories Homepage Section End -->

      <!-- Featured Listings Start -->
      <section class="featured-lis" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
              <h3 class="section-title">Featured Listings</h3>
              <div id="new-products" class="owl-carousel">
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img1.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>    
                    <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>  
                    <span class="price">$150</span>  
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img2.jpg')?> 
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div> 
                    <a href="ads-details.html" class="item-name">Sed diam nonummy</a>  
                    <span class="price">$67</span> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img3.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                    <a href="ads-details.html" class="item-name">Feugiat nulla facilisis</a>  
                    <span class="price">$300</span>  
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img4.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div> 
                    <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>  
                    <span class="price">$149</span> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img5.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                    <a href="ads-details.html" class="item-name">Sed diam nonummy</a>  
                    <span class="price">$90</span> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img6.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>                     
                    <a href="ads-details.html" class="item-name">Praesent luptatum zzril</a>  
                    <span class="price">$169</span> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img7.jpg')?> 
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>  
                    <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>  
                    <span class="price">$79</span> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <?=$this->Html->image('Frontend/product/img8.jpg')?>
                      <div class="overlay">
                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                    <a href="ads-details.html" class="item-name">Sed diam nonummy</a>  
                    <span class="price">$149</span>   
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      <!-- Featured Listings End -->

      <!-- Start Services Section -->
      <div class="features">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.3s">
                <div class="features-icon">
                  <i class="fa fa-book">
                  </i>
                </div>
                <div class="features-content">
                  <h4>
                    Full Documented
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.6s">
                <div class="features-icon">
                  <i class="fa fa-paper-plane"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Clean & Modern Design
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.9s">
                <div class="features-icon">
                  <i class="fa fa-map"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Great Features
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div> 
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.2s">
                <div class="features-icon">
                  <i class="fa fa-cogs"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Completely Customizable
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>           
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.5s">
                <div class="features-icon">
                 <i class="fa fa-hourglass"></i>
                </div>
                <div class="features-content">
                  <h4>
                    100% Responsive Layout
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.8s">
                <div class="features-icon">
                  <i class="fa fa-hashtag"></i>
                </div>
                <div class="features-content">
                  <h4>
                    User Friendly
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.1s">
                <div class="features-icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Awesome Layout
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.4s">
                <div class="features-icon">
                  <i class="fa fa-leaf"></i>
                </div>
                <div class="features-content">
                  <h4>
                    High Quality
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.7s">
                <div class="features-icon">
                  <i class="fa fa-google"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Free Google Fonts Use
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Services Section -->
     
      <!-- Location Section Start -->
      <section class="location">
        <div class="container">
          <div class="row localtion-list">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
              <h3 class="title-2"><i class="fa fa-envelope"></i> Subscribe for updates</h3>
            <form id="subscribe" action="">
              <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
              <div class="subscribe">
                <input class="form-control" name="EMAIL" placeholder="Your email here" required="" type="email">
                <button class="btn btn-common" type="submit">Subscribe</button>
              </div>
            </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1s">
              <h3 class="title-2"><i class="fa fa-search"></i> Popular Searches</h3>
              <ul class="cat-list col-sm-4">
                <li> <a href="account-saved-search.html">puppies</a></li>
                <li> <a href="account-saved-search.html">puppies for sale</a></li>
                <li> <a href="account-saved-search.html">bed</a></li>
                <li> <a href="account-saved-search.html">household</a></li>
                <li> <a href="account-saved-search.html">chair</a></li>
                <li> <a href="account-saved-search.html">materials</a></li>
              </ul>
              <ul class="cat-list col-sm-4">
                <li> <a href="account-saved-search.html">sofa</a></li>
                <li> <a href="account-saved-search.html">wanted</a></li>
                <li> <a href="account-saved-search.html">furniture</a></li>
                <li> <a href="account-saved-search.html">van</a></li>
                <li> <a href="account-saved-search.html">wardrobe</a></li>
                <li> <a href="account-saved-search.html">caravan</a></li>

              </ul>
              <ul class="cat-list col-sm-4">
                <li> <a href="account-saved-search.html">for sale</a></li>
                <li> <a href="account-saved-search.html">free</a></li>
                <li> <a href="account-saved-search.html">1 bedroom flat</a></li>
                <li> <a href="account-saved-search.html">photo+video</a></li>
                <li> <a href="account-saved-search.html">bmw</a></li>
                <li> <a href="account-saved-search.html">Land </a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Location Section End -->

    </div>

    <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay=".5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-tag"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">12090</h3>
                <p>Regular Ads</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-map"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">350</h3>
                <p>Locations</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1.5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-users"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">23453</h3>
                <p>Reguler Members</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="2s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-license"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">150</h3>
                <p>Premium Ads</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
              <div class="widget">
                <h3 class="block-title">About us</h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
                        <div class="widget">
                            <h3 class="block-title">Useful Links</h3>
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
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
                        <div class="widget">
                <h3 class="block-title">Latest Tweets</h3>
                <div class="twitter-content clearfix">
                  <ul class="twitter-list">
                    <li class="clearfix">
                      <span>
                        Platform to Download and Submit #Bootstrap Templates via @ProductHunt @GrayGrids
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                    <li class="clearfix">
                      <span>
                        Introducing Bootstrap 4 Features: What’s new, What’s gone!
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.5s">
                        <div class="widget">
                            <h3 class="block-title">Random Ads</h3>
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
                <p>All copyrights reserved @ 2016 - Designed by <a href="http://graygrids.com">GrayGrids</a></p>
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
