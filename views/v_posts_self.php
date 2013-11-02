<div class="contentwrap clearfix">

    <?php foreach($posts as $post): ?>

    <article  class="bleat">

        <img class="bleat" src="/uploads/avatars/<?=$user->image?>" height="75px" width="75px"></mg>

        <h1 class="bleat"><?=$user->first_name?> <?=$user->last_name?> posted:</h1>

        <p class="bleat"><?=$post['content']?></p>

        <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>"  class="bleat">
            <?=Time::display($post['created'])?>
        </time>

    </article>

    <?php endforeach; ?>

</div>