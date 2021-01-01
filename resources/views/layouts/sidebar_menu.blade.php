  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{asset('build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2></h2>
    </div>
  </div>

  <br />
  <!-- /menu profile quick info -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href=""><i class="fa fa-home"></i> Beranda </a>
      <li><a><i class="fa fa-dropbox"></i> Master <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('category.index')}}">Category</a></li>
          <li><a href="{{route('product.index')}}">Produk</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>


