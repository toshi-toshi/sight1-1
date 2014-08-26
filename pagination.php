<?php if (get_option('paging_mode') == 'default'): ?>
	<div class="pagination">
		<?php previous_posts_link(__('Newer', 'sight')); ?>
		<?php next_posts_link(__('Older', 'sight')); ?>
		<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
	</div>
	<?php else: ?>
	<div id="pagination"><?php next_posts_link(__('LOAD MORE', 'sight')); ?></div>
<?php endif; ?>
