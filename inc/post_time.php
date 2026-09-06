<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_time">
        <div class="abtb_doc_page_head">
            <h2>⏰ Time Configuration <small>(Multiple Times in PRO)</small></h2>
            <p class="abtb_doc_lede">
                The <strong>Time</strong> tab in the Transport Details Page defines the departure and operation
                times for each transport. Configure one or multiple departure times per day, set day-wise and
                date-specific schedules, and manage separate return operation times for round-trip services.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            Time configuration determines when a transport departs and operates. You can set a single daily
            schedule or create multiple departure times within a single day. Day-wise schedules let you assign
            different times to different weekdays, while date-specific overrides handle special occasions. When
            return journeys are enabled, independent return schedules can be configured.
        </p>

        <h3>📅 Day-Wise Operation Time</h3>
        <p class="abtb_doc_section_intro">
            Day-wise operation time lets you configure different departure schedules for different days of the week.
        </p>
        <ul>
            <li>Select the days on which the transport operates.</li>
            <li>Add multiple operation times for each selected day.</li>
            <li>Use different departure schedules for different weekdays.</li>
            <li>Only the configured times for the selected day will be available to passengers.</li>
        </ul>

        <h3>📆 Date-Wise Operation Time</h3>
        <p class="abtb_doc_section_intro">
            Date-wise operation time lets you define custom departure times for specific dates, overriding the
            regular day-wise or default schedule.
        </p>
        <ul>
            <li>Select a specific operating date.</li>
            <li>Add one or multiple operation times for the selected date.</li>
            <li>Override the regular day-wise or default operation time for that date.</li>
            <li>Ideal for special schedules, holidays, events, or temporary schedule changes.</li>
        </ul>

        <h3>🔄 Return Operation Time</h3>
        <p class="abtb_doc_section_intro">
            When return journey support is enabled, separate operation times can be configured for the return route.
        </p>
        <ul>
            <li>Add one or multiple return departure times.</li>
            <li>Configure Return Day-Wise Time for different weekdays.</li>
            <li>Configure Return Date-Wise Time for specific dates.</li>
            <li>Use different schedules for forward and return journeys.</li>
        </ul>

        <h3>⚙️ Operation Time Rules</h3>
        <p class="abtb_doc_section_intro">The following rules apply to all time configurations:</p>
        <ul>
            <li>At least one operation time is required for the transport.</li>
            <li>Multiple operation times can be added for the same transport and day.</li>
            <li>Day-wise schedules are applied according to the selected weekday.</li>
            <li>Date-wise schedules override the regular day-wise or default operation time for specific dates.</li>
            <li>If no date-wise schedule is configured for a given date, the regular day-wise or default operation time is used.</li>
        </ul>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/time_config.png">
            <img class="abtb_doc_screen_img" src="#" alt="Time Configuration Overview">
        </div>
    </div>
<?php