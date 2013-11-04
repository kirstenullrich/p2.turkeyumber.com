<div class="contentwrap clearfix">

    <?php if (!empty($posts)): ?>

        <?php foreach($posts as $post): ?>

        <article class="bleat">

            <img class="bleat" src="uploads/avatars/<?=$post['image']?>" height="75px" width="75px"></mg>

            <h1 class="bleat"><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

            <p class="bleat"><?=$post['content']?></p>

            <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>" class="bleat">
                <?=Time::display($post['created'])?>
            </time>
            
                <?php if(isset($like[$post['post_id']])): ?>
                    <aside class="baa-left">You baa this</aside>
                    <aside class="baa-right"><a href="/posts/unbaa/<?=$post['post_id']?>">Revoke baa</a></aside>

                <?php else: ?>
                    <aside class="baa-right"><a href="/posts/baa/<?=$post['post_id']?>">Baa this!</a></aside>
                <?php endif; ?>

              </article>

        <?php endforeach; ?>

    <?php else: ?>

        <p class="center">You're a flock of one - that's no fun! Go to the <a href="/posts/users/">Flock List</a> and follow some of the other sheep.</p>
        <p class="center invisible">Geez, what a goofball.</p>

    <?php endif; ?>

</div>