<div class="contentwrap clearfix">
    <h1 class="general">Log in</h1>

    <form class="otherform" method='POST' action='/users/p_login'>

        <label for="email">Email</label>
        <input type='text' name='email'>

        <label for="password">Password</label>
        <input type='password' name='password'>

        <br><br>

        <input type='submit' value='Log in'>

        <?php if(isset($error)): ?>
            <p class='error'>
                Login failed. Please double check your email and password.
            </p>
            <br>
        <?php endif; ?>

    </form>
</div>