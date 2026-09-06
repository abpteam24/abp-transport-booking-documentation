<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
	<div class="abtb_doc_panel" data-tabs="#abptb_global_discount">
		<div class="abtb_doc_page_head">
			<h2>✂️ Global Discount Configuration (PRO)</h2>
			<p class="abtb_doc_lede">
				The <strong>Global Discount Configuration</strong> screen under the <em>Global Data</em> tab lets you
				enable and manage Seasonal Discount and Early Bird Discount rules across the entire website. When no
				transport-level discount pricing is configured, the applicable global discount is used automatically.
			</p>
		</div>

		<p class="abtb_doc_section_intro">
			You can define multiple date ranges and discount percentages for each discount type. The system first checks
			transport-level discount pricing; if no transport-specific discount is found, it falls back to the global
			rules configured here.
		</p>

		<div class="abtb_doc_callout abtb_doc_callout_note">
			<strong>ℹ️ PRO feature</strong>
			Global discount configuration is available only with Transport Booking Pro. The basic plugin does not include
			discount functionality.
		</div>

		<h3>🌦️ Seasonal Discount</h3>
		<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Seasonal Discount?</strong></td>
					<td>Enable or disable the Global Seasonal Discount feature. Turn <strong>ON</strong> to apply seasonal discounts across the website according to the configured date ranges, or turn <strong>OFF</strong> to disable it.</td>
				</tr>
				<tr>
					<td><strong>Seasonal Date Range</strong></td>
					<td>Define the start date and end date for each seasonal discount period. You can configure different discount percentages for different date ranges.</td>
				</tr>
				<tr>
					<td><strong>Seasonal Discount Percentage</strong></td>
					<td>Enter the discount percentage applied during the configured seasonal date range.</td>
				</tr>
				<tr>
					<td><strong>Add New Seasonal Date Range</strong></td>
					<td>Click <strong>Add New Seasonal Date Range</strong> to create an additional seasonal period with its own start date, end date, and discount percentage.</td>
				</tr>
			</tbody>
		</table>

		<h3>🐦 Early Bird Discount</h3>
		<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Early Bird Discount?</strong></td>
					<td>Enable or disable the Global Early Bird Discount feature. Turn <strong>ON</strong> to apply early bird discounts across the website, or turn <strong>OFF</strong> to disable it.</td>
				</tr>
				<tr>
					<td><strong>Early Bird Date Range</strong></td>
					<td>Define the start date and end date for each early bird discount period. Use these to configure advance-booking promotional periods.</td>
				</tr>
				<tr>
					<td><strong>Early Bird Discount Percentage</strong></td>
					<td>Enter the discount percentage applied during the configured early bird date range.</td>
				</tr>
				<tr>
					<td><strong>Add New Early Bird Date Range</strong></td>
					<td>Click <strong>Add New Early Bird Date Range</strong> to create an additional early bird period with its own start date, end date, and discount percentage.</td>
				</tr>
			</tbody>
		</table>

		<h3>⬇️ Discount Priority</h3>
		<p class="abtb_doc_section_intro">
			The system checks transport-level Seasonal Pricing and Early Bird Pricing first. If no transport-specific
			discount is configured, the applicable global discount rules are applied.
		</p>

		<h3>💾 Saving the Configuration</h3>
		<p class="abtb_doc_section_intro">
			Click <strong>Save Global Discount</strong> to persist the configured Seasonal and Early Bird discount
			settings along with their date ranges.
		</p>

		<div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/discount_global.png"><img class="abtb_doc_screen_img" src="#" alt="Global Discount Configuration"></div>
	</div>
<?php
