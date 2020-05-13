<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
/*
Plugin Name: Disable Comments | WPZest
Plugin URI: http://www.wpzest.com/wordpress-plugins/
Description: This plug-in allows administrators to disable comments on any post type (Posts, Pages, Media). You can also enable/disable comments for particular post by clicking on "Star Icon"  under POST -> ALL POST.
Version: 1.51
Author: WPZest
Author URI: http://www.wpzest.com
License: GPL2
Text Domain: disable-comments-wpzest
*/

class Disable_Comments_WPZest {
	private static $instance = null;
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	private function __construct() {
		// load language files
		load_plugin_textdomain( 'disable-comments-wpzest', false, dirname( plugin_basename( __FILE__ ) ) .  '/languages' );
	}
}

Disable_Comments_WPZest::get_instance();

ob_start();

function wpz_admin_enqueue_style() {
    /** Register */
    wp_register_style('wpz-dc-css', plugins_url('css/style.css', __FILE__), array(), '1.50', 'all');
    wp_enqueue_style('wpz-dc-css');
  }

function wpz_admin_enqueue_script()
{
		wp_enqueue_script('wpz_dc_js', plugins_url('js/script.js', __FILE__) );
		wp_enqueue_script('wpz_dc_script', plugins_url('js/comments.js', __FILE__) );
	    wp_enqueue_script('wpz-jquery-script', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
}
function dcwpzest_menu() {
   
    $settings = add_options_page( 
        __( 'Disable Comments', 'textdomain' ),
        __( 'Disable Comments', 'textdomain' ),
        'manage_options',
        'books-shortcode-ref',
        'dc_settings_page'
    );

      add_action('admin_print_styles-' . $settings, 'wpz_admin_enqueue_style');
      add_action('admin_print_scripts-'. $settings, 'wpz_admin_enqueue_script');

}
add_action( 'admin_menu' , 'dcwpzest_menu' );

function dc_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/dc-wpzest.php' ) ) {
		$links[] = '<a href="' . get_bloginfo('url') . '/wp-admin/admin.php?page=Disable_Comments_WPZest">Settings</a>';;
	}
	return $links;
}

/**
 * Utility: Page Hook
 * The Settings Page Hook, it's the same with global $hook_suffix.
 * @since 0.1.0
 */
function Disable_Comments_WPZest_setings_page_id(){
	return 'toplevel_page_Disable_Comments_WPZest';
}

/**
 * Load Script Needed For Meta Box
 * @since 0.1.0
 */
function Disable_Comments_WPZest_enqueue_scripts( $hook_suffix ){
	$page_hook_id = Disable_Comments_WPZest_setings_page_id();
	if ( $hook_suffix == $page_hook_id ){
		wp_enqueue_script( 'common' );
		wp_enqueue_script( 'wp-lists' );
		wp_enqueue_script( 'postbox' );
	}
}

/**
 * Footer Script Needed for Meta Box:
 * - Meta Box Toggle.
 * - Spinner for Saving Option.
 * - Reset Settings Confirmation
 * @since 0.1.0
 */
function Disable_Comments_WPZest_footer_scripts(){
	$page_hook_id = Disable_Comments_WPZest_setings_page_id();
?>
<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready( function($) {
		// toggle
		$('.if-js-closed').removeClass('if-js-closed').addClass('closed');
		postboxes.add_postbox_toggles( '<?php echo $page_hook_id; ?>' );
	});
	//]]>
</script>
<?php
}

function dc_settings_page()
{	
	 /* global vars */
	global $hook_suffix;

	/* utility hook */
	do_action( 'Disable_Comments_WPZest_settings_page_init' );

	/* enable add_meta_boxes function in this page. */
	do_action( 'add_meta_boxes', $hook_suffix );
	
	?>

<script>
$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});

$(document).ready(function() {
    $('#selecctall_p').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox_p').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox_p').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
	
	$('input.example').on('change', function() {
    $('input.example').not(this).prop('checked', false);  
});
    
});

$(document).ready(function() {
    $('#selecctall_t').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox_t').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox_t').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
	

});

