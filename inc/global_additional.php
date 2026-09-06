<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_additional_global">
        <div class="abtb_doc_page_head">
            <h2>💰 Global Additional Services</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Additional Services</strong> screen under the <em>Global Data</em> tab lets you create a
                reusable library of extra services, products, or equipment. These services can be imported into any
                transport post and also serve as the site-wide global default.
            </p>
        </div>

        <p class="abtb_doc_section_intro">
            Additional services let customers add optional extras — such as equipment rental or supplementary products —
            to their booking. Stock levels are applied per transport post: an empty quantity means unlimited stock, an
            empty maximum quantity means no limit, and an empty or zero price means the service is free of charge.
        </p>

        <h3>📋 Field Reference</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Icon / Image</strong></td>
                    <td>Set an icon or image to visually represent the additional service. This helps customers identify the service when it is displayed alongside the transport booking options.</td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>Enter the name of the additional service. This field is required and should clearly describe the service or equipment available to customers.</td>
                </tr>
                <tr>
                    <td><strong>Quantity</strong></td>
                    <td>Enter the available stock quantity for the additional service. The quantity is applied per transport post. Leave this field empty to allow unlimited availability.</td>
                </tr>
                <tr>
                    <td><strong>Price</strong></td>
                    <td>Enter the price of the additional service. An empty or zero price means the service is free.</td>
                </tr>
                <tr>
                    <td><strong>Max qty</strong></td>
                    <td>Set the maximum quantity a customer can select for this service in a single booking. Leave this field empty for no maximum limit.</td>
                </tr>
                <tr>
                    <td><strong>Returnable or Not</strong></td>
                    <td>Select whether the additional service or equipment is returnable. Choose <strong>Yes</strong> if the item must be returned, or <strong>No</strong> if it does not require returning.</td>
                </tr>
                <tr>
                    <td><strong>Description</strong></td>
                    <td>Enter a description of the additional service. Use this field to provide customers with useful information such as size, weight, usage details, or service conditions.</td>
                </tr>
                <tr>
                    <td><strong>Action</strong></td>
                    <td>Use the available action controls to reorder an additional service or remove it from the configuration.</td>
                </tr>
            </tbody>
        </table>

        <h3>➕ Adding &amp; Saving</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Add a service</strong> — Click <strong>Add New Additional Services</strong> to create and configure another additional service entry.</li>
            <li><strong>Save</strong> — Click <strong>Save Global Additional Services Configuration</strong> to persist all configured services and their settings.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-13.png"><img class="abtb_doc_screen_img" src="#" alt="Global Additional Services Configuration"></div>
    </div>
<?php
