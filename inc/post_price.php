<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abptb_price">
		<h3 class="abp_color_theme_gap_xs">💲 Price Configuration</h3>
		<div class="_divider_xs"></div>
		<label>The Price Configuration section allows you to set ticket prices based on the selected route. You can configure separate prices for each From and To stop combination, including both forward and return routes when the transport supports return journeys.</label>
		<ul class="abp_list_margin_xs">
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 Forward Price:</strong> Configure ticket prices for each available From and To combination on the forward route.</li>
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 Return Price:</strong> Configure ticket prices for each available From and To combination on the return route when a return route is configured.</li>
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 From:</strong> Displays the starting stop for the selected price combination.</li>
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 To:</strong> Displays the destination stop for the selected price combination.</li>
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 Ticket:</strong> Set the ticket price for the selected From and To stop combination.</li>
			<li><strong class="_color_theme_gap_xs_text_nowrap">👉 Business Class:</strong> Set the price for the selected ticket type or class for the corresponding route combination.</li>
		</ul>
		<div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-24.png">
			<img class="_img_control" src="#" alt="Price Configuration Overview">
		</div>
	</div>
<?php
