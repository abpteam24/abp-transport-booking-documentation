<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_category_global">
        <h2 class="abp_color_theme_xs">🏘️Transport Booking - Global Transport Type/Category Configuration</h2>
        <div class="_divider"></div>
        <label> Here you can create, update, and delete Transport types or categories easily. You can also manage category details and use the available shortcode for each Transport Type. </label>
        <ul class="abp_list_mar_l">
            <li>1. View all available Transport Types/Categories from the list.</li>
            <li>2. Use the <strong>Edit</strong> option to update an existing Transport Type/Category.</li>
            <li>3. Use the <strong>Delete</strong> option to remove an existing Transport Type/Category.</li>
            <li>4. Use the <strong>Add New Transport Type</strong> option to create a new Transport Type/Category.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/category.png"><img class="_img_control" src="#" alt="Transport Type List"></div>
        <ul class="abp_list_mar_l">
            <li>1. Enter the <strong>Transport Type Name</strong> to create a new Transport Type/Category.</li>
            <li>2. Add an optional <strong>Transport Type Slug</strong>, or leave it blank to generate it automatically from the name.</li>
            <li>3. Add an optional <strong>Transport Type Description</strong> to provide additional information about the category.</li>
            <li>4. Click <strong>Save Transport Type</strong> to save the new Transport Type/Category.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/category_add.png"><img class="_img_control" src="#" alt="Add New Transport Type"></div>
    </div>
<?php
