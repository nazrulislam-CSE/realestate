@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
@endphp
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
     <!--  <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-anchor"></i>
      </div> -->
      <div class="sidebar-brand-text mx-3">{{ Auth::guard('admin')->user()->name }} Dashboard</div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider">
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Slider</span>
      </a>
      <div id="category" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="{{ route('slider.index') }}">Manage Slider</a>
            <a class="collapse-item " href="#">Add Slider</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#banner"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Banner</span>
      </a>
      <div id="banner" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="#">Manage Banner</a>
            <a class="collapse-item " href="#">Add Banner</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Product</span>
      </a>
      <div id="product" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="#">Manage Product</a>
            <a class="collapse-item " href="#">Add Product</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Setting</span>
      </a>
      <div id="setting" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="#">Manage Setting</a>
            <a class="collapse-item " href="#">Manage Seo</a>
         </div>
      </div>
   </li>
</ul>
<!-- End of Sidebar -->
