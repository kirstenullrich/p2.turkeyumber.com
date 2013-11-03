<div class="contentwrap clearfix">

    <h1 class="general">Sign up</h1>
    <p>All fields are required.</p>

    <form class="otherform" method='POST' action='/users/p_signup'>

        <label for="first_name">First Name</label>
        <input type='text' name='first_name' required placeholder="Enter your first name">

        <label for="last_name">Last Name</label>
        <input type='text' name='last_name' required> 

        <label for="email">Email</label>
        <input type='text' name='email' required>

        <label for="password">Password</label>
        <input type='password' name='password' required>
        <br><br>

        <input type='submit' value='Sign up'>

        <?php if(isset($error) && $error == 'missing'): ?>
            <p class='error'>
                Looks like you didn't fill out all the fields. Please try again.<br>
            </p>
            <br>
        <?php endif; ?>

        <?php if(isset($error) && $error == 'dupemail'):?>
            <p class="error">
            This email address is aready in in use. Please choose another.
            </p>
            <br>
        <?php endif;?>

    </form>

</div>