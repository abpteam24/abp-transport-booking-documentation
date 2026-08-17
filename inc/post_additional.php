<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_additional">
        <h2 class="abp_color_theme">Additional Services Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Additional Services Configuration system allows you to manage extra services or optional items that passengers can add to their transport booking. These services can be configured globally and imported into individual transports, giving you flexible control over optional services, quantities, pricing, and availability.
        </label>
        <h6 class="abp_gap_xs">🌍 Global Additional Services</h6>
        <i>
            From the Global Configuration panel, you can define a reusable set of additional services that can be used across multiple transports.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Create reusable additional services for transport bookings</li>
            <li>👉 Define service name, icon/image, quantity, price, maximum quantity, and description</li>
            <li>👉 Set whether an additional service is returnable or non-returnable</li>
            <li>👉 Maintain a centralized additional service list for multiple transports</li>
        </ul>
        <h6 class="abp_gap_xs">🚌 Transport-Level Configuration</h6>
        <i>
            Each transport can have its own additional services configuration based on the services available for that particular transport.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Enable or disable additional services for the transport</li>
            <li>👉 Import services directly from the global configuration</li>
            <li>👉 Add new custom services specific to the transport</li>
            <li>👉 Modify imported or custom services according to transport requirements</li>
            <li>👉 Remove services that are not available for the selected transport</li>
        </ul>
        <h6 class="abp_gap_xs">⚙️ Service Configuration Options</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Icon / Image — Add a visual representation for the service</li>
            <li>👉 Service Name — Define the name displayed to passengers</li>
            <li>👉 Quantity — Set the available quantity of the service</li>
            <li>👉 Price — Define the additional charge for the service</li>
            <li>👉 Maximum Quantity — Limit how many units a passenger can select</li>
            <li>👉 Returnable or Not — Specify whether the service is applicable for return or refundable use</li>
            <li>👉 Description — Add additional information or instructions about the service</li>
        </ul>
        <h6 class="abp_gap_xs">🔄 Import & Flexibility System</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Import reusable services from the global configuration</li>
            <li>👉 Edit imported services based on the transport requirements</li>
            <li>👉 Combine global and transport-specific services</li>
            <li>👉 Add custom services without modifying the global service list</li>
        </ul>
        <h6 class="abp_gap_xs">🚀 Common Transport Services</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Extra Luggage</li>
            <li>👉 Additional Baggage</li>
            <li>👉 Priority Boarding</li>
            <li>👉 Meal or Food Service</li>
            <li>👉 Wi-Fi Access</li>
            <li>👉 Bicycle or Sports Equipment</li>
            <li>👉 Special Passenger Assistance</li>
            <li>👉 Other Optional Transport Services</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/additional.png">
            <img class="_img_control" src="#" alt="Additional Services Configuration Overview">
        </div>
    </div>
<?php
