<?php
function add_page_review_artwork() {
	add_menu_page( __( 'Review Artwork' ), __( 'Review Artwork' ), 'manage_options', 'review_artwork', 'page_review_artwork');
}
function page_review_artwork(){?>
	<div class="peopleperinch">
		<h1>Review Artwork</h1>
		<br>
		<div class="artwork-items">
			<div class="artwork-item">
				<div class="row-item">
					<ul class="dt">
						<li>Date: 28/03/2015</li>
						<li>Title/Size/Ppi/Field</li>
						<li>
							<a href="#" class="edit-artwork">Edit Artwork Information</a>
						</li>
						<li>
							<a href="#">Download Image</a>
						</li>
					</ul>
				</div>
				<form action="#">
					<div class="f-row cf">
						<label>Title</label>
						<input type="text" value="Year of birth 1999">
					</div>
					<div class="f-row cf">
						<label>Description</label>
						<textarea cols="30" rows="10">This artwork short description is here to tell the users about it.</textarea>
					</div>
					<div class="f-row cf">
						<input type="submit" value="Add/Update">
					</div>
				</form>
			</div>
			<div class="artwork-item">
				<div class="row-item">
					<ul class="dt">
						<li>Date: 28/03/2015</li>
						<li>Title/Size/Ppi/Field</li>
						<li>
							<a href="#" class="edit-artwork">Edit Artwork Information</a>
						</li>
						<li>
							<a href="#">Download Image</a>
						</li>
					</ul>
				</div>
				<form action="#">
					<div class="f-row cf">
						<label>Title</label>
						<input type="text" value="Year of birth 1999">
					</div>
					<div class="f-row cf">
						<label>Description</label>
						<textarea cols="30" rows="10">This artwork short description is here to tell the users about it.</textarea>
					</div>
					<div class="f-row cf">
						<input type="submit" value="Add/Update">
					</div>
				</form>
			</div>
			<div class="artwork-item">
				<div class="row-item">
					<ul class="dt">
						<li>Date: 28/03/2015</li>
						<li>Title/Size/Ppi/Field</li>
						<li>
							<a href="#" class="edit-artwork">Edit Artwork Information</a>
						</li>
						<li>
							<a href="#">Download Image</a>
						</li>
					</ul>
				</div>
				<form action="#">
					<div class="f-row cf">
						<label>Title</label>
						<input type="text" value="Year of birth 1999">
					</div>
					<div class="f-row cf">
						<label>Description</label>
						<textarea cols="30" rows="10">This artwork short description is here to tell the users about it.</textarea>
					</div>
					<div class="f-row cf">
						<input type="submit" value="Add/Update">
					</div>
				</form>
			</div>
			<div class="artwork-item">
				<div class="row-item">
					<ul class="dt">
						<li>Date: 28/03/2015</li>
						<li>Title/Size/Ppi/Field</li>
						<li>
							<a href="#" class="edit-artwork">Edit Artwork Information</a>
						</li>
						<li>
							<a href="#">Download Image</a>
						</li>
					</ul>
				</div>
				<form action="#">
					<div class="f-row cf">
						<label>Title</label>
						<input type="text" value="Year of birth 1999">
					</div>
					<div class="f-row cf">
						<label>Description</label>
						<textarea cols="30" rows="10">This artwork short description is here to tell the users about it.</textarea>
					</div>
					<div class="f-row cf">
						<input type="submit" value="Add/Update">
					</div>
				</form>
			</div>
			<div class="artwork-item">
				<div class="row-item">
					<ul class="dt">
						<li>Date: 28/03/2015</li>
						<li>Title/Size/Ppi/Field</li>
						<li>
							<a href="#" class="edit-artwork">Edit Artwork Information</a>
						</li>
						<li>
							<a href="#">Download Image</a>
						</li>
					</ul>
				</div>
				<form action="#">
					<div class="f-row cf">
						<label>Title</label>
						<input type="text" value="Year of birth 1999">
					</div>
					<div class="f-row cf">
						<label>Description</label>
						<textarea cols="30" rows="10">This artwork short description is here to tell the users about it.</textarea>
					</div>
					<div class="f-row cf">
						<input type="submit" value="Add/Update">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		jQuery(function(){
			jQuery('.peopleperinch .artwork-item .edit-artwork').click(function(){
				jQuery(this).parents('.artwork-item').toggleClass('active').find('form').slideToggle(300);
				return false;
			});
		});
	</script>
<?php }
add_action( 'admin_menu', 'add_page_review_artwork');
add_action('admin_enqueue_scripts', 'my_admin_theme_style');