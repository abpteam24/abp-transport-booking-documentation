<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_feature_global">
        <h2 class="abp_color_theme"><span class="_mar_r_xs">🔗</span>Transport Booking - Global Feature Configuration</h2>
        <div class="_divider"></div>
        <label> Here you can create, update, and delete Transport Booking features easily. You can manage feature details and use the available feature information while creating or editing a transport. </label>
        <ul class="abp_list_mar_l">
            <li>1. View all available Features from the list.</li>
            <li>2. Use the <strong>Edit</strong> option to update an existing Feature.</li>
            <li>3. Use the <strong>Delete</strong> option to remove an existing Feature.</li>
            <li>4. Use the <strong>Add New Feature</strong> option to create a new Feature.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/feature.png"><img class="_img_control" src="#" alt="Feature List"></div>
        <ul class="abp_list_mar_l">
            <li>1. Enter the <strong>Feature Name</strong> to create a new Feature.</li>
            <li>2. Add an optional <strong>Feature value</strong>, or leave it blank .</li>
            <li>3. Click <strong>Save Feature</strong> to save the new Feature.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/feature_add.png"><img class="_img_control" src="#" alt="Add New Feature"></div>
    </div>
<?php
