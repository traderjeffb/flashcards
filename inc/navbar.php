<?php
include_once('../inc/header.php');
session_start();
?>

<nav class="navbar navbar-expand-md navbar-light fs-5 font-weight-bold text-black" style="background-color: #e3f2fd;">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active ">
          <a class="nav-link" href="../views/home.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../views/practice.php">Practice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../views/create.php">Create</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            hjkdsad
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href=""> Logout </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

