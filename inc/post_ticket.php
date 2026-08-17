<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_ticket">
        <h3 class="abp_color_theme_gap_xs">🎫 Ticket Configuration</h3>
        <div class="_divider_xs"></div>
        <label>The Ticket Configuration section allows you to define how tickets and seats will be managed for the selected transport. You can choose between a Seat Plan or Ticket-based configuration, enable multiple ticket types, and control the minimum and maximum quantity allowed per order.</label>
        <ul class="abp_list_margin_xs">
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Ticket Type:</strong> Select the ticket configuration type for the transport. You can choose between Seat Plan and Ticket based on how passengers will be booked.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Multiple Ticket Type ON/OFF:</strong> Enable this option when the transport supports multiple ticket or seat types. Disable it when all tickets or seats use the same type.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Min Qty/Order:</strong> Set the minimum number of tickets or seats a customer must select in a single order.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Max Qty/Order:</strong> Set the maximum number of tickets or seats a customer can select in a single order.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Seat Plan Configuration:</strong> When Seat Plan is selected, you can assign reusable seat plans to the transport and configure their frontend names and ticket/seat type quantities.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Seat Label:</strong> Add a new seat label configuration when required for the selected seat plan.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Ticket Configuration:</strong> When Ticket is selected, you can configure individual ticket types, quantities, reserve quantities, minimum and maximum quantity per order, and ticket descriptions.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Item:</strong> Add a new ticket configuration item to the ticket list.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Add New Ticket Type:</strong> Add a new ticket type when multiple ticket types are enabled for the transport.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Reserve Quantity:</strong> Define a quantity that will be reserved from the available ticket quantity for the selected ticket type.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Type-wise Quantity:</strong> Configure the quantity available for each ticket or seat type within the selected seat plan.</li>
            <li><strong class="_color_theme_gap_xs_text_nowrap">👉 Ticket Description:</strong> Add a description for the selected ticket type to provide additional information to customers.</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-21.png"><img class="_img_control" src="#" alt="Ticket Configuration Overview"></div>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-22.png"><img class="_img_control" src="#" alt="Ticket Configuration Overview"></div>
    </div>
<?php
