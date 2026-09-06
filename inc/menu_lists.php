<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_menu_lists">
        <div class="abtb_doc_page_head">
            <h2>🗂️ Admin Menu</h2>
            <p class="abtb_doc_lede">
                After installing ABP Transport Booking, you get a dedicated admin dashboard menu that centralizes the
                plugin's transport booking and management features in one place. All major modules are organized into
                structured menu items, letting you manage transports, bookings, routes, ticket types, seat plans,
                global data, configurations, and system information from a clean, user-friendly interface.
            </p>
        </div>

        <h3>📊 Menu overview</h3>
        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/menu_lists.png">
            <img class="abtb_doc_screen_img" src="#" alt="Transport Booking Menu Overview">
        </div>
        <p class="abtb_doc_section_intro">
            The main menu items available after activation are:
        </p>
        <ul>
            <li><strong>🚌 Transport Lists</strong> — Create and manage all transport services</li>
            <li><strong>🧾 Orders</strong> — View and manage transport bookings and WooCommerce orders</li>
            <li><strong>💺 Ticket / Seat Plan</strong> — Create and manage reusable global ticket types and seat plans</li>
            <li><strong>➕ Add Order (PRO)</strong> — Create orders directly from the admin dashboard</li>
            <li><strong>🌐 Global Data</strong> — Manage reusable transport data and shared configurations</li>
            <li><strong>⚙️ Configuration</strong> — Manage plugin-wide settings and feature controls</li>
            <li><strong>🛡️ Status</strong> — View system status and plugin information</li>
        </ul>

        <h3>🪜 Top Quick Menu</h3>
        <p class="abtb_doc_section_intro">
            The Quick Menu provides fast access to commonly used transport management actions, allowing administrators
            to create and manage transport services without navigating through multiple pages. From this section you
            can quickly access the following actions:
        </p>
        <ul>
            <li><strong>➕ Transport</strong> — Create a new transport and configure its basic information</li>
            <li><strong>➕ Stops</strong> — Create and manage transport stops and their basic information</li>
            <li><strong>➕ Transport Type</strong> — Create and manage transport types or categories</li>
        </ul>
    </div>
<?php
