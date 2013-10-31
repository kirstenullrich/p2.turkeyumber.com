<div class="contentwrap clearfix">

    <?php foreach($posts as $post): ?>

    <article  class="bleat">

        <h1 class="bleat"><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

        <p class="bleat"><?=$post['content']?></p>

        <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>"  class="bleat">
            <?=Time::display($post['created'])?>
        </time>
         <aside class="baa-left"><a href="/posts/baa/<?=$post['post_id']?>"><?=$post['likes']?> Baa</a></aside>

      

        <aside class="baa-right">Revoke baa</aside>
    </article>

    <?php endforeach; ?>

</div>