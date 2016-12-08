<?php if( !empty($instance['images']) ) : ?>
	<div class="sow-simple-gallery-wrapper clearfix <?= 'layout--' . $instance['display']['layout'] ?>">
		<?php
		foreach( $instance['images'] as $image ) {
			echo '<div class="sow-simple-gallery-image">';
			echo '<a href="javascript:void(0);" title="' . $image['title'] . '">';
			echo wp_get_attachment_image( $image['image'], $instance['display']['attachment_size'], false, array(
				'title' => $image['title']
			) );
			echo '</a>';
			echo '</div>';
		}
		?>
	</div>
<?php endif; ?>
