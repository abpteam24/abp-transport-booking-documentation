<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_status">
        <h2 class="abp_color_theme">🛡️ Status & Information</h2>
        <div class="_divider"></div>
        <label>This section provides essential system information, plugin requirements, and setup status for Transport Booking. It helps you quickly check the installed versions, required plugins, booking pages, and other important system information.</label>
        <ol class="abp_list_margin">
            <li><strong class="abp_color_theme">Transport Booking Version :</strong>&nbsp;&nbsp;Displays the currently installed version of Transport Booking. Keeping the plugin updated ensures access to the latest features, improvements, bug fixes, and security updates.</li>
            <li><strong class="abp_color_theme">WordPress Version :</strong>&nbsp;&nbsp;Shows the current WordPress version running on your website. Transport Booking is regularly tested with supported WordPress versions to ensure compatibility.</li>
            <li><strong class="abp_color_theme">PHP Version :</strong>&nbsp;&nbsp;Displays the PHP version installed on your server. Using a supported and up-to-date PHP version helps improve performance, stability, and security.</li>
            <li><strong class="abp_color_theme">WooCommerce Plugin :</strong>&nbsp;&nbsp;Transport Booking is built on WooCommerce for cart, checkout, payment, and order management. If WooCommerce is not installed or activated, you can use the provided option to install and activate it.</li>
            <li><strong class="abp_color_theme">WooCommerce Version :</strong>&nbsp;&nbsp;Displays the currently installed WooCommerce version. This information helps verify the WooCommerce environment used by Transport Booking.</li>
            <li><strong class="abp_color_theme">Email Address :</strong>&nbsp;&nbsp;Shows the administrator email address configured for your website. Important booking notifications and system-related communications may use this email address.</li>
            <li><strong class="abp_color_theme">ABP PDF Support Tools (PRO) :</strong>&nbsp;&nbsp;Provides PDF generation and download functionality for Transport Booking. Install and activate the ABP PDF Support Tools addon to generate booking documents, invoices, or other supported PDF files.</li>
            <li><strong class="abp_color_theme">Transport Booking Page :</strong>&nbsp;&nbsp;Displays the status of the page used for the Transport Booking interface. You can automatically create the page or manually place the booking shortcode on any suitable page.</li>
            <li><strong class="abp_color_theme">Transport Post List Page :</strong>&nbsp;&nbsp;Displays the status of the transport listing page. This page is used to showcase available transport services and can be generated automatically or configured manually using the available shortcode.</li>
            <li><strong class="abp_color_theme">Gallery Page :</strong>&nbsp;&nbsp;Displays the page used to showcase transport images and gallery content for customers.</li>
            <li><strong class="abp_color_theme">Number of Transport Posts :</strong>&nbsp;&nbsp;Shows the total number of transport posts currently available in the Transport Booking system.</li>
            <li><strong class="abp_color_theme">Number of Transports :</strong>&nbsp;&nbsp;Shows the total number of transport services currently configured and managed by Transport Booking.</li>
            <li><strong class="abp_color_theme">Dummy Import :</strong>&nbsp;&nbsp;Allows you to import sample transport data to quickly explore Transport Booking features and configurations. This is useful for testing, demonstrations, and initial setup.</li>
        </ol>
        <label><strong>Note:</strong> WooCommerce must be installed and activated for Transport Booking to function properly. Other tools, pages, and optional addons can be configured according to your business requirements.</label>
        <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/status.png"><img class="_img_control" src="#" alt="Transport Booking Status & Information"></div>
    </div>
<?php
