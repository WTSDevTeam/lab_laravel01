<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{URL::to('/kook/home')}}">BBMY Digital Marketing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/kook/home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/kook/product')}}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/kook/customer')}}">Customer</a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>


<!-- <div id='' class=''>
<a href="{{URL::to('/kook/home')}}">home</a>
<a href="{{URL::to('/kook/about')}}">about</a>
<a href="{{URL::to('/kook/contact')}}">contact</a>
<a href="{{URL::to('/kook/product')}}">สินค้า</a>
<a href="{{URL::to('/kook/customer')}}">ลูกค้า</a>
</div> -->