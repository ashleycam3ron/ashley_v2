<small class="minnow">
<?php if( has_term('minnow', 'post_tag' ) && has_term('design', 'post_tag') && has_term('code','post_tag')){
		echo "designed &amp; developed at the minnow project";
	} elseif ( has_term('minnow', 'post_tag') && has_term('design', 'post_tag') ){
		echo "designed at the minnow project";
	} elseif ( has_term('minnow', 'post_tag' ) && has_term('code', 'post_tag')){
		echo "developed at the minnow project";
	} ?>
</small>