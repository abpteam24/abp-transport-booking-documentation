<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_general">
        <div class="abtb_doc_page_head">
            <h2>⚙️ General Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>General</strong> tab in the Transport Details Page provides centralized controls for
                the basic information and general behavior of a transport. Configure template, SKU, icon,
                description, capacity display, transport type, organizer, brand, and more from a single section.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            This section covers all the foundational settings that define a transport's identity and display
            behavior. You can manage everything from the sales toggle and page template to gallery images and
            related transports without leaving the Transport Details Page.
        </p>

        <h3>📋 Fields and Options</h3>
        <p class="abtb_doc_section_intro">The following fields and controls are available in the General Configuration section:</p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Sale Continue ON/OFF</strong></td>
                    <td>Enables or disables ticket sales for this transport. When enabled, customers can purchase tickets according to the configured availability.</td>
                </tr>
                <tr>
                    <td><strong>Template</strong></td>
                    <td>Selects the details page template for this transport. Choose the preferred template to control the frontend layout and presentation.</td>
                </tr>
                <tr>
                    <td><strong>ID/SKU</strong></td>
                    <td>A unique SKU or identifier for the transport. You can also choose whether to display the SKU on the frontend.</td>
                </tr>
                <tr>
                    <td><strong>Transport Icon</strong></td>
                    <td>A custom icon or emoji for the transport. The selected icon can be displayed alongside the transport title across the website.</td>
                </tr>
                <tr>
                    <td><strong>Sub Title</strong></td>
                    <td>A short subtitle for the transport. Leave empty if you do not want to display a subtitle.</td>
                </tr>
                <tr>
                    <td><strong>Short Description</strong></td>
                    <td>A brief description of the transport to provide customers with an overview of the service.</td>
                </tr>
                <tr>
                    <td><strong>Display Capacity ON/OFF</strong></td>
                    <td>Enables or disables the transport capacity display on the frontend. This option works when the global Transport Capacity Display feature is enabled.</td>
                </tr>
                <tr>
                    <td><strong>Transport Type</strong></td>
                    <td>Selects a transport type or category. You can also enable or disable its frontend display.</td>
                </tr>
                <tr>
                    <td><strong>Organizer</strong></td>
                    <td>Selects an organizer for the transport. A new organizer can be added directly from this section.</td>
                </tr>
                <tr>
                    <td><strong>Brand</strong></td>
                    <td>Selects a transport brand and controls whether the brand information is displayed on the frontend. A new brand can be added directly from this section.</td>
                </tr>
                <tr>
                    <td><strong>Related Transport</strong></td>
                    <td>Selects related transports to display on the transport details page. Leave empty to hide related transports.</td>
                </tr>
                <tr>
                    <td><strong>Feature</strong></td>
                    <td>Adds features to the transport by selecting existing features or creating new ones. Selected features can be displayed on the frontend.</td>
                </tr>
                <tr>
                    <td><strong>Gallery</strong></td>
                    <td>Adds multiple images to create a gallery for the transport. These images can be displayed on the transport details page.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-20.png">
            <img class="abtb_doc_screen_img" src="#" alt="General Configuration Overview">
        </div>
    </div>
<?php