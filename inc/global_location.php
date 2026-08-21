<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_location_global">
        <h2 class="abp_color_theme_gap_xs">📍Transport Booking - Global Location/Stop Management</h2>
        <div class="_divider"></div>
        <h5 class="abp_color_active">Global Location & Stop Management</h5>
        <label>Manage all transport locations and stops from a centralized, global system. Create reusable locations once and assign them to any transport route as pickup, drop-off, boarding, or intermediate stops. Any changes made to a global location are automatically reflected across all routes and transports where it is used.</label>
        <h5 class="abp_color_active">Location-Based Transport Listing</h5>
        <label>The abptb-list shortcode supports location-based transport filtering. To display all transports available at a specific location, simply pass the location ID using the loc_id parameter. The shortcode will automatically show the transports associated with that location.</label>
        <label>You can also use the same Location ID as the value of the bp (Boarding Point) or dp (Drop-off Point) parameters to display transports operating from or to a specific location.</label>
        <h6 class="abp_color_active">Examples</h6>
        <div class="_mar_l">
            <label>loc_id → Show transports available at the selected location</label>
            <label> bp → Show transports departing from the selected boarding location</label>
            <label> dp → Show transports arriving at the selected drop-off location</label>
        </div>
        <label>Because locations are globally reusable, the same Location ID can be used across different shortcode configurations and routes.</label>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/location_add.png"><img class="_img_control" src="#" alt="Slider"></div>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/location_list.png"><img class="_img_control" src="#" alt="Slider"></div>
    </div>
<?php
