<h2 style="display: none;"><?php the_title(); ?></h2>
						
						
<?php if( get_field('portfolio') ): ?>
	<ul class="grid effect-6" id="logos">
	<?php while( has_sub_field('portfolio') ):
$image = get_sub_field('image');
$image1 = get_field('image');
$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];

echo $image;
echo 'hey'.$image1;
 ?>
		<li><img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" /></li>
	<?php endwhile;?>
	</ul>
<?php endif;  ?>
	
	
	