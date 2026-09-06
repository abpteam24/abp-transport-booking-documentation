<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
	<div class="abtb_doc_panel" data-tabs="#abptb_on_off">
		<div class="abtb_doc_page_head">
			<h2>⚙️ Feature On/Off Configuration</h2>
			<p class="abtb_doc_lede">
				The <strong>On/Off</strong> tab lets you control individual Transport Booking features globally. Turn a feature
				<strong>ON</strong> to enable it or <strong>OFF</strong> to disable it site-wide.
			</p>
		</div>

		<h3>🔄 Overview</h3>
		<p class="abtb_doc_section_intro">
			Transport Booking includes a wide range of features that can be independently enabled or disabled from a single
			control panel. Disabling a feature hides its fields, settings, and frontend output without affecting other
			functionality. Every toggle can be re-enabled at any time.
		</p>

		<h3>📝 Feature Toggles</h3>
		<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Post SKU</strong></td>
					<td>Controls the Post SKU feature. Turn <strong>OFF</strong> to disable the SKU field and related SKU options throughout the website. When disabled, SKU will not be required or generated for posts.</td>
				</tr>
				<tr>
					<td><strong>Transport Icon</strong></td>
					<td>Controls the Transport Icon feature. Turn <strong>OFF</strong> to completely disable Transport Icon options and related settings from the website.</td>
				</tr>
				<tr>
					<td><strong>Transport Sub Title</strong></td>
					<td>Controls the Transport Sub Title feature. Turn <strong>OFF</strong> to disable the Transport Sub Title field and its related options throughout the website.</td>
				</tr>
				<tr>
					<td><strong>Transport Description</strong></td>
					<td>Controls the Transport Description feature. Turn <strong>OFF</strong> to disable the Transport Description field and its related functionality across the website.</td>
				</tr>
				<tr>
					<td><strong>Organizer</strong></td>
					<td>Controls the Organizer feature. Turn <strong>OFF</strong> to completely disable Organizer options and related settings from the website.</td>
				</tr>
				<tr>
					<td><strong>Capacity / Available Qty</strong></td>
					<td>Controls the display of transport capacity and available quantity. When enabled, capacity information can be managed and displayed individually for each transport.</td>
				</tr>
				<tr>
					<td><strong>Route Direction</strong></td>
					<td>Controls the Route Direction feature. Turn <strong>OFF</strong> to disable route direction information across the frontend of the website.</td>
				</tr>
				<tr>
					<td><strong>Brand</strong></td>
					<td>Controls the Transport Brand feature. Turn <strong>OFF</strong> to disable Brand options and related Brand fields throughout the website.</td>
				</tr>
				<tr>
					<td><strong>Feature</strong></td>
					<td>Controls the Transport Feature option. Turn <strong>OFF</strong> to disable the Transport Feature field and its related options from the website.</td>
				</tr>
				<tr>
					<td><strong>Transport Type</strong></td>
					<td>Controls the Transport Type feature. Turn <strong>OFF</strong> to disable the Category, Transport Type, and related fields throughout the website.</td>
				</tr>
				<tr>
					<td><strong>Related Post</strong></td>
					<td>Controls the Related Posts feature. Turn <strong>OFF</strong> to disable Related Posts so they are no longer displayed on transport details pages.</td>
				</tr>
				<tr>
					<td><strong>Features</strong></td>
					<td>Controls the Features option. Turn <strong>OFF</strong> to disable the Features field and its related settings throughout the website.</td>
				</tr>
				<tr>
					<td><strong>Multiple Ticket Type</strong></td>
					<td>Controls the Multiple Ticket Type feature. Turn <strong>OFF</strong> to disable multiple ticket types and their related settings across the website.</td>
				</tr>
				<tr>
					<td><strong>Seat Plan</strong></td>
					<td>Controls the Seat Plan feature. Turn <strong>OFF</strong> to disable Seat Plan functionality for all transports. You can re-enable it at any time.</td>
				</tr>
				<tr>
					<td><strong>Transport Return</strong></td>
					<td>Controls the Transport Return feature. Turn <strong>OFF</strong> to disable return transport functionality and related options. Turn <strong>ON</strong> to enable return transport again.</td>
				</tr>
				<tr>
					<td><strong>Min & Max Qty</strong></td>
					<td>Controls the minimum and maximum quantity feature. Turn <strong>OFF</strong> to disable Transport Min &amp; Max Quantity settings across the website.</td>
				</tr>
				<tr>
					<td><strong>Attendee Form</strong></td>
					<td>Controls the Attendee Form feature globally. Disable it to turn off the attendee form for all transports. Enable it to allow transport-specific attendee forms.</td>
				</tr>
				<tr>
					<td><strong>Same Attendee</strong></td>
					<td>Controls the Same Attendee feature globally. Disable it to turn off the feature for all transports. Enable it to allow the same attendee information to be reused where applicable.</td>
				</tr>
				<tr>
					<td><strong>Multiple Pickup/Drop-Off Point</strong></td>
					<td>Controls the Multiple Pickup/Drop-Off feature. Turn <strong>OFF</strong> to disable multiple pickup and drop-off points and their related settings across the website.</td>
				</tr>
				<tr>
					<td><strong>Additional Services</strong></td>
					<td>Controls the Additional Services feature. Turn <strong>OFF</strong> to disable additional services and their related settings throughout the website.</td>
				</tr>
				<tr>
					<td><strong>Term &amp; Conditions</strong></td>
					<td>Controls the Terms &amp; Conditions feature. Turn <strong>OFF</strong> to disable the Terms &amp; Conditions field and related options from the website.</td>
				</tr>
				<tr>
					<td><strong>FAQ</strong></td>
					<td>Controls the FAQ feature. Turn <strong>OFF</strong> to disable the FAQ feature and remove its related options from the website.</td>
				</tr>
				<tr>
					<td><strong>Seasonal Discount</strong></td>
					<td>Controls Seasonal Pricing for individual transports. When enabled, seasonal pricing rules can be configured for each transport and applied according to their assigned date ranges.</td>
				</tr>
				<tr>
					<td><strong>Global Seasonal Discount</strong></td>
					<td>Controls the Global Seasonal Discount feature. When enabled, a global seasonal discount rule can be applied across the website according to the configured hierarchy and rule settings. Turn <strong>OFF</strong> to disable global seasonal discounts site-wide.</td>
				</tr>
				<tr>
					<td><strong>Early Bird Discount</strong></td>
					<td>Controls Early Bird Pricing for individual transports. When enabled, customers who book a specified number of days in advance can automatically receive discounts based on the configured Early Bird pricing rules.</td>
				</tr>
				<tr>
					<td><strong>Global Early Bird Discount</strong></td>
					<td>Controls the Global Early Bird Discount feature. When enabled, a global early bird discount rule can be applied across the website according to the configured pricing hierarchy and rules.</td>
				</tr>
				<tr>
					<td><strong>QR Code</strong></td>
					<td>Controls the QR Code feature for PDF Tickets. Turn <strong>ON</strong> to enable QR Code generation for PDF tickets, or turn <strong>OFF</strong> to disable QR Codes site-wide.</td>
				</tr>
			</tbody>
		</table>

		<div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/on_off.png"><img class="abtb_doc_screen_img" src="#" alt="Transport Booking Feature On Off Configuration"></div>
	</div>
<?php
