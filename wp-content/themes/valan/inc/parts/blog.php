<?php 
    $blog = get_posts(
        array(
            "post_status" => "publish",
            "post_type" => "blog",
            "numberposts" => -1
        )
    );

    // echo '<pre>';
    // print_r($blog);
    // echo '</pre>';
    // die;
?>
<div class="windows-container">
    <?php $i = 1; ?>
    <?php foreach($blog as $blog_post): ?>
    <div class="window<?=$i?>">
        <a href="<?=get_field('url', $blog_post->ID)?>" target="_blank">
            <img src="<?=get_field('img', $blog_post->ID)?>" alt="Description" class="window-image">
            <p class="window-text"><?=$blog_post->post_content?></p>
        </a>
    </div>
    <?php $i++; endforeach; ?>
</div>
