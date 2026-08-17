<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_general">
        <h3 class="abp_color_theme">General Configuration</h3>
        <div class="_divider_xs"></div>
        <label>The General Configuration section provides centralized controls for managing the basic information and general behavior of a transport. From here, you can configure the transport template, SKU, icon, description, capacity display, transport type, organizer, brand, related transports, features, and gallery without leaving the Transport Details Page.</label>
        <ul class="abp_list_margin_xs">
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Sale Continue ON/OFF:</strong> Enable or disable ticket sales for this transport. When enabled, customers can continue purchasing tickets according to the configured availability.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Template:</strong> Select the details page template for this transport. You can choose the preferred template to control the frontend layout and presentation.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 ID/SKU:</strong> Add a unique SKU or identifier for the transport. You can also choose whether to display the SKU on the frontend.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Transport Icon:</strong> Set a custom icon or emoji for the transport. The selected icon or emoji can be displayed alongside the transport title across the website.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Sub Title:</strong> Add a short subtitle for the transport. Leave this field empty if you do not want to display a subtitle.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Short Description:</strong> Add a short description for the transport to provide customers with a brief overview of the service.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Display Capacity ON/OFF:</strong> Enable or disable the transport capacity display on the frontend. This option works when the global Transport Capacity Display feature is enabled.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Transport Type:</strong> Select a transport type or category for the transport. You can also enable or disable its frontend display.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Organizer:</strong> Select an organizer for the transport. You can also add a new organizer directly from this section.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Brand:</strong> Select a transport brand and control whether the brand information is displayed on the frontend. You can also add a new brand directly from this section.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Related Transport:</strong> Select related transports to display on the transport details page. Leave this option empty if you do not want to show related transports.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Feature:</strong> Add features to the transport by selecting existing features or creating new ones. Selected features can be displayed on the frontend.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Gallery:</strong> Add multiple images to create a gallery for the transport. These images can be displayed on the transport details page.</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-20.png">
            <img class="_img_control" src="#" alt="General Configuration Overview">
        </div>
    </div>
<?php
