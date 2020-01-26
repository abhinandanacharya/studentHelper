<?php //include "cdn.php";?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">StudentHelper</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Papers Available For
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop">
          <a class="dropdown-item" href="index.php?page=bca">BCA</a>
          <a class="dropdown-item" href="index.php?page=msc">MSC</a>
          <a class="dropdown-item" href="#">BA</a>
          <a class="dropdown-item" href="#">BBA</a>
          <a class="dropdown-item" href="#">BFA</a>
          <a class="dropdown-item" href="index.php?page=mca">MCA</a>
          <a class="dropdown-item" href="#">MCOM</a>
          <a class="dropdown-item" href="#">MBA</a>
        </div>
      </li>
     <!--  <?php //if (isset($_SESSION['admin_id'])) {
      
       ?>
      <li><a href="">Back To Admin</a></li>
    <?php //}?> -->
    </ul>
  </div>
</nav>