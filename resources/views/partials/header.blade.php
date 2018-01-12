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
              {{Session::has('cart')? Session::get('cart')->qtd :''}}
            </span>
          </a>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"
              aria-hidden="true"></i>
                  Usuários <span class="caret"></span></a>
          <ul class="dropdown-menu">
              @if(Auth::check())
                    <li><a href="{{ route('user.profile')}}">Conta</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('user.logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('user.signup')}}">Cadastrar</a></li>
                    <li><a href="{{ route('user.signin')}}">Login</a></li>
              @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>