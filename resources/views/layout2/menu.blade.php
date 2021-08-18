<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">BBMY Digital Marketing</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/kook/home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/kook/product')}}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/kook/customer')}}">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">#</a>
      </li>
    </ul>
  </div>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/kook/home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('/kook/product')}}">product</a></li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/kook/home')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('/kook/customer')}}">Customer</a></li>
  </ol>
</nav>
</div>
