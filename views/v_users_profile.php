<div class="contentwrap clearfix">
    
    <h1 class="general"><h1>Profile</h1>
    <p class="bleat">Full name: <?=$user->first_name?>&nbsp;<?=$user->last_name?></p>
    <p>Email address:&nbsp;<?=$user->email?></p>
    <br><br>
	    <?php if ($user->image == '@#$%^&.jpg'): ?>
			<p>Share a little more about yourself!</p>
		<?php endif; ?>
    <br>

    <img src="/uploads/avatars/<?= $user->image ?>" alt="<?=$user->first_name?>''s profile image' ">                 
    <form method='POST' enctype="multipart/form-data" action='/users/p_profile/'>

		<label for="file">Profile Picture</label>
		<input type='file' name='image'>
		<input type='submit'>

	<form>
	
</div>

