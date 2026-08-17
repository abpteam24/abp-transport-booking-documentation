<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_orders">
        <h3 class="abp_color_theme">📋 Orders List</h3>
        <div class="_divider_xs"></div>
        <label>
            The Orders List section provides a complete overview of all transport bookings and ticket orders.
            From here, you can search, filter, track, and manage passenger bookings from a centralized dashboard.
            The system provides advanced journey-based filtering, booking status tabs, detailed ticket information, pricing,
            payment details, and customer billing information for efficient transport booking management.
        </label>
        <h6 class="abp">🔎 Advanced Order Filtering System</h6>
        <label>
            Transport Booking provides a powerful filtering system that allows you to quickly find specific bookings
            using transport, journey, route, and order date information.
        </label>
        <ul class="abp_list_margin_xs">
            <li>
                👉 <strong>Transport:</strong> Filter bookings by a specific transport.
            </li>
            <li>
                👉 <strong>Journey Date:</strong> Search bookings for a specific journey date.
            </li>
            <li>
                👉 <strong>Journey Date Between:</strong> Search bookings within a selected journey date range.
            </li>
            <li>
                👉 <strong>From:</strong> Filter bookings by the selected boarding or pickup point.
            </li>
            <li>
                👉 <strong>To:</strong> Filter bookings by the selected dropping or destination point.
            </li>
            <li>
                👉 <strong>Order Date:</strong> Filter bookings based on the order creation date.
            </li>
        </ul>
        <h6 class="abp">📊 Booking Status Management</h6>
        <label>
            The order list includes separate status tabs so you can quickly view bookings according to their current
            booking and payment status.
        </label>
        <ul class="abp_list_margin_xs">
            <li>👉 <strong>All Booking:</strong> View all transport bookings.</li>
            <li>👉 <strong>Booking Completed:</strong> View bookings that have been successfully completed.</li>
            <li>👉 <strong>Pending Payment:</strong> View bookings waiting for payment.</li>
            <li>👉 <strong>Processing:</strong> View bookings currently being processed.</li>
            <li>👉 <strong>On Hold:</strong> View bookings currently placed on hold.</li>
            <li>👉 <strong>Completed:</strong> View completed orders.</li>
            <li>👉 <strong>Cancelled:</strong> View cancelled bookings.</li>
            <li>👉 <strong>Refunded:</strong> View refunded bookings.</li>
            <li>👉 <strong>Failed:</strong> View bookings where the payment or order process failed.</li>
            <li>👉 <strong>Draft:</strong> View draft bookings.</li>
        </ul>
        <h6 class="abp">🎫 Booking & Ticket Information</h6>
        <ul class="abp_list_margin_xs">
            <li>
                👉 <strong>Transport:</strong> View the transport associated with the booking.
            </li>
            <li>
                👉 <strong>Journey Route:</strong> View the boarding and dropping points with journey date and time.
            </li>
            <li>
                👉 <strong>Ticket Info:</strong> View selected ticket types, quantities, and ticket prices.
            </li>
            <li>
                👉 <strong>Additional Info:</strong> View additional services or other booking-related information.
            </li>
        </ul>
        <h6 class="abp">💰 Order & Payment Information</h6>
        <ul class="abp_list_margin_xs">
            <li>
                👉 <strong>Price:</strong> Displays the base ticket/order price.
            </li>
            <li>
                👉 <strong>Additional:</strong> Displays the additional service charges.
            </li>
            <li>
                👉 <strong>Total:</strong> Displays the final booking amount.
            </li>
            <li>
                👉 <strong>Payment Method:</strong> Displays the payment method used for the booking.
            </li>
            <li>
                👉 <strong>Status:</strong> Displays the current order status.
            </li>
        </ul>
        <h6 class="abp">👤 Customer & Billing Information</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 View customer billing name and email information.</li>
            <li>👉 Access billing details associated with each booking.</li>
            <li>👉 Review passenger and booking information from the order list.</li>
        </ul>
        <h6 class="abp">📋 Order Management</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 View complete transport booking information from the centralized order table.</li>
            <li>👉 Track booking and payment status quickly.</li>
            <li>👉 Review journey route, ticket, passenger, and pricing information.</li>
            <li>👉 Access detailed order information when required.</li>
            <li>👉 Delete an order when it is no longer required.</li>
        </ul>
        <h6 class="abp">📊 Order Summary</h6>
        <ul class="abp_list_margin_xs">
            <li>
                👉 The order list provides a total summary of the displayed booking amounts.
            </li>
            <li>
                👉 Ticket prices, additional service charges, and final totals can be reviewed from the summary.
            </li>
            <li>
                👉 Helps administrators quickly understand the total value of the filtered bookings.
            </li>
        </ul>
        <h6 class="abp">🚀 Benefits</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Quickly find bookings using journey and route-based filters</li>
            <li>👉 Easily track booking and payment statuses</li>
            <li>👉 View ticket, passenger, route, and pricing information in one place</li>
            <li>👉 Simplifies daily transport booking management</li>
            <li>👉 Provides a centralized overview of all transport orders</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-10.png">
            <img class="_img_control" src="#" alt="Transport Booking Orders List Overview">
        </div>
    </div>
<?php
