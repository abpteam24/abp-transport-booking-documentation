<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_email">
        <h2 class="abp_color_theme_gap_xs">📧Transport Booking - E-Mail Configuration </h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">Configure automated booking emails, PDF ticket attachments, email templates, order status triggers, and sender information.</i>
        <table class="abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Send Mail ?</th>
                <td colspan="3">Enable or disable automated email notifications for bookings. Turn <strong class="abp_color_theme">ON</strong> to send booking emails, or turn <strong class="abp_color_theme">OFF</strong> to disable them. By default, this option is <strong class="abp_color_theme">ON</strong>.</td>
            </tr>
            <tr>
                <th class="_color_theme">Send PDF ?</th>
                <td colspan="3">Choose whether the generated PDF ticket should be attached to the booking email. Turn <strong class="abp_color_theme">ON</strong> to attach the PDF ticket, or turn <strong class="abp_color_theme">OFF</strong> to send the email without the PDF attachment. By default, this option is <strong class="abp_color_theme">ON</strong>.</td>
            </tr>
            <tr>
                <th class="_color_theme">Target Order Statuses</th>
                <td colspan="3">Select the order statuses that should trigger the automated booking email. Available statuses are <strong>Pending Payment</strong>, <strong>Processing</strong>, <strong>On Hold</strong>, <strong>Completed</strong>, <strong>Cancelled</strong>, <strong>Refunded</strong>, <strong>Failed</strong>, and <strong>Draft</strong>.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail Content</th>
                <td colspan="3">
                    <span>Use the following shortcode to display actual booking data in the customer email.</span><br>
                    <span><strong style="color:#e67c30">#post_name</strong> : Displays the Transport Name.</span><br>
                    <span><strong style="color:#e67c30">#client_name</strong> : Displays the Customer/Traveller Name.</span><br>
                    <span><strong style="color:#e67c30">#order_id</strong> : Displays the Order ID.</span><br>
                    <span><strong style="color:#e67c30">#order_date</strong> : Displays the Order Date.</span><br>
                    <span><strong style="color:#e67c30">#status</strong> : Displays the Order Status.</span><br>
                    <span><strong style="color:#e67c30">#payment</strong> : Displays the Payment Method.</span><br>
                    <span><strong style="color:#e67c30">#booking_details</strong> : Displays the Booking Details.</span><br>
                    <span><strong style="color:#e67c30">#ticket_details</strong> : Displays the Ticket Details.</span><br>
                    <span><strong style="color:#e67c30">#bill_info</strong> : Displays the Billing Information.</span><br>
                    <span><strong style="color:#e67c30">#price_details</strong> : Displays the Total Price Details.</span><br>
                    <span>When the email is sent, the plugin automatically replaces these shortcodes with the corresponding booking information.</span>
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Re-send Mail Content</th>
                <td colspan="3">
                    <span>Use the following shortcode to display actual booking data when an existing booking email or ticket is sent again.</span><br>
                    <span><strong style="color:#e67c30">#post_name</strong> : Displays the Transport Name.</span><br>
                    <span><strong style="color:#e67c30">#client_name</strong> : Displays the Customer/Traveller Name.</span><br>
                    <span><strong style="color:#e67c30">#order_id</strong> : Displays the Order ID.</span><br>
                    <span><strong style="color:#e67c30">#order_date</strong> : Displays the Order Date.</span><br>
                    <span><strong style="color:#e67c30">#status</strong> : Displays the Order Status.</span><br>
                    <span><strong style="color:#e67c30">#payment</strong> : Displays the Payment Method.</span><br>
                    <span><strong style="color:#e67c30">#booking_details</strong> : Displays the Booking Details.</span><br>
                    <span><strong style="color:#e67c30">#ticket_details</strong> : Displays the Ticket Details.</span><br>
                    <span><strong style="color:#e67c30">#bill_info</strong> : Displays the Billing Information.</span><br>
                    <span><strong style="color:#e67c30">#price_details</strong> : Displays the Total Price Details.</span><br>
                    <span>The plugin replaces these shortcodes with the corresponding booking information when the email is re-sent.</span>
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Mail Subject</th>
                <td colspan="3">Enter a custom subject line for customer booking emails. If left blank, the site title will be used as the default email subject.</td>
            </tr>
            <tr>
                <th class="_color_theme">Admin Notification Email</th>
                <td colspan="3">Enter an email address where the administrator should receive a notification when a new booking/order is successfully placed. This can be used to receive a copy of the booking PDF ticket or booking notification.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail From Name</th>
                <td colspan="3">Enter the sender name that should be displayed in outgoing booking emails. If left blank, the plugin will use the configured fallback/site information.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail From Email</th>
                <td colspan="3">Enter the email address that should be used as the sender address for outgoing booking emails. Use a valid email address for reliable email delivery.</td>
            </tr>
            </tbody>
        </table>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/email.png"><img class="_img_control" src="#" alt="E-Mail"></div>
    </div>
<?php
