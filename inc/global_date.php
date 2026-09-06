<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_date_global">
        <div class="abtb_doc_page_head">
            <h2>📅 Global Date Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Date Configuration</strong> screen under the <em>Global Data</em> tab lets you define
                the date format, time format, buffer time, advance-booking window, and full operational schedule for
                every transport post. These settings can be imported into individual transports and overridden per post
                when needed.
            </p>
        </div>

        <h3>⚙️ Date &amp; Time Settings</h3>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Date Format</strong></td>
                    <td>Choose the date format used throughout the Transport Booking system. Select a format that matches your website's requirements.</td>
                </tr>
                <tr>
                    <td><strong>Time Format</strong></td>
                    <td>Choose the time format used throughout the Transport Booking system. Select a format that matches your website's requirements.</td>
                </tr>
                <tr>
                    <td><strong>Buffer time in MIN (Optional)</strong></td>
                    <td>Enter the number of minutes before departure when ticket sales should close. For example, 1&nbsp;hour equals 60&nbsp;minutes. If left empty, this defaults to <strong>0</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Number of advance booking date</strong></td>
                    <td>Enter the number of days in advance that customers can book transport. The default is <strong>28</strong>&nbsp;days. This option is optional.</td>
                </tr>
            </tbody>
        </table>

        <h3>🗓️ Operational Date Configuration</h3>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Operational Date Type</strong></td>
                    <td>Select how operational dates are configured. Choose <strong>Specific Dates</strong> for individual operating dates, or <strong>Periodic Dates</strong> for a recurring schedule. The default is <strong>Periodic Dates</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Periodic after</strong></td>
                    <td>Enter the number of days after which the operational schedule repeats. For example, set this to <strong>1</strong> for daily operations.</td>
                </tr>
                <tr>
                    <td><strong>Launching Date (Optional)</strong></td>
                    <td>Set the transport's launch date. If left empty, operations begin from the current date.</td>
                </tr>
                <tr>
                    <td><strong>Terminate Date (Optional)</strong></td>
                    <td>Set the transport's termination date. If left empty, the transport continues running according to the configured operational schedule.</td>
                </tr>
            </tbody>
        </table>

        <h3>🚫 Special On/Off Dates</h3>
        <p class="abtb_doc_section_intro">
            Configure exceptions to the regular operational schedule. A date configured as a <strong>Special On Date</strong>
            remains active even if it falls within an off-date range or on a weekend.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Special On/Off Date (Optional)</strong></td>
                    <td>Enable the required options to configure special date settings. Available options include <strong>Weekend</strong>, <strong>Specific Off Dates</strong>, <strong>Special On Dates</strong>, and <strong>Off Dates Range</strong>.</td>
                </tr>
                <tr>
                    <td><strong>Weekend (Optional)</strong></td>
                    <td>Select the days that should be treated as weekends. Selected days can be used as non-operational days when the Weekend option is enabled. By default, all days are open.</td>
                </tr>
                <tr>
                    <td><strong>Specific Off Dates (Optional)</strong></td>
                    <td>Add individual dates when the transport should not operate.</td>
                </tr>
                <tr>
                    <td><strong>Special On Dates (Optional)</strong></td>
                    <td>Add individual dates that should remain active even if the date falls within an off-date range or on a configured weekend.</td>
                </tr>
                <tr>
                    <td><strong>Off Date Range (Optional)</strong></td>
                    <td>Add date ranges during which the transport should not operate. Multiple off-date ranges can be configured to match the transport schedule.</td>
                </tr>
            </tbody>
        </table>

        <h3>💾 Saving the Configuration</h3>
        <p class="abtb_doc_section_intro">
            Click <strong>Save Date Configuration</strong> to persist all global date settings and apply the configured
            operational schedule.
        </p>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-12.png"><img class="abtb_doc_screen_img" src="#" alt="Global Dates Configuration"></div>
    </div>
<?php
