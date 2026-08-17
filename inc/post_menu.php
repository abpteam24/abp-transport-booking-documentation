<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_post">
        <h2 class="abp_color_theme">Transport Lists</h2>
        <div class="_divider_xs"></div>
        <label>Here you can view and manage all ABP Transport Booking services in one place. You can easily create, clone, edit, restore, view, or delete transports. Each transport includes essential information such as route, schedule, capacity, booking status, and other important transport details for quick and efficient management.</label>
        <ul class="abp_list_margin_xs">
            <li><strong class="_color_theme_gap_xs"><?php ABPTB_Static::svg('clone_1'); ?> Clone Transport:</strong> Create an exact duplicate of the selected transport. The cloned transport can be freely edited or customized.</li>
            <li><strong class="_color_theme_gap_xs">♻️  Restore Transport:</strong> Recover a previously deleted or archived transport and restore it back to the transport list.</li>
            <li><strong class="_color_theme_gap_xs"><?php ABPTB_Static::svg('close_1'); ?> Permanent Delete:</strong> Permanently remove the selected transport from the system. This action cannot be undone.</li>
            <li><strong class="_color_theme_gap_xs"><?php ABPTB_Static::svg('edit'); ?> Edit Transport:</strong> Modify and update existing transport information, settings, schedules, routes, and configurations at any time.</li>
            <li><strong class="_color_theme_gap_xs"><?php ABPTB_Static::svg('view_1'); ?> View Transport:</strong> Preview how the transport will appear on the frontend website.</li>
            <li><strong class="_color_theme_gap_xs"><?php ABPTB_Static::svg('close_2'); ?> Move to Trash:</strong> Move the transport to trash instead of permanently deleting it. You can restore it later if needed.</li>
        </ul>
        <label>After clicking Clone, Edit, or Add New Transport, you will be redirected to the Transport Details Page, where you can manage all transport-related information in a structured and user-friendly interface.</label>
        <label>This page allows you to fully configure your transport information, routes, schedules, ticket types, seat plans, pricing, availability, passenger forms, and other settings before publishing or updating.</label>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-9.png"><img class="_img_control" src="#" alt="Transport Lists Overview"></div>
    </div>
<?php
