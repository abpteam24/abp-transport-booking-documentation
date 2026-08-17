<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_route">
        <h3 class="abp_color_theme_gap_xs"><span class="fas fa-route"></span> Route Configuration</h3>
        <div class="_divider_xs"></div>
        <label>The Route Configuration section allows you to configure the complete journey of a transport by selecting stops, defining stop types, setting travel times, and controlling pickup and drop-off availability. You can also create separate forward and return routes when the transport supports return journeys.</label>
        <ul class="abp_list_margin_xs">
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Same Transport Return ON/OFF:</strong> Enable this option when the same transport is used for both forward and return journeys. This allows you to configure a return route for the same transport.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Stops:</strong> Add new stops directly from the route configuration section without leaving the Transport Details Page.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Forward Route Configuration:</strong> Configure the main journey route by selecting the required stops and arranging them in the correct travel order.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Return Route Configuration:</strong> Configure the return journey route when Same Transport Return is enabled. You can select and arrange the stops according to the return journey.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Stops Name:</strong> Select the required transport stop for each route point.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Stops Type:</strong> Define the purpose of each stop. A stop can be configured as Boarding, Dropping, or Both.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Time (in min):</strong> Set the travel time in minutes from the first stop to each selected stop. The first stop must always have a time of 0 minutes.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Pickup / Drop:</strong> Enable or disable pickup and drop-off availability for the selected stop.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Stop Order:</strong> Arrange the stops in the correct journey sequence. The first stop must be a Boarding stop and the last stop must be a Dropping stop.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Route:</strong> Add and configure a new forward route when multiple route configurations are required.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Return Route:</strong> Add and configure a new return route for the selected transport.</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-23.png">
            <img class="_img_control" src="#" alt="Route Configuration Overview">
        </div>
    </div>
<?php
