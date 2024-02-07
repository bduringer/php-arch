<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP-Arch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user/create">Cadastro</a>
        </li>
      </ul>
    </div>
    <div class="d-flex gap-2">
        <?php if(logged()) {?>
          <div>Bem vindo, <?php echo user()->name; ?>!</div><a href="/logout">Logout</a>
        <?php } else {?>
          <div>Bem vindo, visitante!</div>
        <?php } ?>
  
    </div>
  </div>
</nav>