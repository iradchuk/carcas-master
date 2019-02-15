<?php
if ( have_rows( 'social_icons', 'options' ) ):
   while ( have_rows( 'social_icons', 'options' ) ) : the_row();
      if ( get_row_layout() == 'facebook' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="i-fac" title="Official Facebook page"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'twitter' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="i-twi" title="Official Twitter accounts"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'instagram' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="i-ins" title="Official Instagram accounts" 
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'linkedin' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="i-lin" title="Official Linkedin profile"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'youtube' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="i-youtube-alt" title="Official Youtube channel"
               target="_blank"></a>
      <?php endif;
   endwhile;
else :
   // no layouts found
endif;
?>