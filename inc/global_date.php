<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_date_global">
        <h2 class="abp_color_theme_gap_xs">📅 Transport Booking - Global Dates Configuration </h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">Set a global date configuration for your Transport that can be reused across all posts, with options to import and customize anytime.</i>

        <table class="abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Date Format</th>
                <td colspan="3">Choose the date format that should be used throughout the Transport Booking system. You can select a different format according to your website requirements.</td>
            </tr>
            <tr>
                <th class="_color_theme">Time Format</th>
                <td colspan="3">Choose the time format that should be used throughout the Transport Booking system. You can select a different format according to your website requirements.</td>
            </tr>
            <tr>
                <th class="_color_theme">Buffer time in MIN (Optional)</th>
                <td colspan="3">Enter the number of minutes before the transport starts when ticket sales should be closed. If not specified, it will default to 0. For example, 1 hour equals 60 minutes.</td>
            </tr>
            <tr>
                <th class="_color_theme">Number of advance booking date</th>
                <td colspan="3">Enter the number of days in advance that customers can book the transport. By default, the advance booking period is set to 28 days. This option is optional.</td>
            </tr>
            <tr>
                <th class="_color_theme">Operational Date Type</th>
                <td colspan="3">Select how the Transport operational dates should be configured. Choose <strong>Specific Dates</strong> for selected individual operating dates, or <strong>Periodic Dates</strong> for a recurring operational schedule. The default operational date type is Periodic Dates.</td>
            </tr>
            <tr>
                <th class="_color_theme">Periodic after</th>
                <td colspan="3">Enter the number of days after which the Transport operation should repeat. For example, if the Transport operates every day, set this value to <strong>1</strong>.</td>
            </tr>
            <tr>
                <th class="_color_theme">Launching Date (Optional)</th>
                <td colspan="3">Set the Transport Launching Date. If no launching date is provided, the Transport operation will start from the current date.</td>
            </tr>
            <tr>
                <th class="_color_theme">Terminate Date (Optional)</th>
                <td colspan="3">Set the Transport Terminate Date. If no terminate date is provided, the Transport will continue running periodically according to the configured operational dates.</td>
            </tr>
            <tr>
                <th class="_color_theme">Special On/Off Date (Optional)</th>
                <td colspan="3">Enable the required options to configure special date settings. Available options include <strong>Weekend</strong>, <strong>Specific Off Dates</strong>, <strong>Special On Dates</strong>, and <strong>Off Dates Range</strong>. A date configured as a Special On Date will remain active even if it falls within an Off Date Range or on a weekend.</td>
            </tr>
            <tr>
                <th class="_color_theme">Weekend (Optional)</th>
                <td colspan="3">Select the days that should be treated as weekends for the Transport. The selected days can be used as non-operational days when the Weekend option is enabled. By default, all days are open.</td>
            </tr>
            <tr>
                <th class="_color_theme">Specific Off Dates (Optional)</th>
                <td colspan="3">Add individual dates when the Transport should not operate. These dates will be treated as specific operational off dates.</td>
            </tr>
            <tr>
                <th class="_color_theme">Special On Dates (Optional)</th>
                <td colspan="3">Add individual dates that should remain active even if the date falls within an Off Date Range or on a configured weekend.</td>
            </tr>
            <tr>
                <th class="_color_theme">Off Date Range (Optional)</th>
                <td colspan="3">Add date ranges between two dates when the Transport should not operate. Multiple off date ranges can be added according to the Transport schedule.</td>
            </tr>
            <tr>
                <th class="_color_theme">Save Date Configuration</th>
                <td colspan="3">Click <strong>Save Date Configuration</strong> to save the global date settings and apply the configured operational schedule.</td>
            </tr>
            </tbody>
        </table>

        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-12.png"><img class="_img_control" src="#" alt="Global Dates Configuration"></div>
    </div>
<?php
