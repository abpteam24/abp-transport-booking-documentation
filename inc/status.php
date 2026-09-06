<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_status">
        <div class="abtb_doc_page_head">
            <h2>🛡️ Status & Information</h2>
            <p class="abtb_doc_lede">
                This section provides essential system information, plugin requirements, and setup status for
                Transport Booking. It helps you quickly check the installed versions, required plugins, booking pages,
                and other important system information.
            </p>
        </div>

        <h3>📋 System checks</h3>
        <table>
            <thead>
                <tr>
                    <th>Check</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Transport Booking Version</strong></td>
                    <td>Displays the currently installed version of Transport Booking. Keeping the plugin updated ensures access to the latest features, improvements, bug fixes, and security updates.</td>
                </tr>
                <tr>
                    <td><strong>WordPress Version</strong></td>
                    <td>Shows the current WordPress version running on your website. Transport Booking is regularly tested with supported WordPress versions to ensure compatibility.</td>
                </tr>
                <tr>
                    <td><strong>PHP Version</strong></td>
                    <td>Displays the PHP version installed on your server. Using a supported and up-to-date PHP version helps improve performance, stability, and security.</td>
                </tr>
                <tr>
                    <td><strong>WooCommerce Plugin</strong></td>
                    <td>Transport Booking is built on WooCommerce for cart, checkout, payment, and order management. If WooCommerce is not installed or activated, you can use the provided option to install and activate it.</td>
                </tr>
                <tr>
                    <td><strong>WooCommerce Version</strong></td>
                    <td>Displays the currently installed WooCommerce version. This information helps verify the WooCommerce environment used by Transport Booking.</td>
                </tr>
                <tr>
                    <td><strong>Email Address</strong></td>
                    <td>Shows the administrator email address configured for your website. Important booking notifications and system-related communications may use this email address.</td>
                </tr>
                <tr>
                    <td><strong>ABP PDF Support Tools (PRO)</strong></td>
                    <td>Provides PDF generation and download functionality for Transport Booking. Install and activate the ABP PDF Support Tools addon to generate booking documents, invoices, or other supported PDF files.</td>
                </tr>
                <tr>
                    <td><strong>Transport Booking Page</strong></td>
                    <td>Displays the status of the page used for the Transport Booking interface. You can automatically create the page or manually place the booking shortcode on any suitable page.</td>
                </tr>
                <tr>
                    <td><strong>Transport Post List Page</strong></td>
                    <td>Displays the status of the transport listing page. This page is used to showcase available transport services and can be generated automatically or configured manually using the available shortcode.</td>
                </tr>
                <tr>
                    <td><strong>Gallery Page</strong></td>
                    <td>Displays the page used to showcase transport images and gallery content for customers.</td>
                </tr>
                <tr>
                    <td><strong>Number of Transport Posts</strong></td>
                    <td>Shows the total number of transport posts currently available in the Transport Booking system.</td>
                </tr>
                <tr>
                    <td><strong>Number of Transports</strong></td>
                    <td>Shows the total number of transport services currently configured and managed by Transport Booking.</td>
                </tr>
                <tr>
                    <td><strong>Dummy Import</strong></td>
                    <td>Allows you to import sample transport data to quickly explore Transport Booking features and configurations. This is useful for testing, demonstrations, and initial setup.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>ℹ️ Note</strong>
            WooCommerce must be installed and activated for Transport Booking to function properly. Other tools, pages,
            and optional addons can be configured according to your business requirements.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/status.png"><img class="abtb_doc_screen_img" src="#" alt="Transport Booking Status & Information"></div>
    </div>
<?php
