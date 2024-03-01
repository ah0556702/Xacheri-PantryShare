<?php include "../includes/cdnlinks.php"; ?>
<?php include "navigation.php" ?>
<!-- LOGIN FORM -->
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<span><a href="register.php">Register</a></span>

<span><a href="passwordReset.php">Forget Password?</a></span>