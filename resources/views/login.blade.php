<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title> @yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('academic-education/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear">
      <nav>
      </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="/"></a>Mts Al-Huda Reban</h1>
      <p></p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->


<div class="wrapper row3">
<div class="rounded">
    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
    <form>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
        <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
      </div>
      <div class="mb-4 flex items-center">
        <input type="checkbox" id="rememberMe" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
        <label for="rememberMe" class="ml-2 block text-sm text-gray-900">Remember me</label>
      </div>
      <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
    </form>
    <div class="text-center mt-4">
      <p class="text-sm text-gray-600">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a></p>
    </div>
  </div>
</div>
</div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="{{ asset('academic-education/images/demo/worldmap.png')}}" alt="">
          <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        Long Educational Facility Name<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        <i class="fa fa-phone pright-10"></i> xxxx xxxx xxxxxx<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">contact@domain.com</a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="" placeholder="Enter Email Here&hellip;">
            <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS --> 
<script src="{{ asset('academic-education/layout/scripts/jquery.min.js')}}"></script> 
<script src="{{ asset('academic-education/layout/scripts/jquery.fitvids.min.js')}}"></script> 
<script src="{{ asset('academic-education/layout/scripts/jquery.mobilemenu.js')}}"></script> 
<script src="{{ asset('academic-education/layout/scripts/tabslet/jquery.tabslet.min.js')}}"></script>
</body>
</html>