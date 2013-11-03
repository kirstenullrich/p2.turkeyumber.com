<div class="contentwrap clearfix">

    <aside class="signup"><a href="/users/signup">Sign up</a></aside>

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
                Login failed! Please double check your email and password. <br>
                If you're new to Bleater <a href="/users/signup">sign up here</a> first.
            </p>
            <br>
        <?php endif; ?>

    </form>
</div>