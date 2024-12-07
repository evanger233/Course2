<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('static/admin/css/bootstrap.min.css') }}" />


      <!-- site css -->
      <link rel="stylesheet" href="{{asset('static/admin/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('static/admin/css/responsive.css')}}" />
      <!-- color css -->

      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('static/admin/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('static/admin/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('static/admin/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <!-- <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a> -->
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                       
                        <div class="user_info">
                           <h6>{{Auth::guard('admins')->user()->name}}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                   
                     <li><a href="{{ route('admin.articles.list') }}"><i class="fa fa-table purple_color2"></i><span>Articles</span></a></li>

                    
                     <li><a href="{{ route('admin.admins.index') }}"><i class="fa fa-user"></i> <span>Admins</span></a></li>

                    
                     <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                     <li>
                        <a href="{{ route('admin.pages.edit') }}">
                           <i class="fa fa-paper-plane red_color"></i> <span>About</span>
                        </a>
                     </li>

                     
                     <li><a href="{{ route('admin.contacts.index') }}"><i class="fa fa-map purple_color2"></i> <span>Connact</span></a></li>
                    
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <!-- <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a> -->
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                               
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">{{Auth::guard('admins')->user()->name}}</span></a>
                                    <div class="dropdown-menu">
                                     
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       <span>Log Out</span>
                                       <i class="fa fa-sign-out"></i>
                                    </a>

                                    <!-- 登出表单 -->
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                       @csrf
                                       @method('POST') <!-- 这个是为了指定使用 POST 请求 -->
                                    </form>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>