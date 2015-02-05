<?php
function add_page_create_artwork() {
	add_menu_page( __( 'Create Artwork' ), __( 'Create Artwork' ), 'manage_options', 'create_artwork', 'page_create_artwork');
}
function page_create_artwork(){?>
	<div class="peopleperinch">
		<h1>Create Artwork</h1>
		<p>Add the image height, width and pixels per inch below. Then select the pixel category which will be used to create the image. <br>
		Finish by clicking <strong>Create</strong></p>
		<form action="#" class="form">
			<div class="f-row cf">
				<label>Height</label>
				<input type="text">
			</div>
			<div class="f-row cf">
				<label>Width</label>
				<input type="text">
			</div>
			<div class="f-row cf">
				<label>Pixels per inch</label>
				<input type="text">
			</div>
			<div class="f-row cf">
				<label>Select Field</label>
				<select>
					<option value="Month of Birth: June">Month of Birth: June</option>
					<option value="Month of Birth: June">Month of Birth: June</option>
					<option value="Month of Birth: June">Month of Birth: June</option>
				</select>
			</div>
			<div class="h-submit">
				<input type="submit" value="Create">
			</div>
		</form>
	</div>
	<script>
		jQuery(function(){
			jQuery('.peopleperinch .form select').styler();
		});
	</script>
<?php }
function my_admin_theme_script(){
	wp_enqueue_script('custom_forms', get_template_directory_uri().'/js/jquery.formstyler.min.js');
}
add_action( 'admin_menu', 'add_page_create_artwork');
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('admin_enqueue_scripts', 'my_admin_theme_script');