<style type="text/css">
  nav *
  {
    padding-left: 4%;
  }
  @media(min-width: 769px)
  {
    #homebrand
    {
      margin-left: 100px;
    }
  }
</style>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark success-color-dark">

  <!-- Navbar brand -->
 <a class="navbar-brand" href="#"><img src="../img/phar.png" class="rounded-circle" style="width: 50px;height: 50px;"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" id="homebrand" >
        <a class="nav-link" href="#" style="width: 100px;"><i class="fas fa-home"></i>&nbsp;Accueil   
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <!-- Dropdown 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
      -->
      <li>  
            <a class="nav-link" onclick="ShowM();" href="#" style="color: white;margin-left: 150px;width: 120px;"><i class="fas fa-user"></i>&nbsp;Connexion
      </li>
    </ul>
    <!-- Links 

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  Collapsible content -->

</nav>
<!--/.Navbar-->