</script>
<?php
if (!empty($_POST))	
	{
				if ( $_POST['close'] )
					{
						$value=$_POST['disable'];
						global $wpdb;
						$bits = implode( ', ', $value );
						$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE ID IN ($bits)");
					}
				if($_POST['open'])
				{ 
					$value=$_POST['disable'];
					global $wpdb;
					$bits = implode( ', ', $value );
					$wpdb->query( "UPDATE $wpdb->posts SET comment_status = 'open' WHERE ID IN ($bits)");
				}			
				if ( $_POST['close_page'] ) 
					{
						$value=$_POST['p_disable'];
						global $wpdb;
						$bits = implode( ', ', $value );
						$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE ID IN ($bits)");
					}		
				if($_POST['open_page'])
				{
					$value=$_POST['p_disable'];
					global $wpdb;
					$bits = implode( ', ', $value );
					$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'open' WHERE ID IN ($bits)");
					
				}		
				if($_POST['submit']==Disable)	
				{	   
					global $wpdb;					
					$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE post_type='page' or  post_type='post' or  post_type='attachment'");						
				}	
				if($_POST['submit']==Enable)	
				{	
					global $wpdb;					
					$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'open' WHERE post_type='page' or  post_type='post' or  post_type='attachment'");						
				}				
	}
if ( isset( $_POST['close_certain'] ) )
	{
	           if($_POST['close_certain']==Disable){
				if($value=$_POST['all'])
				{   
					if($value=='')
					{
						echo 'ok';
					}
					foreach($value as $k=>$v)
					{   
						
						global $wpdb;
						switch($v)
						{
							case 'post':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE post_type='$v'");
							break;
							case 'page':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE post_type='$v'");
							break;
							case 'attachment':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'closed' WHERE post_type='$v'");
							break;
							default:
							echo '';
						}
					}
				}
			}
			if($_POST['close_certain']==Enable){
				if($value=$_POST['all'])
				{   
					if($value=='')
					{
						echo 'ok';
					}
					foreach($value as $k=>$v)
					{   
						
						global $wpdb;
						switch($v)
						{
							case 'post':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'open' WHERE post_type='$v'");
							break;
							case 'page':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'open' WHERE post_type='$v'");
							break;
							case 'attachment':
							$wpdb->query("UPDATE $wpdb->posts SET comment_status = 'open' WHERE post_type='$v'");
							break;
							default:
							echo '';
						}
					}
				}
			}							
        }
?>

<div class="wrap">
<h1 style="color:#000;margin-bottom:10px;"><?php _e( 'Disable / Enable Comments | WPZest' ) ?></h1>
<form action="" method="post" id="disable-comments">
			
					<div class="tabs tabs-style-topline">
							<nav>
                                <ul>
                                    <li><a href="#section-topline-1"><span><?php _e( 'Everywhere', 'disable-comments') ?></span></a></li>
                                    <li><a href="#section-topline-2"><span><?php _e( 'On Certain Pages', 'disable-comments') ?></span></a></li>
                                    <li><a href="#section-topline-3"><span><?php _e( 'Disable / Enable Post', 'disable-comments') ?></span></a></li>
                                    <li><a href="#section-topline-4"><span><?php _e( 'Disable / Enable Pages', 'disable-comments') ?></span></a></li>
                                                                        
                                </ul>
                            </nav>	


<div class="content-wrap">

