<?php include "../includes/cdnlinks.php"; include "navigation.php" ?>

<form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
    </div>
    <div class="row">
    <div class="col">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" required>
    </div>
    <div class="col">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" required>
    </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>