<?php 
    $notifications = get_posts(
        array(
            "post_status" => "publish",
            "post_type" => "notification",
            "numberposts" => -1
        )
    );

    /*echo '<pre>';
    print_r($notifications);
    echo '</pre>';
    die;*/
?>

<div class="notification-container">
    <?php $i = 1; ?>
    <?php foreach($notifications as $notification): ?>
    <div class="notification notification<?=$i?>">
        <a href="<?=get_field('url', $notification->ID)?>" target="_blank">
            <span class="vt-icon" style="background: url(<?=get_field('icon', $notification->ID)?>) center center / cover no-repeat;"></span>
            <span class="vt-body"><?=$notification->post_content?></span>
        </a>
    </div>
    <?php $i++; endforeach; ?>
</div>