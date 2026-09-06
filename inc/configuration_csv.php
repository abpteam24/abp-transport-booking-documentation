<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_csv">
        <div class="abtb_doc_page_head">
            <h2>📑 Order Lists CSV Configuration (PRO)</h2>
            <p class="abtb_doc_lede">
                The <strong>Order Lists CSV Configuration</strong> section lets you control which information is
                included in the Transport Booking Order Lists CSV file. Enable or disable individual fields such as
                order information, transport details, route information, ticket details, pricing, customer information,
                payment method, billing information, and order status for flexible control over the exported data.
            </p>
        </div>

        <h3>🧾 Order &amp; Transport Information</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Order ID</strong></td>
                    <td>Display the WooCommerce Order ID in the exported CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Transport Name</strong></td>
                    <td>Display the Transport Name associated with the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Post ID</strong></td>
                    <td>Show or hide the related Post ID in the CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Post SKU</strong></td>
                    <td>Display the Post SKU associated with the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Transport Type</strong></td>
                    <td>Include the transport item category/type in the exported CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Order Date</strong></td>
                    <td>Display the original order date in the Order Lists CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Order Status</strong></td>
                    <td>Include the current order status in the exported CSV file.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>🚌 Journey &amp; Route Information</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Start Point</strong></td>
                    <td>Display the starting point of the journey in the CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Start Time</strong></td>
                    <td>Display the scheduled start time of the journey.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Boarding Point</strong></td>
                    <td>Display the selected boarding point for the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Boarding Time</strong></td>
                    <td>Display the scheduled boarding time.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Arrival Point</strong></td>
                    <td>Display the arrival point of the journey.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Arrival Time</strong></td>
                    <td>Display the scheduled arrival time.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Pickup Point</strong></td>
                    <td>Display the selected pickup point when available.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Pickup Time</strong></td>
                    <td>Display the scheduled pickup time.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Drop-off Point</strong></td>
                    <td>Display the selected drop-off point.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Drop-off Time</strong></td>
                    <td>Display the scheduled drop-off time.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Duration</strong></td>
                    <td>Display the total journey duration in the CSV file.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>🎟️ Ticket &amp; Booking Details</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Ticket Info</strong></td>
                    <td>Include ticket information associated with the booking in the CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Additional Services</strong></td>
                    <td>Include additional services or add-ons selected for the booking.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>👤 Customer &amp; Billing Information</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Client Info</strong></td>
                    <td>Include general customer/client information in the exported CSV file.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Billing Information</strong></td>
                    <td>Include the customer's complete billing details in the CSV file.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>💰 Price &amp; Payment Information</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Price Info</strong></td>
                    <td>Control the visibility of pricing information in the CSV file. Disable this option to export booking data without pricing details.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Payment Method</strong></td>
                    <td>Include the payment method used for the booking in the exported CSV file.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>⚙️ Configuration Behavior</h3>
        <ul>
            <li><strong>ON</strong> — The selected field will be included in the generated Order Lists CSV file.</li>
            <li><strong>OFF</strong> — The selected field will be excluded from the generated Order Lists CSV file.</li>
            <li><strong>Flexible Export</strong> — Enable only the fields required for your operational, reporting, or administrative needs.</li>
            <li><strong>Data Privacy</strong> — Disable customer, billing, pricing, or payment-related fields when those details are not required in the exported file.</li>
            <li><strong>Save Configuration</strong> — After adjusting the required options, click <em>Save Order Lists CSV Configuration</em> to save and apply your settings.</li>
        </ul>

        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Content tip</strong>
            Keep the fields required for your daily transport operations enabled and disable unnecessary information to
            create a cleaner and more focused CSV export.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/csv.png">
            <img class="abtb_doc_screen_img" src="#" alt="Transport Booking Order Lists CSV Configuration">
        </div>
    </div>
<?php
