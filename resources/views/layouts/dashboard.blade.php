<!DOCTYPE html>
<html lang="en-US" dir="ltr"> @include('admin.includes.header') <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">

         @include('admin.includes.sidebar')

         @include('admin.includes.navbar')

         @yield('content')

          @include('admin.includes.fotter')

