<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('produto.index')}}">Maria Shop</a>
    </div>

      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{route('produto.shoppingCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Cart
            <span class="badge">
              {{Session::has('cart')? Session::get('cart')->getQtd() :''}}
            </span>
          </a>
        </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>