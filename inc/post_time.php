<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_time">
        <h3 class="abp_color_theme_gap_xs">⏰ Time Configuration(multiple time in Pro)</h3>
        <div class="_divider_xxs"></div>
        <label>The Time Configuration system allows you to define the departure and operation times for each transport. You can configure multiple operation times, use day-wise schedules, set date-specific times, and manage separate return operation times when the transport supports return journeys.</label>
        <h6 class="abp">⏰ Flexible Operation Time</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Add one or multiple operation times for the same transport </li>
            <li>👉 Configure multiple departure times within a single day</li>
            <li>👉 Set different schedules based on weekdays</li>
            <li>👉 Configure date-specific operation times for special dates</li>
            <li>👉 Manage separate operation times for forward and return journeys</li>
        </ul>
        <h6 class="abp">📅 Day-Wise Operation Time</h6>
        <i>Day-wise Operation Time allows you to configure different departure schedules for different days of the week.</i>
        <ul class="abp_list_margin_xs">
            <li>👉 Select the days on which the transport operates</li>
            <li>👉 Add multiple operation times for each selected day</li>
            <li>👉 Use different departure schedules for different weekdays</li>
            <li>👉 Only the configured times for the selected day will be available to passengers</li>
        </ul>
        <h6 class="abp">📆 Date-Wise Operation Time</h6>
        <i>Date-wise Operation Time allows you to define custom departure times for specific dates.</i>
        <ul class="abp_list_margin_xs">
            <li>👉 Select a specific operating date</li>
            <li>👉 Add one or multiple operation times for the selected date</li>
            <li>👉 Override the regular day-wise or default operation time for specific dates</li>
            <li>👉 Useful for special schedules, holidays, events, or temporary schedule changes</li>
        </ul>
        <h6 class="abp">🔄 Return Operation Time</h6>
        <i>When return journey support is enabled, you can configure separate operation times for the return route.</i>
        <ul class="abp_list_margin_xs">
            <li>👉 Add one or multiple return departure times</li>
            <li>👉 Configure Return Day-Wise Time for different weekdays</li>
            <li>👉 Configure Return Date-Wise Time for specific dates</li>
            <li>👉 Use different schedules for forward and return journeys</li>
        </ul>
        <h6 class="abp">⚙️ Operation Time Rules</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 At least one operation time is required for the transport</li>
            <li>👉 Multiple operation times can be added for the same transport and day</li>
            <li>👉 Day-wise schedules are applied according to the selected weekday</li>
            <li>👉 Date-wise schedules can be used for specific dates when custom times are required</li>
            <li>👉 If no specific date-wise schedule is configured, the regular day-wise or default operation time will be applied</li>
        </ul>
        <h6 class="abp">🚀 Smart Schedule Management</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Configure simple daily operation times for regular transport services</li>
            <li>👉 Use day-wise schedules when departure times vary throughout the week</li>
            <li>👉 Use date-wise schedules when a specific date requires a different departure time</li>
            <li>👉 Configure separate forward and return schedules for round-trip services</li>
            <li>👉 Easily add, reorder, or remove operation times as needed</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/time_config.png">
            <img class="_img_control" src="#" alt="Time Configuration Overview">
        </div>
    </div>
<?php
