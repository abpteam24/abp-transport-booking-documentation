<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="abtb_doc_panel" data-tabs="#abptb_contact">
		<div class="abtb_doc_page_head">
			<h2>☎️ Contact Information Configuration</h2>
			<p class="abtb_doc_lede">
				The <strong>Contact</strong> tab is where you enter your company's contact details — name, address, phone
				number, and email address. These values are displayed on the frontend wherever contact information is shown.
			</p>
		</div>

		<h3>🔄 Overview</h3>
		<p class="abtb_doc_section_intro">
			Transport Booking pulls contact information from this panel to display on the frontend. Fill in each field
			with your company's current details so customers can reach you directly.
		</p>

		<h3>📝 Contact Fields</h3>
		<table>
			<thead>
				<tr>
					<th>Field</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Company Name</strong></td>
					<td>Enter the name of your company.</td>
				</tr>
				<tr>
					<td><strong>Address</strong></td>
					<td>Enter the full address of your company.</td>
				</tr>
				<tr>
					<td><strong>Contact Number</strong></td>
					<td>Enter your company's phone number.</td>
				</tr>
				<tr>
					<td><strong>E-mail</strong></td>
					<td>Enter your business email address.</td>
				</tr>
			</tbody>
		</table>

		<div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/contact_info.png"><img class="abtb_doc_screen_img" src="#" alt="Contact Information "></div>
	</div>
<?php
