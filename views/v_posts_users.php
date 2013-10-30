<div class="contentwrap clearfix">
    
    <h1 class="flock-list">Toggle button to follow or unfollow</h1>

    <?php foreach($users as $user): ?>

        <!-- Print this user's name -->
        <p class="flock-list"><?=$user['first_name']?> <?=$user['last_name']?>

            <!-- If there exists a connection with this user, show a unfollow link -->
            <?php if(isset($connections[$user['user_id']])): ?>
                <a class="flock-list following" href='/posts/unfollow/<?=$user['user_id']?>'>Following</a>

            <!-- Otherwise, show the follow link -->
            <?php else: ?>
                <a class="flock-list not-following" href='/posts/follow/<?=$user['user_id']?>'>Not Following</a>
            <?php endif; ?>

        </p>
        <br><br>

    <?php endforeach; ?>

</div>