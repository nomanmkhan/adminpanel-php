<?php   require_once('includes/header.php'); ?>

<div class="col-md-4 col-md-offset-3">

    <form id="login-id" action="process.php" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off">
        </div>


        <div class="form-group">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </div>
    </form>


</div>