<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_client_form">
        <h2 class="abp_color_theme">Client Forms Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Client Forms Configuration system allows you to manage and customize the information collected from passengers during the transport booking process. You can enable client forms, use global form settings, or create transport-specific fields based on your booking requirements.
        </label>
        <h6 class="abp">🌍 Global Client Forms</h6>
        <i>
            From the Global Configuration panel, you can create a reusable set of client form fields that can be applied across multiple transports.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Create reusable passenger information fields</li>
            <li>👉 Define standard fields such as First Name, Last Name, Email, Phone, Gender, Date of Birth, and other required information</li>
            <li>👉 Enable or disable individual fields</li>
            <li>👉 Maintain a consistent passenger information structure across transports</li>
        </ul>
        <h6 class="abp">🚌 Transport-Level Client Forms</h6>
        <i>
            Each transport can use the global client form or have its own customized form configuration.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Enable or disable the Client Form for the transport</li>
            <li>👉 Import fields from the Global Client Form configuration</li>
            <li>👉 Add custom fields specific to the transport</li>
            <li>👉 Modify imported fields according to transport requirements</li>
            <li>👉 Remove fields that are not required for the selected transport</li>
        </ul>
        <h6 class="abp">👤 Same Attendee Configuration</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Enable Same Attendee when the same passenger information should be used for multiple tickets</li>
            <li>👉 Disable it when separate passenger information is required for each ticket</li>
            <li>👉 This option helps simplify passenger information collection when multiple tickets belong to the same attendee</li>
        </ul>
        <h6 class="abp">⚙️ Form Field Configuration</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Form Title — Define the passenger information field label displayed to users</li>
            <li>👉 Unique ID — Set a unique identifier for each form field</li>
            <li>👉 Form Type — Select the appropriate field type such as Text, Email, Select, Date, and other supported types</li>
            <li>👉 Value Option — Define available options for fields such as Select</li>
            <li>👉 Default Value — Set a default value for the field when required</li>
            <li>👉 Required — Specify whether the passenger must provide the information before booking</li>
            <li>👉 Field Order — Arrange the fields in the preferred order</li>
        </ul>
        <h6 class="abp">🔄 Import & Customization System</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Import the Global Client Form with one click</li>
            <li>👉 Edit imported fields according to the transport requirements</li>
            <li>👉 Combine global and custom passenger information fields</li>
            <li>👉 Add new fields without changing the global configuration</li>
            <li>👉 Remove unnecessary fields from the transport-level form</li>
        </ul>
        <h6 class="abp">🚀 Benefits</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Collect only the passenger information required for each transport</li>
            <li>👉 Save configuration time with reusable global forms</li>
            <li>👉 Support different passenger information requirements for different transports</li>
            <li>👉 Provide flexible and organized passenger data collection during booking</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/client_form.png">
            <img class="_img_control" src="#" alt="Client Forms Configuration Overview">
        </div>
    </div>
<?php
