<?php
include_once('../inc/header.php');
// include_once('../inc/dbh.php');
include_once('../inc/navbar.php');
?>



    <div class="container mt-5 col-3">
        <h1>Register</h1>
        <?php if(isset($_GET['msg'])): ?>
            <div class="alert alert-danger"><?=$_GET['msg']?></div>
        <?php endif; ?>
        <form action="../inc/newUser.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confim_password" class="form-label">Confirm Password</label>
                <input type="confirm_password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="../inc/newUser.php" class="btn btn-secondary">Login</a>
        </form>
    </div>
</body>
</html>
