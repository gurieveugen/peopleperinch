<?php
function add_page_pixel_summary() {
	add_menu_page( __( 'Pixel Summary' ), __( 'Pixel Summary' ), 'manage_options', 'pixel_summary', 'page_pixel_summary');
}
function page_pixel_summary(){?>
	<div class="peopleperinch">
		<h1>Pixel Summary</h1><br>
		<h2>Total: 532</h2><br>
		<form action="#" class="form-total">
			<label>Search for totals :</label>
			<select class="select-custom">
				<option value="Month of Birth : Jun">Month of Birth : Jun</option>
				<option value="Month of Birth : Jun">Month of Birth : Jun</option>
				<option value="Month of Birth : Jun">Month of Birth : Jun</option>
			</select>
		</form>
		<p><strong>Totals per survey fields,</strong></p>
		<div class="block-list">
			<strong>Month of Birth</strong>
			<ul>
				<li>Jan: 33</li>
				<li>Feb: 12</li>
				<li>March: 3</li>
				<li>etc...</li>
			</ul>
		</div>
		<div class="block-list">
			<strong>Year of Birth</strong>
			<ul>
				<li>1900: 33</li>
				<li>1901: 12</li>
				<li>1902: 3</li>
				<li>etc...</li>
			</ul>
		</div>
	</div>
	<script>
		jQuery(function(){
			jQuery('.peopleperinch .select-custom').styler();
		});
	</script>
<?php }
add_action( 'admin_menu', 'add_page_pixel_summary');
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('admin_enqueue_scripts', 'my_admin_theme_script');