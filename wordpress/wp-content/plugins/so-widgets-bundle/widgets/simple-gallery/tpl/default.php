<?php if( !empty($instance['images']) ) : ?>
	<div class="sow-simple-gallery-wrapper clearfix <?= 'layout--' . $instance['display']['layout'] ?>">
		<?php
		foreach( $instance['images'] as $image ) {
			echo '<div class="sow-simple-gallery-image">';
			echo '<a class="figure" href="javascript:void(0);" title="' . $image['title'] . '">';
			echo wp_get_attachment_image( $image['image'], $instance['display']['attachment_size'], false, array(
				'title' => $image['title']
			) );
			echo '<span style="display: none;">' . wp_get_attachment_image( $image['image'], 'full' ) . '</span>';
			echo '</a>';
			echo '</div>';
		}
		?>
	</div>
<?php endif; ?>
