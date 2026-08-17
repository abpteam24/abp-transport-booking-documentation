<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_date">
        <h3 class="abp_color_theme">Date Configuration</h3>
        <div class="_divider_xxs"></div>
        <label>The Date Configuration system allows you to control and define the operational dates for each transport in a flexible way. You can use global date settings or configure transport-specific dates, including specific dates, periodic dates, launching and terminating dates, weekends, special on/off dates, and off-date ranges.</label>
        <h6 class="abp">📅 Flexible Date Configuration</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Use Global Date Configuration to apply shared date rules across transports</li>
            <li>👉 Configure transport-specific date settings when global configuration is disabled</li>
            <li>👉 Select Specific Dates for individual transport operating dates</li>
            <li>👉 Configure Periodic Dates for recurring transport operations</li>
            <li>👉 Set a Launching Date and Terminate Date for the transport operation period</li>
        </ul>
        <h6 class="abp">🌍 Global Date Configuration</h6>
        <i>The system allows you to import and apply the Global Date Configuration from the global settings.</i>
        <ul class="abp_list_margin_xs">
            <li>👉 When Global Date Configuration is ENABLED, the transport follows the global date settings</li>
            <li>👉 When Global Date Configuration is DISABLED, you can configure custom date rules for the individual transport</li>
            <li>👉 Use Import Global Date Configuration to load the configured global date settings</li>
        </ul>
        <h6 class="abp">⚙️ Operational Date Type</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Specific Dates — Define a list of individual dates when the transport will operate</li>
            <li>👉 Periodic Dates — Configure the transport to operate periodically after a defined number of days</li>
        </ul>
        <h6 class="abp">🚀 Transport Operation Period</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Launching Date — Set the date when the transport operation will start</li>
            <li>👉 Terminate Date — Set the date when the transport operation will end</li>
            <li>👉 Periodic After — Define the number of days after which the transport will operate again when using Periodic Dates</li>
        </ul>
        <h6 class="abp">📅 Special Date Configuration</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Weekend — Select the days of the week that should be treated as weekends</li>
            <li>👉 Specific Off Dates — Add individual dates when the transport will not operate</li>
            <li>👉 Special On Dates — Add individual dates that should remain active even if they fall within an off-date range or weekend</li>
            <li>👉 Off Date Range — Define a date range during which the transport will not operate</li>
        </ul>
        <h6 class="abp">⚙️ Smart Workflow Behavior</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Global Date Configuration = ON → The transport uses the configured global date rules</li>
            <li>👉 Global Date Configuration = OFF → The transport can use its own custom date configuration</li>
            <li>👉 Specific On Dates can override an off-date range or weekend restriction</li>
            <li>👉 Date configuration can be adjusted according to the transport's operational schedule</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/date_priodic.png">
            <img class="_img_control" src="#" alt="Periodic Date Configuration Overview">
        </div>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/date_specific.png">
            <img class="_img_control" src="#" alt="Specific Date Configuration Overview">
        </div>
    </div>
<?php
