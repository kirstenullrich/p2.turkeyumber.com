<div class="contentwrap clearfix">
    <form method='POST' action='/users/p_signup'>

        First Name<br>
        <input type='text' name='first_name' required placeholder="Enter your first name">
        <br><br>

        Last Name<br>
        <input type='text' name='last_name'>
        <br><br>

        Email<br>
        <input type='text' name='email'>
        <br><br>

        Password<br>
        <input type='password' name='password'>
        <br><br>

        Profile Picture<br>
        <input type='file' name='image'>
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
