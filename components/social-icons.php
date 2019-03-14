<?php
if ( have_rows( 'social_icons', 'options' ) ):
   while ( have_rows( 'social_icons', 'options' ) ) : the_row();
      if ( get_row_layout() == 'facebook' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-facebook" title="Official Facebook page"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'twitter' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-twitter" title="Official Twitter accounts"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'instagram' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-instagram" title="Official Instagram accounts" 
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'linkedin' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-linkedin" title="Official Linkedin profile"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'youtube' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-youtube" title="Official Youtube channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'yelp' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa fa-yelp" title="Official Yelp channel"
               target="_blank"></a>
      <?php endif;
   endwhile;
else :
   // no layouts found
endif;
?>