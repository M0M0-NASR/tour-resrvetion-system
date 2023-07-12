<?php View::load("Inc/header");
?>
<div class="container">
    <form action="<?php url("admin/login"); ?>" method="POST" class="login">
        <h2>Login</h2>
        <?php if (isset($success)) echo "<h3>". $success ."</h3>"  ?>
        <input name="username" type="text" placeholder="Email" maxlength="30" />
        <input name="pass" type="password" placeholder="Password" maxlength="30" />
        <a href="">forget password?</a>
        <div class="buttons">
            <button name="sign">Sign in</button>
            <a href="" >Register</a>
        </div>
    </form>
</div>

