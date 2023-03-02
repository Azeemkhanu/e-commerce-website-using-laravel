<?php
use App\Http\Controllers\productController;


$total=0;
if(Session::has('user')){
  $total=productController::cartItem();
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/product">Home</a></li>
      <li><a href="#">Order</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#"> Cart Item({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
        </li>
        @else
          <li><a href="/logins"> Login</a></li>
        @endif
      </ul>

    </ul>
  </div>
</nav>