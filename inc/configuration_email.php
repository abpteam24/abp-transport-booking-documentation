<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_email">
        <div class="abtb_doc_page_head">
            <h2>📧 E-Mail Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>E-Mail</strong> tab (<strong>PRO</strong>) controls automated booking notifications, PDF ticket attachments,
                email templates, order-status triggers, and sender information. All settings on this page apply site-wide.
            </p>
        </div>

        <h3>⚙️ Overview</h3>
        <p class="abtb_doc_section_intro">
            Transport Booking Pro can send automated emails to customers whenever a booking is placed or its status changes.
            Each email can include a PDF ticket attachment. The email body supports template shortcodes that are replaced
            with real booking data at send time. Separate shortcodes are available for the initial email and for re-sent emails.
        </p>

        <h3>📝 Settings</h3>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Send Mail</strong></td>
                    <td>Enable or disable automated email notifications for bookings. Turn <strong>ON</strong> to send booking emails, or turn <strong>OFF</strong> to disable them. Default: <strong>ON</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Send PDF</strong></td>
                    <td>Choose whether the generated PDF ticket should be attached to the booking email. Turn <strong>ON</strong> to attach the PDF ticket, or turn <strong>OFF</strong> to send the email without the PDF attachment. Default: <strong>ON</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Target Order Statuses</strong></td>
                    <td>Select the order statuses that should trigger the automated booking email. Available statuses: <strong>Pending Payment</strong>, <strong>Processing</strong>, <strong>On Hold</strong>, <strong>Completed</strong>, <strong>Cancelled</strong>, <strong>Refunded</strong>, <strong>Failed</strong>, and <strong>Draft</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Mail Subject</strong></td>
                    <td>Enter a custom subject line for customer booking emails. If left blank, the site title is used as the default email subject.</td>
                </tr>
                <tr>
                    <td><strong>Admin Notification Email</strong></td>
                    <td>Enter an email address where the administrator should receive a notification when a new booking or order is placed. This can also be used to receive a copy of the booking PDF ticket or notification.</td>
                </tr>
                <tr>
                    <td><strong>Mail From Name</strong></td>
                    <td>Enter the sender name displayed in outgoing booking emails. If left blank, the plugin uses the configured fallback or site information.</td>
                </tr>
                <tr>
                    <td><strong>Mail From Email</strong></td>
                    <td>Enter the email address used as the sender address for outgoing booking emails. Use a valid address for reliable delivery.</td>
                </tr>
            </tbody>
        </table>

        <h3>🔤 Mail Content Shortcodes</h3>
        <p class="abtb_doc_section_intro">
            Use the following shortcodes in the <strong>Mail Content</strong> field to display actual booking data in the customer email.
            The plugin replaces each shortcode with the corresponding information when the email is sent.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Shortcode</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><code>#post_name</code></td><td>Displays the transport name.</td></tr>
                <tr><td><code>#client_name</code></td><td>Displays the customer or traveller name.</td></tr>
                <tr><td><code>#order_id</code></td><td>Displays the order ID.</td></tr>
                <tr><td><code>#order_date</code></td><td>Displays the order date.</td></tr>
                <tr><td><code>#status</code></td><td>Displays the order status.</td></tr>
                <tr><td><code>#payment</code></td><td>Displays the payment method.</td></tr>
                <tr><td><code>#booking_details</code></td><td>Displays the booking details.</td></tr>
                <tr><td><code>#ticket_details</code></td><td>Displays the ticket details.</td></tr>
                <tr><td><code>#bill_info</code></td><td>Displays the billing information.</td></tr>
                <tr><td><code>#price_details</code></td><td>Displays the total price details.</td></tr>
            </tbody>
        </table>

        <h3>🔁 Re-send Mail Content Shortcodes</h3>
        <p class="abtb_doc_section_intro">
            Use the same shortcodes in the <strong>Re-send Mail Content</strong> field to display booking data when an existing booking
            email or ticket is re-sent. The plugin replaces these shortcodes with the corresponding booking information at re-send time.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Shortcode</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><code>#post_name</code></td><td>Displays the transport name.</td></tr>
                <tr><td><code>#client_name</code></td><td>Displays the customer or traveller name.</td></tr>
                <tr><td><code>#order_id</code></td><td>Displays the order ID.</td></tr>
                <tr><td><code>#order_date</code></td><td>Displays the order date.</td></tr>
                <tr><td><code>#status</code></td><td>Displays the order status.</td></tr>
                <tr><td><code>#payment</code></td><td>Displays the payment method.</td></tr>
                <tr><td><code>#booking_details</code></td><td>Displays the booking details.</td></tr>
                <tr><td><code>#ticket_details</code></td><td>Displays the ticket details.</td></tr>
                <tr><td><code>#bill_info</code></td><td>Displays the billing information.</td></tr>
                <tr><td><code>#price_details</code></td><td>Displays the total price details.</td></tr>
            </tbody>
        </table>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/email.png"><img class="abtb_doc_screen_img" src="#" alt="E-Mail"></div>
    </div>
<?php
