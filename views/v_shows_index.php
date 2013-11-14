<?php foreach($shows as $show): ?>
	<div class="posts_box">
	<p>
	<h1 class="posts_index"><?=$show['show_date']?>: <span class="post_user"><?=$show['host_dj_name']?> </span>
   <?php if($show['guest_dj_name']):?>with <?=$show['guest_dj_name']?><?php endif;?> on <?=$show['station_id']?></h1>
	</div>
</article>
<?php endforeach; ?>

