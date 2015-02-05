<?php
function add_page_add_new_fields() {
	add_menu_page( __( 'Add New Fields' ), __( 'Add New Fields' ), 'manage_options', 'add_new_fields', 'page_add_new_fields');
}
function page_add_new_fields(){?>
	<div class="peopleperinch">
		<h1>Add New Fields</h1>
		<p>Create new field options to allow users to add field informations for artworks</p>
		<br>
		<br>
		<form action="#" class="form">
			<div class="f-row cf">
				<label>Field Title</label>
				<input type="text">
			</div>
			<div class="f-row cf">
				<label>Field options</label>
				<input type="text">
			</div>
			<div class="f-row cf">
				<label>&nbsp;</label>
				<input type="text">
				<a href="#">+ ADD</a>
			</div>
			<div class="h-submit">
				<input type="submit" value="Create">
			</div>
		</form>
	</div>
<?php }
function my_admin_theme_style(){
	wp_enqueue_style('peopleperinch', get_template_directory_uri().'/style-admin.css');
}
add_action( 'admin_menu', 'add_page_add_new_fields');
add_action('admin_enqueue_scripts', 'my_admin_theme_style');