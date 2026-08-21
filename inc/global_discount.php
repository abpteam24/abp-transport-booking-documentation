<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abptb_global_discount">
		<h3 class="abp_color_theme_gap_xs">✂️ Global Discount Configuration (Pro)</h3>
		<div class="_divider_xxs"></div>
		<label>The Global Discount Configuration allows you to enable and manage Seasonal Discount and Early Bird Discount across the entire website. You can configure multiple date ranges and discount percentages for each discount type. The system first checks transport-level discount pricing, and if no transport-specific discount is configured, the applicable Global Discount can be used.</label>

		<table class="abp_fixed_text_left_mt">
			<tbody>
			<tr>
				<th class="_color_theme">Seasonal Discount?</th>
				<td colspan="3">Enable or disable the Global Seasonal Discount feature. Turn <strong class="abp_color_theme">ON</strong> to apply Seasonal Discounts across the website according to the configured date ranges and discount percentages, or turn <strong class="abp_color_theme">OFF</strong> to disable the global Seasonal Discount.</td>
			</tr>
			<tr>
				<th class="_color_theme">Seasonal Date Range</th>
				<td colspan="3">Define the start date and end date for each Seasonal Discount period. You can configure different discount percentages for different date ranges.</td>
			</tr>
			<tr>
				<th class="_color_theme">Seasonal Discount Percentage</th>
				<td colspan="3">Enter the discount percentage that should be applied during the configured Seasonal Discount date range.</td>
			</tr>
			<tr>
				<th class="_color_theme">Add New Seasonal Date Range</th>
				<td colspan="3">Click <strong>Add New Seasonal Date Range</strong> to create an additional Seasonal Discount period with its own start date, end date, and discount percentage.</td>
			</tr>
			<tr>
				<th class="_color_theme">Early Bird Discount?</th>
				<td colspan="3">Enable or disable the Global Early Bird Discount feature. Turn <strong class="abp_color_theme">ON</strong> to apply Early Bird Discounts across the website according to the configured date ranges and discount percentages, or turn <strong class="abp_color_theme">OFF</strong> to disable the global Early Bird Discount.</td>
			</tr>
			<tr>
				<th class="_color_theme">Early Bird Date Range</th>
				<td colspan="3">Define the start date and end date for each Early Bird Discount period. This allows you to configure advance-booking promotional periods according to your pricing requirements.</td>
			</tr>
			<tr>
				<th class="_color_theme">Early Bird Discount Percentage</th>
				<td colspan="3">Enter the discount percentage that should be applied during the configured Early Bird Discount date range.</td>
			</tr>
			<tr>
				<th class="_color_theme">Add New Early Bird Date Range</th>
				<td colspan="3">Click <strong>Add New Early Bird Date Range</strong> to create an additional Early Bird Discount period with its own start date, end date, and discount percentage.</td>
			</tr>
			<tr>
				<th class="_color_theme">Discount Priority</th>
				<td colspan="3">The system checks transport-level Seasonal Pricing and Early Bird Pricing first. If no transport-specific discount pricing is configured, the applicable Global Discount can be used according to the configured global rules.</td>
			</tr>
			<tr>
				<th class="_color_theme">Save Global Discount</th>
				<td colspan="3">Click <strong>Save Global Discount</strong> to save the configured Seasonal Discount and Early Bird Discount settings and their respective date ranges.</td>
			</tr>
			</tbody>
		</table>

		<div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/discount_global.png"><img class="_img_control" src="#" alt="Global Discount Configuration"></div>
	</div>
<?php
