<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_booking_pdf">
        <h2 class="abp_color_theme_gap_xs">📑 Transport Booking - Order Lists PDF Configuration (PRO)</h2>
        <div class="_divider"></div>
        <p class="abp">
            The <strong>Order Lists PDF Configuration</strong> section allows you to control which information is displayed in the Transport Booking Order Lists PDF.
            You can enable or disable individual fields such as company details, booking information, passenger details, route information, pricing, payment method, order status, and terms & conditions.
            These settings give you complete control over the content of generated Order Lists PDF documents.
        </p>
        <h6 class="abp_color_theme_gap_xs">🏢 Company & Branding</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Company Address:</strong> Display the official company address at the top of the PDF. <em>(Default: ON)</em></li>
            <li><strong>Company Logo:</strong> Display the official company logo at the top of the PDF. <em>(Default: ON)</em></li>
            <li><strong>Booking Summary:</strong> Display the booking summary section at the top of the PDF. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">🧾 Order & Post Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Post ID:</strong> Show or hide the related Post ID inside the PDF. <em>(Default: OFF)</em></li>
            <li><strong>Post SKU:</strong> Show or hide the Post SKU in the Booking List PDF. <em>(Default: OFF)</em></li>
            <li><strong>Transport Type:</strong> Display or hide the transport item category/type in the PDF. <em>(Default: OFF)</em></li>
            <li><strong>Order ID:</strong> Display the WooCommerce Order ID in the PDF. Disable this option if you want to hide or mask the Order ID. <em>(Default: ON)</em></li>
            <li><strong>Transport Name:</strong> Display the Transport Name associated with the booking. <em>(Default: ON)</em></li>
            <li><strong>Order Date:</strong> Display the original order date in the Booking List PDF. <em>(Default: OFF)</em></li>
            <li><strong>Order Status:</strong> Display the current order status and related status details in the PDF. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">🚌 Journey & Route Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Duration:</strong> Display the total journey duration in the PDF. <em>(Default: ON)</em></li>
            <li><strong>Boarding Point:</strong> Display the selected boarding point for the booking. <em>(Default: ON)</em></li>
            <li><strong>Boarding Time:</strong> Display the scheduled boarding time. <em>(Default: ON)</em></li>
            <li><strong>Arrival Point:</strong> Display the arrival point of the journey. <em>(Default: ON)</em></li>
            <li><strong>Arrival Time:</strong> Display the scheduled arrival time. <em>(Default: ON)</em></li>
            <li><strong>Pickup Point:</strong> Display the selected pickup point when available. <em>(Default: ON)</em></li>
            <li><strong>Pickup Time:</strong> Display the scheduled pickup time. <em>(Default: ON)</em></li>
            <li><strong>Drop-off Point:</strong> Display the selected drop-off point. <em>(Default: ON)</em></li>
            <li><strong>Drop-off Time:</strong> Display the scheduled drop-off time. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">🎟️ Ticket & Booking Details</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Ticket Info:</strong> Show or hide ticket information associated with the booking. <em>(Default: ON)</em></li>
            <li><strong>Additional Services:</strong> Include or exclude additional services/add-ons selected for the booking. <em>(Default: ON)</em></li>
            <li><strong>Client Info:</strong> Include general customer/client information in the generated Booking PDF. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">💰 Pricing & Payment Information</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Price Info:</strong> Control the visibility of total pricing information in the PDF. Disable this option to generate PDFs without showing pricing details. <em>(Default: ON)</em></li>
            <li><strong>Billing Information:</strong> Display or hide the customer's complete billing information. <em>(Default: OFF)</em></li>
            <li><strong>Payment Method:</strong> Display the payment method used for the booking. Disable this option to generate the PDF without payment method details. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">📜 Terms & Conditions</h6>
        <ul class="abp_list_mar_l">
            <li><strong>Terms & Condition:</strong> Display the configured Terms & Conditions block on the final page of the PDF. <em>(Default: ON)</em></li>
        </ul>
        <h6 class="abp_color_theme_gap_xs">⚙️ Configuration Behavior</h6>
        <ul class="abp_list_mar_l">
            <li><strong>ON:</strong> The selected information will be included in the generated Order Lists PDF.</li>
            <li><strong>OFF:</strong> The selected information will be excluded from the generated Order Lists PDF.</li>
            <li><strong>Flexible PDF Output:</strong> Enable only the information required for your business and create cleaner, more focused PDF documents.</li>
            <li><strong>Privacy Control:</strong> Sensitive information such as billing details, customer information, pricing, and order information can be controlled independently.</li>
            <li><strong>Save Configuration:</strong> After changing the required options, click <strong>Save Order Lists PDF Configuration</strong> to apply the settings.</li>
        </ul>
        <p class="abp">
            <strong>💡 Tip:</strong> Keep commonly required booking and journey information enabled, and disable unnecessary fields to create a cleaner and more professional Order Lists PDF.
            These settings are especially useful when generating PDF order lists for transport operators, booking managers, and administrative purposes.
        </p>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/order_list_pdf.png">
            <img class="_img_control" src="#" alt="Global FAQ and Terms & Conditions Configuration Overview">
        </div>
    </div>
<?php
