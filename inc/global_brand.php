<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_brand_global">
        <h2 class="abp_color_theme_xs">🏷️Transport Booking - Global Brands Configuration</h2>
        <div class="_divider"></div>
        <label> Here you can create, update, and delete Transport Booking brands, manufacturers, or service providers easily. You can assign a brand to a transport while creating or editing a post and use the available shortcode to display transports from a specific brand. </label>
        <ul class="abp_list_mar_l">
            <li>1. View all available Brands from the list.</li>
            <li>2. Use the <strong>Edit</strong> option to update an existing Brand.</li>
            <li>3. Use the <strong>Delete</strong> option to remove an existing Brand.</li>
            <li>4. Use the <strong>Add New Brand</strong> option to create a new Brand.</li>
            <li>5. Use the displayed <strong>Shortcode</strong> to display transports assigned to a specific Brand.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/brand.png"><img class="_img_control" src="#" alt="Brand List"></div>
        <ul class="abp_list_mar_l">
            <li>1. Enter the <strong>Brand Name</strong> to create a new Brand.</li>
            <li>2. Add an optional <strong>Brand Slug</strong>, or leave it blank to generate it automatically from the name.</li>
            <li>3. Add an optional <strong>Brand Description</strong> to provide additional information about the Brand.</li>
            <li>4. Click <strong>Save Brand</strong> to save the new Brand.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/brand_add.png"><img class="_img_control" src="#" alt="Add New Brand"></div>
    </div>
<?php
