<?php
/**
 * Template Part, multiple page navigation.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<nav class="postpagenav">
	<div class="clearfix"></div>
	<?php
	the_posts_pagination(
		array(
			'mid_size'  => 3,
			'prev_text' => '<i class="fa fa-hand-o-left"></i>',
			'next_text' => '<i class="fa fa-hand-o-right"></i>',
		)
	);
	?>
	<br/>
</nav>

