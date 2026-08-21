<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_client_form_global">
        <h2 class="abp_color_theme_gap_xs">📋 Transport Booking - Global Client Form Configuration </h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">Configure a flexible global client form that can be reused across all Transport posts. Once the form structure is created, it can be imported into any Transport or used as the global client form.</i>
        <table class="abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Form Title</th>
                <td colspan="3">Enter the title or label of the client form field. This is the name that will be displayed to customers in the booking form. This field is required.</td>
            </tr>
            <tr>
                <th class="_color_theme">Unique ID</th>
                <td colspan="3">Defines the unique identifier of the form field. The ID is used internally to identify and process the submitted client information. This field is required.</td>
            </tr>
            <tr>
                <th class="_color_theme">Form Type</th>
                <td colspan="3">Select the type of input field that should be used for collecting the client information. The available field type can be selected according to the required data.</td>
            </tr>
            <tr>
                <th class="_color_theme">Value Option</th>
                <td colspan="3">Enter the available options for fields such as Select. Use a comma <strong>(,)</strong> to separate multiple options. For example: <strong>male,female</strong>.</td>
            </tr>
            <tr>
                <th class="_color_theme">Default Value</th>
                <td colspan="3">Enter a default value for the form field. The configured value will be displayed automatically when the client form is loaded.</td>
            </tr>
            <tr>
                <th class="_color_theme">Required</th>
                <td colspan="3">Controls whether the client must provide a value for the form field. Turn <strong class="abp_color_theme">ON</strong> to make the field required, or turn <strong class="abp_color_theme">OFF</strong> to make it optional.</td>
            </tr>
            <tr>
                <th class="_color_theme">Action</th>
                <td colspan="3">Use the available action controls to reorder the form items or remove an existing form field from the global client form configuration.</td>
            </tr>
            <tr>
                <th class="_color_theme">Add New Form Item</th>
                <td colspan="3">Click <strong>Add New Form Item</strong> to add another client form field and configure its title, unique ID, field type, options, default value, and required status.</td>
            </tr>
            <tr>
                <th class="_color_theme">Save Global Client Form Configuration</th>
                <td colspan="3">Click <strong>Save Global Client Form Configuration</strong> to save the configured global client form and make it available for reuse across Transport posts.</td>
            </tr>
            </tbody>
        </table>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-14.png"><img class="_img_control" src="#" alt="Global Client Form Configuration"></div>
    </div>
<?php
