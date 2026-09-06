<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_date">
        <div class="abtb_doc_page_head">
            <h2>📅 Date Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>Date</strong> tab in the Transport Details Page controls the operational dates for
                each transport. Use global date settings for shared rules or configure transport-specific dates
                including periodic schedules, specific dates, weekends, and off-date ranges.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            The date configuration system offers flexible scheduling for transport operations. You can apply a
            single set of date rules across all transports through the global configuration, or override those
            rules on a per-transport basis. Special dates, weekends, and off-date ranges give you fine-grained
            control over when a transport is available for booking.
        </p>

        <h3>🌍 Global Date Configuration</h3>
        <p class="abtb_doc_section_intro">
            The global date configuration lets you define shared date rules once and apply them to multiple
            transports. Individual transports can opt in or out.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Setting</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Global Date Configuration ON</strong></td>
                    <td>The transport follows the global date settings configured in the plugin's global options.</td>
                </tr>
                <tr>
                    <td><strong>Global Date Configuration OFF</strong></td>
                    <td>The transport uses its own custom date configuration instead of the global rules.</td>
                </tr>
                <tr>
                    <td><strong>Import Global Date Configuration</strong></td>
                    <td>Loads the configured global date settings into the transport's local date configuration.</td>
                </tr>
            </tbody>
        </table>

        <h3>⚙️ Operational Date Type</h3>
        <p class="abtb_doc_section_intro">
            When custom date configuration is enabled, you choose how the transport's operating dates are
            determined:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Specific Dates</strong></td>
                    <td>Define a list of individual dates on which the transport will operate.</td>
                </tr>
                <tr>
                    <td><strong>Periodic Dates</strong></td>
                    <td>Configure the transport to operate periodically after a defined number of days.</td>
                </tr>
            </tbody>
        </table>

        <h3>🚀 Transport Operation Period</h3>
        <p class="abtb_doc_section_intro">
            Set the date range and recurrence for the transport's operation:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Launching Date</strong></td>
                    <td>The date when the transport operation starts.</td>
                </tr>
                <tr>
                    <td><strong>Terminate Date</strong></td>
                    <td>The date when the transport operation ends.</td>
                </tr>
                <tr>
                    <td><strong>Periodic After</strong></td>
                    <td>The number of days after which the transport will operate again when using Periodic Dates.</td>
                </tr>
            </tbody>
        </table>

        <h3>📅 Special Date Configuration</h3>
        <p class="abtb_doc_section_intro">
            Fine-tune availability with weekends, exception dates, and off-date ranges:
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
                    <td><strong>Weekend</strong></td>
                    <td>Selects the days of the week that should be treated as weekends (non-operating days).</td>
                </tr>
                <tr>
                    <td><strong>Specific Off Dates</strong></td>
                    <td>Individual dates when the transport will not operate.</td>
                </tr>
                <tr>
                    <td><strong>Special On Dates</strong></td>
                    <td>Individual dates that remain active even if they fall within an off-date range or weekend.</td>
                </tr>
                <tr>
                    <td><strong>Off Date Range</strong></td>
                    <td>A date range during which the transport will not operate.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>ℹ️ Special On Dates override restrictions</strong>
            Special On Dates take priority — they keep the transport active even when it would otherwise be
            closed due to an off-date range or weekend rule.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/date_priodic.png">
            <img class="abtb_doc_screen_img" src="#" alt="Periodic Date Configuration Overview">
        </div>
        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/date_specific.png">
            <img class="abtb_doc_screen_img" src="#" alt="Specific Date Configuration Overview">
        </div>
    </div>
<?php