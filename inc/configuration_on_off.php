<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abptb_on_off">
		<h2 class="abp_color_theme_gap_xs">⚙️ Transport Booking - Feature On/Off Configuration </h2>
		<div class="_divider"></div>
		<i class="_color_7_fs_label_mar_tb_d_block">Control individual Transport Booking features globally. Turn a feature <strong class="abp_color_theme">ON</strong> to enable it or <strong class="abp_color_theme">OFF</strong> to disable it from the website.</i>

		<table class="abp_fixed_text_left_mt">
			<tbody>
			<tr>
				<th class="_color_theme">Post SKU</th>
				<td colspan="3">Controls the Post SKU feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the SKU field and related SKU options throughout the website. When disabled, SKU will not be required or generated for posts.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Icon</th>
				<td colspan="3">Controls the Transport Icon feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to completely disable Transport Icon options and related settings from the website. The feature can be enabled again at any time.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Sub Title</th>
				<td colspan="3">Controls the Transport Sub Title feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Transport Sub Title field and its related options throughout the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Description</th>
				<td colspan="3">Controls the Transport Description feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Transport Description field and its related functionality across the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Organizer</th>
				<td colspan="3">Controls the Organizer feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to completely disable Organizer options and related settings from the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Capacity / Available Qty</th>
				<td colspan="3">Controls the display of transport capacity and available quantity. When enabled, capacity information can be managed and displayed individually for each transport.</td>
			</tr>
			<tr>
				<th class="_color_theme">Route Direction</th>
				<td colspan="3">Controls the Route Direction feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable route direction information across the frontend of the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Brand</th>
				<td colspan="3">Controls the Transport Brand feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable Brand options and related Brand fields throughout the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Feature</th>
				<td colspan="3">Controls the Transport Feature option. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Transport Feature field and its related options from the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Type</th>
				<td colspan="3">Controls the Transport Type feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Category, Transport Type, and related fields throughout the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Related Post</th>
				<td colspan="3">Controls the Related Posts feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable Related Posts completely so they are no longer displayed on transport details pages.</td>
			</tr>
			<tr>
				<th class="_color_theme">Features</th>
				<td colspan="3">Controls the Features option. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Features field and its related settings throughout the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Multiple Ticket Type</th>
				<td colspan="3">Controls the Multiple Ticket Type feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable multiple ticket types and their related settings across the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Seat Plan</th>
				<td colspan="3">Controls the Seat Plan feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable Seat Plan functionality for all transports. You can enable it again at any time.</td>
			</tr>
			<tr>
				<th class="_color_theme">Transport Return</th>
				<td colspan="3">Controls the Transport Return feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable return transport functionality and related options. Turn it <strong class="abp_color_theme">ON</strong> to enable return transport again.</td>
			</tr>
			<tr>
				<th class="_color_theme">Min & Max Qty</th>
				<td colspan="3">Controls the minimum and maximum quantity feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable Transport Min & Max Quantity settings across the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Attendee Form</th>
				<td colspan="3">Controls the Attendee Form feature globally. Disable it to turn off the attendee form for all transports. Enable it to allow transport-specific attendee forms.</td>
			</tr>
			<tr>
				<th class="_color_theme">Same Attendee</th>
				<td colspan="3">Controls the Same Attendee feature globally. Disable it to turn off the feature for all transports. Enable it to allow the same attendee information to be used where applicable.</td>
			</tr>
			<tr>
				<th class="_color_theme">Multiple Pickup/Drop-Off Point</th>
				<td colspan="3">Controls the Multiple Pickup/Drop-Off feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable multiple pickup and drop-off points and their related settings across the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Additional Services</th>
				<td colspan="3">Controls the Additional Services feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable additional services and their related settings throughout the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Term & Conditions</th>
				<td colspan="3">Controls the Terms & Conditions feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the Terms & Conditions field and related options from the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">FAQ</th>
				<td colspan="3">Controls the FAQ feature. Turn this switch <strong class="abp_color_theme">OFF</strong> to disable the FAQ feature and remove its related options from the website.</td>
			</tr>
			<tr>
				<th class="_color_theme">Seasonal Discount</th>
				<td colspan="3">Controls Seasonal Pricing for individual transports. When enabled, seasonal pricing rules can be configured for each transport and applied according to their assigned date ranges.</td>
			</tr>
			<tr>
				<th class="_color_theme">Global Seasonal Discount</th>
				<td colspan="3">Controls the Global Seasonal Discount feature. When enabled, a global seasonal discount rule can be applied across the website according to the configured hierarchy and rule settings. Turn it <strong class="abp_color_theme">OFF</strong> to disable global seasonal discounts site-wide.</td>
			</tr>
			<tr>
				<th class="_color_theme">Early Bird Discount</th>
				<td colspan="3">Controls Early Bird Pricing for individual transports. When enabled, customers who book a ticket a specified number of days in advance can automatically receive discounts based on the configured Early Bird pricing rules.</td>
			</tr>
			<tr>
				<th class="_color_theme">Global Early Bird Discount</th>
				<td colspan="3">Controls the Global Early Bird Discount feature. When enabled, a global early bird discount rule can be applied across the website according to the configured pricing hierarchy and rules.</td>
			</tr>
			<tr>
				<th class="_color_theme">QR Code ?</th>
				<td colspan="3">Controls the QR Code feature for PDF Tickets. Turn this switch <strong class="abp_color_theme">ON</strong> to enable QR Code generation for PDF tickets, or turn it <strong class="abp_color_theme">OFF</strong> to disable QR Codes site-wide.</td>
			</tr>
			</tbody>
		</table>

		<div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/on_off.png"><img class="_img_control" src="#" alt="Transport Booking Feature On Off Configuration"></div>
	</div>
<?php
