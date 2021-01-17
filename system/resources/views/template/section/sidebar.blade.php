@php
 function checkRouteActive($route){
 if(Route::current()->uri == $route) return 'active';
}
@endphp

<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{checkRouteActive('admin/dashboard')}}">
            <a href="{{url('admin/dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{checkRouteActive('admin/kategori')}}">
            <a href="{{url('admin/kategori')}}">
              <i class="fa fa-bars"></i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="{{checkRouteActive('admin/makanan')}}">
            <a href="{{url('admin/makanan')}}">
              <i class="fa fa-cutlery"></i>
              <p>Makanan</p>
            </a>
          </li>
          <li class="{{checkRouteActive('admin/user')}}">
            <a href="{{url('admin/user')}}">
              <i class="fa fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <li class="{{checkRouteActive('admin/promosi')}}">
            <a href="{{url('admin/promosi')}}">
              <i class="fa fa-film"></i>
              <p>Promosi</p>
            </a>
          </li>
          
        </ul>
      </div>