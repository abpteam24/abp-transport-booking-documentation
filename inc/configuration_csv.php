<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_csv">
        <h2 class="abp_color_theme_gap_xs">📑Transport Booking - Order Lists CSV File Configuration</h2>
        <div class="_divider"></div>
        <div class="_divider"></div>
        <p class="abp">
            The <strong>Order Lists CSV Configuration</strong> section allows you to control which information is included in the Transport Booking Order Lists CSV file.
            You can enable or disable individual fields such as order information, transport details, route information, ticket details, pricing, customer information, payment method, billing information, and order status.
            These settings give you flexible control over the data included in exported CSV files.
        </p>
        <h6 class="abp_color_theme_gap_xs">🧾 Order & Transport Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Order ID:</strong> Display the WooCommerce Order ID in the exported CSV file. <em>(Default: ON)</em></li>
            <li><strong>Transport Name:</strong> Display the Transport Name associated with the booking. <em>(Default: ON)</em></li>
            <li><strong>Post ID:</strong> Show or hide the related Post ID in the CSV file. <em>(Default: ON)</em></li>
            <li><strong>Post SKU:</strong> Display the Post SKU associated with the booking. <em>(Default: ON)</em></li>
            <li><strong>Transport Type:</strong> Include the transport item category/type in the exported CSV file. <em>(Default: ON)</em></li>
            <li><strong>Order Date:</strong> Display the original order date in the Order Lists CSV file. <em>(Default: ON)</em></li>
            <li><strong>Order Status:</strong> Include the current order status in the exported CSV file. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">🚌 Journey & Route Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Start Point:</strong> Display the starting point of the journey in the CSV file. <em>(Default: ON)</em></li>
            <li><strong>Start Time:</strong> Display the scheduled start time of the journey. <em>(Default: ON)</em></li>
            <li><strong>Boarding Point:</strong> Display the selected boarding point for the booking. <em>(Default: ON)</em></li>
            <li><strong>Boarding Time:</strong> Display the scheduled boarding time. <em>(Default: ON)</em></li>
            <li><strong>Arrival Point:</strong> Display the arrival point of the journey. <em>(Default: ON)</em></li>
            <li><strong>Arrival Time:</strong> Display the scheduled arrival time. <em>(Default: ON)</em></li>
            <li><strong>Pickup Point:</strong> Display the selected pickup point when available. <em>(Default: ON)</em></li>
            <li><strong>Pickup Time:</strong> Display the scheduled pickup time. <em>(Default: ON)</em></li>
            <li><strong>Drop-off Point:</strong> Display the selected drop-off point. <em>(Default: ON)</em></li>
            <li><strong>Drop-off Time:</strong> Display the scheduled drop-off time. <em>(Default: ON)</em></li>
            <li><strong>Duration:</strong> Display the total journey duration in the CSV file. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">🎟️ Ticket & Booking Details</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Ticket Info:</strong> Include ticket information associated with the booking in the CSV file. <em>(Default: ON)</em></li>
            <li><strong>Additional Services:</strong> Include additional services or add-ons selected for the booking. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">👤 Customer & Billing Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Client Info:</strong> Include general customer/client information in the exported CSV file. <em>(Default: ON)</em></li>
            <li><strong>Billing Information:</strong> Include the customer's complete billing details in the CSV file. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">💰 Price & Payment Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Price Info:</strong> Control the visibility of pricing information in the CSV file. Disable this option to export booking data without pricing details. <em>(Default: ON)</em></li>
            <li><strong>Payment Method:</strong> Include the payment method used for the booking in the exported CSV file. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">⚙️ Configuration Behavior</h6>
        <ul class="abp_list_mar_l">
            <li><strong>ON:</strong> The selected field will be included in the generated Order Lists CSV file.</li>
            <li><strong>OFF:</strong> The selected field will be excluded from the generated Order Lists CSV file.</li>
            <li><strong>Flexible Export:</strong> Enable only the fields required for your operational, reporting, or administrative needs.</li>
            <li><strong>Data Privacy:</strong> Disable customer, billing, pricing, or payment-related fields when those details are not required in the exported file.</li>
            <li><strong>Save Configuration:</strong> After adjusting the required options, click <strong>Save Order Lists CSV Configuration</strong> to save and apply your settings.</li>
        </ul>
        <p class="abp">
            <strong>💡 Tip:</strong> Keep the fields required for your daily transport operations enabled and disable unnecessary information to create a cleaner and more focused CSV export.
        </p>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/csv.png">
            <img class="_img_control" src="#" alt="Transport Booking Order Lists CSV Configuration">
        </div>
    </div>
<?php
