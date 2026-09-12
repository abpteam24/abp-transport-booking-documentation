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
                structured menu items, letting you manage transports, bookings, ticket types, seat plans,
                global data, configurations, and system information from a clean, user-friendly interface.
            </p>
        </div>

        <h3>📊 Menu overview</h3>
        <p class="abtb_doc_section_intro">
            The menu bar shown at the top of the <strong>ABP Transport Booking</strong> admin page contains the
            following tabs:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Menu item</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-gauge-high"></i> <strong>Dashboard</strong></td>
                    <td>Overview page with key statistics, quick actions, earnings, recent orders and popular transports.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-bus"></i> <strong>Lists</strong></td>
                    <td>Create, edit, clone, restore, delete and manage all transport services.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-invoice"></i> <strong>Orders</strong></td>
                    <td>View, filter and manage transport bookings and their WooCommerce orders.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-chair"></i> <strong>Ticket/Seat Plan</strong></td>
                    <td>Create and manage reusable global ticket types, seat plans, seat labels and decor items.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-cart-plus"></i> <strong>Add Order</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span></td>
                    <td>Create transport bookings directly from the admin dashboard.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-ban"></i> <strong>Cancel Requests</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span></td>
                    <td>Shows the number of pending cancellation requests from customers. Approve or reject each request here.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-globe"></i> <strong>Global Data</strong></td>
                    <td>Manage reusable transport data and shared configurations (dates, stops, categories, organizers, brands and more).</td>
                </tr>
                <tr>
                    <td><i class="fas fa-gear"></i> <strong>Configuration</strong></td>
                    <td>Manage plugin-wide settings, feature switches, PDF/e-mail options, slider, contact information and CSS properties.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>➕ Add New button</strong>
            The <em>Add New</em> button in the top-right corner opens a new transport directly in the WordPress post
            editor, ready for all transport settings to be configured.
        </div>

        <h3>🌐 Global Data sub-menu</h3>
        <p class="abtb_doc_section_intro">
            Under <strong>Global Data</strong> the following sub-tabs are available (some appear only when the
            related feature switch is ON):
        </p>
        <ul>
            <li><i class="fas fa-calendar-day"></i> <strong>Dates</strong> — global date format, buffer and advance-booking window</li>
            <li><strong>💰</strong> <strong>Additional Services</strong> — reusable additional services</li>
            <li><strong>📋</strong> <strong>Client Form</strong> — reusable passenger information form fields</li>
            <li><strong>✂️</strong> <strong>Global Discount</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — seasonal and early-bird discounts site-wide</li>
            <li><strong>💰</strong> <strong>Partial Payment</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — site-wide deposit / balance-due settings</li>
            <li><i class="fas fa-route"></i> <strong>Stops / Locations</strong> — reusable boarding and drop-off stops</li>
            <li><i class="fas fa-boxes-stacked"></i> <strong>Transport Type / Category</strong> — reusable transport categories</li>
            <li><strong>🏢</strong> <strong>Organizer</strong> — reusable transport organizers / operators</li>
            <li><strong>🏷️</strong> <strong>Brands</strong> — reusable transport brands</li>
            <li><strong>🔗</strong> <strong>Features Library</strong> — reusable transport features</li>
            <li><strong>📚</strong> <strong>Resources</strong> — global FAQs and Terms &amp; Conditions</li>
        </ul>

        <h3>⚙️ Configuration sub-menu</h3>
        <p class="abtb_doc_section_intro">
            Under <strong>Configuration</strong> the following sub-tabs are available:
        </p>
        <ul>
            <li><i class="fas fa-gear"></i> <strong>Configuration</strong> — general transport labels and store settings</li>
            <li><i class="fa-solid fa-toggle-on"></i> <strong>ON/OFF</strong> — enable or disable individual plugin features</li>
            <li><i class="fas fa-photo-video"></i> <strong>Slider</strong> — featured transport slider settings</li>
            <li><i class="fas fa-id-card-alt"></i> <strong>Contact Information</strong> — company details shown on bookings</li>
            <li><i class="fas fa-drafting-compass"></i> <strong>CSS Property</strong> — custom CSS colors and fonts</li>
            <li><i class="fas fa-ticket-alt"></i> <strong>PDF</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — PDF ticket and invoice settings</li>
            <li><i class="far fa-file-alt"></i> <strong>Order Lists PDF</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — PDF export of the order list</li>
            <li><i class="fas fa-file-csv"></i> <strong>Order Lists CSV</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — CSV export of the order list</li>
            <li><i class="far fa-envelope"></i> <strong>E-Mail</strong> <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> — booking e-mail notifications with PDF attachments</li>
        </ul>

        <h3>⚡ Quick Actions</h3>
        <p class="abtb_doc_section_intro">
            The <strong>Quick Actions</strong> card on the Dashboard–page gives fast access to commonly used screens
            in one click:
        </p>
        <ul>
            <li><strong>Manage Transport</strong> — open the transport lists</li>
            <li><strong>Orders</strong> — view and filter bookings</li>
            <li><strong>Ticket/Seat Plan</strong> — design seat layouts</li>
            <li><strong>Global Data</strong> — routes, dates and more</li>
            <li><strong>Configuration</strong> — plugin settings</li>
            <li><strong>ON/OFF Configuration</strong> — enable and disable features</li>
            <li><strong>Global Date</strong> — manage global dates</li>
            <li><strong>Additional Services</strong>, <strong>Client Form</strong>, <strong>Stops Configuration</strong> — feature-dependent shortcuts</li>
            <li><i class="fas fa-hand-holding-dollar"></i> <strong>Partial Payment</strong>, <i class="fas fa-percent"></i> <strong>Global Discount</strong>, <i class="fas fa-ban"></i> <strong>Cancel Request</strong> — <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> shortcuts</li>
        </ul>
    </div>
<?php