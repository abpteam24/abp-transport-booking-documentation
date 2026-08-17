<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_discount">
        <h3 class="abp_color_theme_gap_xs">✂️ Discount Configuration (Pro)</h3>
        <div class="_divider_xxs"></div>
        <label>
            The Discount Configuration system allows you to configure transport-specific Seasonal Discounts and Early Bird Discounts. You can define multiple date ranges and discount percentages for each discount type, giving you flexible control over promotional and advance-booking pricing.
        </label>
        <h6 class="abp">🌤️ Seasonal Discount</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Enable or disable Seasonal Discount for the transport</li>
            <li>👉 Define a start and end date for each seasonal discount period</li>
            <li>👉 Set the discount percentage for each seasonal date range</li>
            <li>👉 Add multiple seasonal date ranges when different periods require different discounts</li>
            <li>👉 Apply seasonal discounts specifically to the selected transport</li>
        </ul>
        <h6 class="abp">🐦 Early Bird Discount</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Enable or disable Early Bird Discount for the transport</li>
            <li>👉 Define a start and end date for each Early Bird discount period</li>
            <li>👉 Set the discount percentage for each Early Bird date range</li>
            <li>👉 Add multiple Early Bird date ranges when needed</li>
            <li>👉 Provide advance-booking discounts for eligible booking periods</li>
        </ul>
        <h6 class="abp">📅 Flexible Discount Periods</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Configure different discount percentages for different date ranges</li>
            <li>👉 Add multiple Seasonal Discount periods</li>
            <li>👉 Add multiple Early Bird Discount periods</li>
            <li>👉 Manage each discount period independently</li>
        </ul>
        <h6 class="abp">⚙️ Smart Discount Control</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Disable Seasonal Discount to exclude the transport from Seasonal Pricing</li>
            <li>👉 Disable Early Bird Discount to exclude the transport from Early Bird Pricing</li>
            <li>👉 Transport-level discount settings provide control over individual transport pricing</li>
            <li>👉 Global discount settings can be used when no transport-level discount is configured, if enabled</li>
        </ul>
        <h6 class="abp">🚀 Benefits</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Increase bookings with seasonal promotions</li>
            <li>👉 Encourage passengers to book in advance with Early Bird discounts</li>
            <li>👉 Support multiple promotional periods throughout the year</li>
            <li>👉 Maintain flexible discount control for each transport</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/post_discount.png">
            <img class="_img_control" src="#" alt="Discount Configuration Overview">
        </div>
    </div>
<?php
