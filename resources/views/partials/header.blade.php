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
      <a class="navbar-brand" href="#">Opleiding Informatica</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Competentie matrices <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='/allcompetentiematrices'>Overzicht alle modules</a></li>
            <li><a href='/competentiematrix/prop'>Eindniveau Propedeuse</a></li>
            <li><a href='/competentiematrix/se'>Eindniveau Software Engineering</a></li>
            <li><a href='/competentiematrix/medt')}}'>Eindniveau Mediatechnologie</a></li>
            <li><a href='/competentiematrix/bdam'>Eindniveau Business Data Management</a></li>
            <li><a href='/competentiematrix/fict'>Eindniveau Forensische ICT</a></li>
            <li><a href='/dashboard'>Dashboard</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="zoekModule" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
          <input type="text" name="searchModule" class="form-control" placeholder="zoek module">
        </div>
        <button type="submit" class="btn btn-default">Zoek Module</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beheren<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/viewModules">Modules</a></li>
            <li><a href="#">Gebruikers</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <span class="logo-lg"><img src="/image/hsleiden_logo2.png" class="img-responsive" ></span>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
