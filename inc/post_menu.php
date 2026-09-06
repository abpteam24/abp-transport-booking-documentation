<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_post">
        <div class="abtb_doc_page_head">
            <h2>🚌 Transport Lists</h2>
            <p class="abtb_doc_lede">
                The <strong>Transport Lists</strong> page provides a central hub for viewing and managing all
                ABP Transport Booking services. Create, clone, edit, restore, view, or delete transports from a
                single screen. Access it via <em>ABP Transport Booking → Transport Lists</em> in the WordPress admin.
            </p>
        </div>

        <h3>📋 Overview</h3>
        <p class="abtb_doc_section_intro">
            Every transport is displayed with its key details — route, schedule, capacity, booking status, and
            other essential information — so you can manage your fleet quickly and efficiently. From this page
            you can also navigate to the Transport Details Page, where all transport-related settings are
            configured in a structured interface.
        </p>

        <h3>⚙️ Available Actions</h3>
        <p class="abtb_doc_section_intro">Each transport entry offers the following actions:</p>
        <table>
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>🔀 Clone Transport</strong></td>
                    <td>Creates an exact duplicate of the selected transport. The cloned transport can then be freely edited or customized.</td>
                </tr>
                <tr>
                    <td><strong>♻️ Restore Transport</strong></td>
                    <td>Recovers a previously deleted or archived transport and adds it back to the transport list.</td>
                </tr>
                <tr>
                    <td><strong>🗑️ Permanent Delete</strong></td>
                    <td>Permanently removes the selected transport from the system. This action cannot be undone.</td>
                </tr>
                <tr>
                    <td><strong>✏️ Edit Transport</strong></td>
                    <td>Opens the Transport Details Page where you can modify settings, schedules, routes, and configurations.</td>
                </tr>
                <tr>
                    <td><strong>👁️ View Transport</strong></td>
                    <td>Previews how the transport will appear on the frontend website.</td>
                </tr>
                <tr>
                    <td><strong>🚮 Move to Trash</strong></td>
                    <td>Moves the transport to trash instead of permanently deleting it. The transport can be restored later if needed.</td>
                </tr>
            </tbody>
        </table>

        <h3>📝 The Transport Details Page</h3>
        <p class="abtb_doc_section_intro">
            After clicking <strong>Clone</strong>, <strong>Edit</strong>, or <strong>Add New Transport</strong>,
            you are redirected to the Transport Details Page. This is where you fully configure transport
            information, routes, schedules, ticket types, seat plans, pricing, availability, passenger forms,
            and other settings before publishing or updating.
        </p>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-9.png"><img class="abtb_doc_screen_img" src="#" alt="Transport Lists Overview"></div>
    </div>
<?php