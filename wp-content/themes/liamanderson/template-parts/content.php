<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			$theId = get_the_ID();
			$categorieC=get_the_category();
			$cats = [];
			$catLen = count($categorieC);
			for($i = 0; $i < $catLen; $i++){
				$cats[$i] = $categorieC[$i]->name;
			}
			function getLangIndex($cats){
				$lang = [get_field('lang_list', 28)];
				for($i = 0; $i <= count($lang); $i++ ){
					if(array_search($lang[$i], $cats)){
						return array_search($lang[$i], $cats);
					}
				}
			}
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();

			} else {
				the_content( __( 'Continue reading', 'liamanderson' ) );
				if(array_search('Snippets', $cats) /*$categorieC[1]->name == "Snippets"*/){
					echo '<div class="code"><pre rel="'.$cats[getLangIndex($cats)].'" class="'.$cats[getLangIndex($cats)].'"><code class="language-'.$cats[getLangIndex($cats)].'">';
					echo get_field('code', $theId);
					echo '</code></pre></div>';
				}
				if(array_search('Projects', $cats) /*$categorieC[1]->name == "Projects"*/){
					echo '<div class="code"><pre rel="'.$cats[getLangIndex($cats)].'" class="'.$cats[getLangIndex($cats)].'"><code class="language-'.$cats[getLangIndex($cats)].'">';
					echo get_field('code', $theId);
					echo '</code></pre></div>';
					$rows = get_field('code_explanation');
					if( $rows ) {
    					foreach( $rows as $row ) {
        					echo get_sub_field('content');
							if(the_sub_field('code_part_cb')){
								$lang = get_sub_field("language");
								echo '<div class="code"><pre rel="'.$lang.'" class="'.$lang.'"><code class="language-'.$lang.'">';
								get_sub_field('code_part', $theId);
								echo '</code></pre></div>';
							}
	    				}
					}
				}
			}

			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'liamanderson' ) . '"><span class="label">' . __( 'Pages:', 'liamanderson' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		liamanderson_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}




	?>

</article><!-- .post -->
