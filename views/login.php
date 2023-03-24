<?php
include_once('../inc/header.php');
include_once('../inc/dbh.php');
?>
<!-- <h2>hello here on login</h2> -->



    <div class="container mt-5 col-3">
        <h1>Login</h1>
        <?php if(isset($_GET['msg'])): ?>
            <div class="alert alert-danger"><?=$_GET['msg']?></div>
        <?php endif; ?>
        <form action="../inc/loginUser.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php" class="btn btn-secondary">Register</a>
        </form>
    </div>

<!-- <h2>hello again</h2> -->