<section id="section-topline-1">
	<ul class="indent">
		<?php
			$query = new WP_Query();
			$all_catsss = $query->get_posts();
			$disable_cat = get_option('st_disable_comments_post_cat');
			$argsp = array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'any', 'post_parent' => null ); 
			$attachments=get_posts($argsp);
			
			foreach ( $attachments as $post ) 
			{
					$checkedpage = "";
					if($post->comment_status=='open')
				{
					$checkedpage = 'checked';
				}
			}
			global $wpdb;
			if(empty($disable_cat))
			{ 
				$disable_cat = array();
			}
			foreach ( $all_catsss as $all_cat )
			{ 
				if(empty($disable_cat))
				{
					$disable_cat = 'open';
				}
				if($all_cat->post_type=='post')
				{		
					if($all_cat->comment_status=='open')
					{
						$checkedpost = 'checked';
						$msg = 'Comments Are Now Enable';
					}
				}
			}
				
			if($checkedpage && $checkedpost== 'checked')
			{   
				$everywhere='checked';
				
			} 
		?>
		<?php if($msg){ ?>
		 <div class="updated settings-error notice is-dismissible"><?php echo $msg; ?></div>
		 <?php } else{ ?>
		 <div class="updated settings-error notice is-dismissible"><?php _e('Comments Are Now Disable', 'disable-comments'); ?></div>
	 <?php	} ?>
		<li id="section-topline-1"><?php _e( 'Disable / Enable all comment-related controls and settings in WordPress', 'disable-comments') ?> </br></br>
		<label for="remove_everywhere"><input type="checkbox" id="remove_everywhere" class="example" name="mode" value="ok" <?php echo $everywhere; ?> /> <strong><?php _e( 'Everywhere', 'disable-comments') ?></strong></label>
			<p style="" class="indent"><?php printf( __( '%s '), '<strong style="color: #222;">' . __('', 'disable-comments') . '</strong>', 'http://www.wpzest.com/plugins/disable-comments/' ); ?></p>
			<br><br>	
			<input class="button-primary submit" type="submit" name="submit" value="<?php _e( 'Disable') ?>">
			<input class="button-primary submit" type="submit" name="submit" value="<?php _e( 'Enable') ?>">
		</li>
	</ul>
</section>


<section id="section-topline-2">
	<?php
		$query = new WP_Query();
		$all_catsss = $query->get_posts();
		$disable_cat = get_option('st_disable_comments_post_cat');
		$argsp = array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'any', 'post_parent' => null ); 
		$attachments=get_posts($argsp);
		foreach ( $attachments as $post )
		{
				$checkedpage = "";
				if($post->comment_status=='open')
			{
				$checkedpage = 'checked';
			}
		}
		$argsmedia = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => 'any', 'post_parent' => null ); 
		$media=get_posts($argsmedia);
		foreach ( $media as $att_media ) 
		{			
				$checkedmedia = "";
				if($att_media->comment_status=='open')
			{
				$checkedmedia = 'checked';
			}
		}
		global $wpdb;
		if(empty($disable_cat)){$disable_cat = array();}
		foreach ( $all_catsss as $all_cat )
		{
			
			$checkedpost = "";		
			$checkedattachment = "";

			if(empty($disable_cat))
			{
				$disable_cat = 'open';
			}
			if($all_cat->post_type=='post')
			{
				if($all_cat->comment_status=='open')
				{
					$checkedpost = 'checked';
				}
			}
		}
	?>
	<ul>
		<li><label for="selected_types">
			<input type="checkbox" id="selecctall_t" name="all[]" class="example checkbox_t" value="selected_types" /> 
				<strong style="color:#222 !important;"><?php _e('On Certain Post Types') ?></strong></label></li>
				
				<li>
					<label>
				
						<input class="checkbox_t" type="checkbox" name="all[]" value="post"<?php echo $checkedpost;?>>
							<?php _e('Post') ?>
					</label>
				</li>
				
				<li>
					<label>
						<input class="checkbox_t" type="checkbox" name="all[]" value="page"<?php echo $checkedpage;?>>
							<?php _e('Pages') ?>
					</label>
				</li>
				
				<li>
					<label>
						<input class="checkbox_t" type="checkbox" name="all[]" value="attachment"<?php echo $checkedmedia;?>>
							<?php _e('Media') ?>
					</label>
				</li>
				<br>
				<p>
					<?php _e( 'All comment-related fields will also be hidden from the edit/quick-edit screens of the affected posts.', 'disable-comments' ) ?>
				</p>
					<input class="button-primary submit" type="submit" name="close_certain" value="<?php _e( 'Disable' ) ?>">
					<input class="button-primary submit" type="submit" name="close_certain" value="<?php _e( 'Enable' ) ?>">
	         </ul>
    </section>
