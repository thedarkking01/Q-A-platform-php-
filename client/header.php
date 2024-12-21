<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="./public/logo.png" />
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        
        <!-- When logged in, show these links -->
        <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout (Username)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?u-id=123">My Questions</a>
        </li>

        <!-- When logged out, show these links -->
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" action="">
      <input class="form-control me-2" name="search" type="search" placeholder="Search questions">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>