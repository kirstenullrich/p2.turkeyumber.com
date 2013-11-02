<div class="contentwrap clearfix">
    <form class="otherform" method='POST' action='/users/p_signup'>

        <label for="first_name">First Name</label>
        <input type='text' name='first_name' required placeholder="Enter your first name">
        <br><br>

        <label for="last_name">Last Name</label>
        <input type='text' name='last_name'>
        <br><br>

        <label for="email">Email</label>
        <input type='text' name='email'>
        <br><br>

        <label for="password">Password</label>
        <input type='password' name='password'>
        <br><br>

        <input type='submit' value='Sign up'>

        <?php if(isset($missing)): ?>

            <div class='error'>
                Looks like you didn't fill out all the fields.
            </div>
            <br>
        <?php endif; ?>

    </form>
</div>
