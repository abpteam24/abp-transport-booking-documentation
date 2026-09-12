<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_installation">
        <div class="abtb_doc_page_head">
            <h2>⬇️ Installation &amp; Setup</h2>
            <p class="abtb_doc_lede">
                Install the <strong>free</strong> plugin from the WordPress repository (or upload the ZIP), then —
                if you own a license — upload <strong>ABP Transport Booking PRO</strong> on top of it. Follow the
                steps below in order: each step builds on the one before it.
            </p>
        </div>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>⚠️ Before you begin</strong>
            <ol class="abtb_doc_steps">
                <li>Install and <strong>activate WooCommerce</strong> first — both plugins depend on it.</li>
                <li>Check your server:
                    <strong>WordPress 6.0+</strong>, <strong>PHP 7.4+</strong>, <strong>MySQL 5.7+</strong>,
                    <strong>WooCommerce 8.0+</strong>.</li>
                <li>Take a backup of your site before installing anything new.</li>
            </ol>
        </div>

        <h3>🆓 Step 1 — Install the Free Plugin (from WordPress.org)</h3>
        <p class="abtb_doc_section_intro">
            <strong>Pick one method.</strong> The easiest way is to install directly from the WordPress
            repository:
        </p>
        <ol class="abtb_doc_steps">
            <li>Go to <strong>Plugins → Add New Plugin</strong> in the admin dashboard.</li>
            <li>Type <strong>&quot;ABP Transport Booking&quot;</strong> in the search box and press Enter.</li>
            <li>Click <strong>Install Now</strong> on the <em>ABP Transport Booking</em> plugin card.</li>
            <li>Click <strong>Activate</strong> when the installation finishes.</li>
        </ol>

        <h3>📦 Step 2 — Install by Uploading a ZIP (for free or PRO)</h3>
        <p class="abtb_doc_section_intro">
            If you have the ZIP file locally (downloaded from your account on <a href="https://abp-team.com"
                target="_blank" rel="noopener">abp-team.com</a>), use the upload method instead:
        </p>
        <ol class="abtb_doc_steps">
            <li>Go to <strong>Plugins → Add New Plugin</strong>.</li>
            <li>Click the <strong>Upload Plugin</strong> button at the top.</li>
            <li>Choose the <code>.zip</code> file and click <strong>Install Now</strong>.</li>
            <li>Click <strong>Activate Plugin</strong> to make it live.</li>
        </ol>
        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Tip</strong>
            You can use either method for the free plugin. For PRO you must use the ZIP upload — it is not
            available in the WordPress repository.
        </div>

        <h3>⭐ Step 3 — Install &amp; Activate PRO (only if you own a license)</h3>
        <p class="abtb_doc_section_intro">
            The PRO plugin does not work alone — it needs the <strong>free plugin</strong> and
            <strong>WooCommerce</strong> to be active first. Follow this exact order:
        </p>
        <ol class="abtb_doc_steps">
            <li>Make sure <strong>WooCommerce</strong> and <strong>ABP Transport Booking (free)</strong> are
                installed and <strong>active</strong>.</li>
            <li>Upload and activate the <strong>abp-transport-booking-pro.zip</strong> file using the upload method
                in the previous step.</li>
            <li>Open the new <strong>ABP Transport Booking</strong> menu in the admin sidebar → go to the
                <strong>License</strong> tab.</li>
            <li>Paste your <strong>license key</strong> (sent to your e-mail / visible in your account) and click
                <strong>Activate License</strong>. Wait for the status to show <strong>Active</strong>.</li>
            <li>If the plugin asks to install the <strong>ABP PDF Tools</strong> (needed for PDF tickets), click
                <strong>Install</strong> and wait for it to finish.</li>
        </ol>
        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>ℹ️ Why PRO needs the free plugin</strong>
            PRO is an add-on that extends the free plugin. If the free plugin is deactivated, PRO will not load —
            its extra menu items (Add Order, Cancel Requests, Global Discount, Partial Payment, PDF/CSV tools)
            will simply disappear.
        </div>

        <h3>🔧 Step 4 — First-time Setup (same for free &amp; PRO)</h3>
        <p class="abtb_doc_section_intro">
            After the plugins are active, configure them in this order so everything has the data it needs:
        </p>
        <ol class="abtb_doc_steps">
            <li>Go to <strong>ABP Transport Booking → Configuration</strong> and set the <strong>transport
                label</strong>, store name and general settings.</li>
            <li>Go to <strong>Global Data → Dates</strong> and set the global date format, buffer and advance-booking
                window.</li>
            <li>Create reusable <strong>Stops / Locations</strong> (Global Data) — boarding and drop-off points.</li>
            <li>Create <strong>Ticket types</strong> and/or <strong>Seat plans</strong> under
                <strong>Ticket/Seat Plan</strong> that the transports will reuse.</li>
            <li>Open <strong>Lists → Add New</strong> to create your first transport.</li>
            <li>Inside the transport editor fill in <strong>General → Route → Price → Date → Time → Ticket</strong>
                in order (the tabs run left to right).</li>
            <li><strong>Publish</strong> the transport and place a test booking through the WooCommerce checkout to
                confirm tickets and seats work.</li>
            <li>(PRO) Return to <strong>Configuration → PDF</strong> to set the ticket logo, colors and download
                permissions.</li>
        </ol>
        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Recommended order of work</strong>
            Global data first (Stops, Ticket types, Seat plans, Categories) → then transports (Lists) → then
            Orders/Bookings. This way every transport can reuse already-created global data.
        </div>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>❓ Plugin not active?</strong>
            If you get a warning about WooCommerce, activate WooCommerce first. If PRO does not appear, check that
            the free <strong>ABP Transport Booking</strong> plugin is active — PRO loads only when both are active.
            For licenses, make sure the License tab shows <strong>Active</strong>.
        </div>
    </div>
<?php