<?php if (isset($loginError) && $loginError) { ?>
<div class="alert alert-danger">
        <strong>Error</strong> Invalid username or password, please try again.
</div>
<?php } ?>

<form class="form-signin" name="loginForm" id="loginForm" action="index.php?admin" method="POST">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="username" class="sr-only">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>