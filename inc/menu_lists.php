<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_menu_lists">
        <h3 class="abp_color_theme">ABP Transport Booking - Menu</h3>
        <div class="_divider_xs"></div>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/menu_lists.png">
            <img class="_img_control" src="#" alt="Transport Booking Menu Overview">
        </div>
        <label>After installing ABP Transport Booking, you will get a dedicated admin dashboard menu that centralizes the plugin's transport booking and management features in one place. All major modules are organized into structured menu items, allowing you to manage transports, bookings, routes, ticket types, seat plans, global data, configurations, and system information from a clean and user-friendly interface.</label>
        <ul class="abp_list_margin">
            <li><strong class="_color_theme_gap_xs"> 🚌 Transport Lists </strong> — Create and manage all transport services</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('order'); ?> Orders </strong> — View and manage transport bookings and WooCommerce orders</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('seat'); ?> Ticket / Seat Plan </strong> — Create and manage reusable global ticket types and seat plans</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('plus'); ?> Add Order (PRO)</strong> — Create orders directly from the admin dashboard</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('globe'); ?> Global Data</strong> — Manage reusable transport data and shared configurations</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('setting'); ?> Configuration</strong> — Manage plugin-wide settings and feature controls</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('status'); ?> Status</strong> — View system status and plugin information</li>
            <li><strong class="_color_theme_gap_xs"> 📚 Documentation</strong> — Access plugin documentation and user guides</li>
        </ul>
        <h2 class="abp_color_theme">🪜 Top Quick Menu</h2>
        <div class="_divider_xs"></div>
        <label>The Quick Menu provides fast access to commonly used transport management actions, allowing administrators to create and manage transport services without navigating through multiple pages.</label>
        <label>From this section, you can quickly access the following actions:</label>
        <ul class="abp_list_margin">
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('plus'); ?> Transport </strong> — Create a new transport and configure its basic information</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('plus'); ?> Stops </strong> — Create and manage transport stops and their basic information</li>
            <li><strong class="_color_theme_gap_xs"> <?php ABPTB_Static::svg('plus'); ?> Transport Type </strong> — Create and manage transport types or categories</li>
        </ul>
    </div>
<?php