<section id="section-topline-3">
	<?php 
		$query = new WP_Query();
		$all_catsss = $query->get_posts();
		$checked = "";	
	 ?> 
	<label for="selected_types">
		<input type="checkbox" id="selecctall" name="disable[]"  class="example" value="0"
			        <?php 
						if($all_cat->comment_status=='open')
						{
							 $checked = 'checked';
							 echo $checked; 
						}
			           ?> />
	<strong style="color:#222 !important">
		<?php _e('Select All') ?>
		</strong></label>
	    <ul id="listoftypes" class="pagelist">	
		 <?php
			$q=array('post_type' => 'post');
			$all_catss = get_categories( array('type'=>'page','taxonomy' =>'category','hide_empty' => 0));
			$query = new WP_Query($all_catss);
			$all_catsss = $query->get_posts();
			$disable_cat = get_option('st_disable_comments_post_cat');
			global $wpdb;	
			if(empty($disable_cat))
			{
				$disable_cat = array();
			}
			foreach ( $all_catsss as $all_cat )
			{

				$checked = "";

				if(empty($disable_cat))
				{
					$disable_cat = 'open';
				}
				if($all_cat->comment_status=='open')
				{
					$checked = 'checked';
				}
		    ?>		
				<li>
					<label><input class="checkbox1" type="checkbox" name="disable[]" value="<?php echo $all_cat->ID;?>"<?php echo $checked;?>>
						<?php echo $all_cat->post_title;?> [<?php echo $all_cat->comment_status;?>]
						<?php 
							} 
						?>
					</label>
				</li>
	</ul>
		<input type="submit" name="close" id="submitbutton1" class="button-primary" value="<?php _e('Disable'); ?>" /> <label></label> 
		<input type="submit" name="open" id="option_submit" class="button-primary" value="<?php _e('Enable'); ?>" />
</section>

<section id="section-topline-4">
	<label for="selected_types">
		<input type="checkbox" class="example" id="selecctall_p"  name="p_disable[]" value="0" <?php 
				if($all_cat->comment_status=='open')
				{
					 $checked = 'checked';
					 echo $checked; 
				}
				?> /> 
 <strong style="color:#222 !important"><?php _e( 'Select All') ?></strong></label>
	<ul id="listoftypes" class="pagelist">
		<?php 
			global $wpdb;
			if(empty($disable_cat)){$disable_cat = array();}
			$result = $wpdb->get_results( "SELECT * FROM $wpdb->posts where post_type='page'");
			foreach($result as $row)
			{
				$checked = "";

				if(empty($disable_cat))
				{
					$disable_cat = 'open';
				}
				if($row->comment_status=='open')
				{
					$checked = 'checked';
				}			 
	    ?>
			
			<li>
				<label><input class="checkbox_p" type="checkbox" name="p_disable[]" value="<?php echo $row->ID;?>"<?php echo $checked;?>>
					<?php echo $row->post_title?> [<?php echo $row->comment_status;?>]
				</label>
			</li>
			
		<?php
			} 
		?>
	</ul>
			<input type="submit" name="close_page" id="option_submit2" class="button-primary" value="<?php _e('Disable'); ?>" /> 
			<input type="submit" name="open_page" id="option_submit" class="button-primary" value="<?php _e('Enable'); ?>" />	
</section>

<?php wp_nonce_field( 'disable-comments-admin' ); ?>
</div><!-- /content -->
</div><!-- /tabs -->
<script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });

        })();
</script>
    <!-- end tabs js -->
</form>
</div>
<?php
}
/* === EXAMPLE BASIC META BOX === */

/* Add Meta Box */
add_action( 'add_meta_boxes', 'Disable_Comments_WPZest_basic_add_meta_box' );

/**
 * Basic Meta Box
 * @since 0.1.0
 * @link http://codex.wordpress.org/Function_Reference/add_meta_box
 */
function Disable_Comments_WPZest_basic_add_meta_box(){

	$page_hook_id = Disable_Comments_WPZest_setings_page_id();

	add_meta_box(
		'basic',                  /* Meta Box ID */
		'Custom Admin Login Styler',               /* Title */
		'Disable_Comments_WPZest_basic_meta_box',  /* Function Callback */
		$page_hook_id,               /* Screen: Our Settings Page */
		'normal',                 /* Context */
		'default'                 /* Priority */
	);
}

/**
 * Submit Meta Box Callback
 * @since 0.1.0
 */
function Disable_Comments_WPZest_basic_meta_box(){
?>
Use Our Advance and Easy to use <b style="font-size: 14px; !important"> 'Custom Admin Login | WPZest' </b> plugin. For customizing 'Admin Login Page'&nbsp;<a href="https://wordpress.org/plugins/custom-admin-login-styler-wpzest/" target="_blank">Click Here</a>&nbsp;to download plugin. 	 
<?php
}
?>
