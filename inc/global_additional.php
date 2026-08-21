<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_additional_global">
        <h2 class="abp_color_theme_xs">💰 Transport Booking - Global Additional Services Configuration </h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">Add extra services for products or equipment with your Transport. These services can be imported or configured per Post and can also be used globally. Stock applies per Post, an empty quantity means unlimited, an empty max quantity means no limit, and an empty or zero price means the service is free.</i>

        <table class="abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Icon / Image</th>
                <td colspan="3">Set an icon or image to visually represent the additional service. This helps customers identify the service when it is displayed with the Transport booking options.</td>
            </tr>
            <tr>
                <th class="_color_theme">Name</th>
                <td colspan="3">Enter the name of the additional service. This field is required and should clearly describe the service or equipment available to customers.</td>
            </tr>
            <tr>
                <th class="_color_theme">Quantity</th>
                <td colspan="3">Enter the available stock quantity for the additional service. The quantity is applied per Post. Leave this field empty to allow unlimited availability.</td>
            </tr>
            <tr>
                <th class="_color_theme">Price</th>
                <td colspan="3">Enter the price of the additional service. An empty or zero price means the service is free.</td>
            </tr>
            <tr>
                <th class="_color_theme">Max qty</th>
                <td colspan="3">Set the maximum quantity that a customer can select for the additional service in a booking. Leave this field empty to allow no maximum quantity limit.</td>
            </tr>
            <tr>
                <th class="_color_theme">Returnable or Not</th>
                <td colspan="3">Select whether the additional service or equipment is returnable. Choose <strong>Yes</strong> if the item must be returned, or <strong>No</strong> if it does not require returning.</td>
            </tr>
            <tr>
                <th class="_color_theme">Description</th>
                <td colspan="3">Enter a description of the additional service. Use this field to provide customers with useful information such as size, weight, usage details, or service conditions.</td>
            </tr>
            <tr>
                <th class="_color_theme">Action</th>
                <td colspan="3">Use the available action controls to reorder an additional service or remove it from the configuration.</td>
            </tr>
            <tr>
                <th class="_color_theme">Add New Additional Services</th>
                <td colspan="3">Click <strong>Add New Additional Services</strong> to create and configure another additional service.</td>
            </tr>
            <tr>
                <th class="_color_theme">Save Global Additional Services Configuration</th>
                <td colspan="3">Click <strong>Save Global Additional Services Configuration</strong> to save all configured global additional services and their settings.</td>
            </tr>
            </tbody>
        </table>

        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-13.png"><img class="_img_control" src="#" alt="Global Additional Services Configuration"></div>
    </div>
<?php
