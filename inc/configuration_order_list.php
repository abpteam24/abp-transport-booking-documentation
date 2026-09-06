<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_booking_pdf">
        <div class="abtb_doc_page_head">
            <h2>📑 Order Lists PDF Configuration (PRO)</h2>
            <p class="abtb_doc_lede">
                The <strong>Order Lists PDF Configuration</strong> section lets you control which information appears in
                the Transport Booking Order Lists PDF. Enable or disable individual fields such as company details,
                booking information, passenger details, route information, pricing, payment method, order status, and
                Terms &amp; Conditions for complete control over the generated documents.
            </p>
        </div>

        <h3>🏢 Company &amp; Branding</h3>
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
                    <td><strong>Company Address</strong></td>
                    <td>Display the official company address at the top of the PDF.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Company Logo</strong></td>
                    <td>Display the official company logo at the top of the PDF.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Booking Summary</strong></td>
                    <td>Display the booking summary section at the top of the PDF.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>🧾 Order &amp; Post Information</h3>
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
                    <td><strong>Post ID</strong></td>
                    <td>Show or hide the related Post ID inside the PDF.</td>
                    <td>OFF</td>
                </tr>
                <tr>
                    <td><strong>Post SKU</strong></td>
                    <td>Show or hide the Post SKU in the Booking List PDF.</td>
                    <td>OFF</td>
                </tr>
                <tr>
                    <td><strong>Transport Type</strong></td>
                    <td>Display or hide the transport item category/type in the PDF.</td>
                    <td>OFF</td>
                </tr>
                <tr>
                    <td><strong>Order ID</strong></td>
                    <td>Display the WooCommerce Order ID in the PDF. Disable this option to hide or mask the Order ID.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Transport Name</strong></td>
                    <td>Display the Transport Name associated with the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Order Date</strong></td>
                    <td>Display the original order date in the Booking List PDF.</td>
                    <td>OFF</td>
                </tr>
                <tr>
                    <td><strong>Order Status</strong></td>
                    <td>Display the current order status and related status details in the PDF.</td>
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
                    <td><strong>Duration</strong></td>
                    <td>Display the total journey duration in the PDF.</td>
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
                    <td>Show or hide ticket information associated with the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Additional Services</strong></td>
                    <td>Include or exclude additional services/add-ons selected for the booking.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Client Info</strong></td>
                    <td>Include general customer/client information in the generated Booking PDF.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>💰 Pricing &amp; Payment Information</h3>
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
                    <td>Control the visibility of total pricing information in the PDF. Disable this option to generate PDFs without showing pricing details.</td>
                    <td>ON</td>
                </tr>
                <tr>
                    <td><strong>Billing Information</strong></td>
                    <td>Display or hide the customer's complete billing information.</td>
                    <td>OFF</td>
                </tr>
                <tr>
                    <td><strong>Payment Method</strong></td>
                    <td>Display the payment method used for the booking. Disable this option to generate the PDF without payment method details.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>📜 Terms &amp; Conditions</h3>
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
                    <td><strong>Terms &amp; Condition</strong></td>
                    <td>Display the configured Terms &amp; Conditions block on the final page of the PDF.</td>
                    <td>ON</td>
                </tr>
            </tbody>
        </table>

        <h3>⚙️ Configuration Behavior</h3>
        <ul>
            <li><strong>ON</strong> — The selected information will be included in the generated Order Lists PDF.</li>
            <li><strong>OFF</strong> — The selected information will be excluded from the generated Order Lists PDF.</li>
            <li><strong>Flexible PDF Output</strong> — Enable only the information required for your business to create cleaner, more focused PDF documents.</li>
            <li><strong>Privacy Control</strong> — Sensitive information such as billing details, customer information, pricing, and order information can be controlled independently.</li>
            <li><strong>Save Configuration</strong> — After changing the required options, click <em>Save Order Lists PDF Configuration</em> to apply the settings.</li>
        </ul>

        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Content tip</strong>
            Keep commonly required booking and journey information enabled, and disable unnecessary fields to create a
            cleaner and more professional Order Lists PDF. These settings are especially useful when generating PDF
            order lists for transport operators, booking managers, and administrative purposes.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/order_list_pdf.png">
            <img class="abtb_doc_screen_img" src="#" alt="Global FAQ and Terms & Conditions Configuration Overview">
        </div>
    </div>
<?php
