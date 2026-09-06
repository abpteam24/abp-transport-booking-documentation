<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_route">
        <div class="abtb_doc_page_head">
            <h2><span class="fas fa-route"></span> Route Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>Route</strong> tab in the Transport Details Page defines the complete journey of a
                transport — stops, stop types, travel times, and pickup/drop-off availability. Create separate
                forward and return routes when the transport supports return journeys.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            Route configuration determines which stops the transport calls at, in what order, and what role each
            stop plays (boarding, dropping, or both). Travel times are measured in minutes from the first stop,
            and pickup/drop-off availability is controlled per stop. When return journeys are enabled, a second
            route can be configured independently.
        </p>

        <h3>📋 Fields and Options</h3>
        <p class="abtb_doc_section_intro">The following fields and controls are available in the Route Configuration section:</p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Same Transport Return ON/OFF</strong></td>
                    <td>Enables the same transport to be used for both forward and return journeys. When enabled, a return route can be configured.</td>
                </tr>
                <tr>
                    <td><strong>Stops Name</strong></td>
                    <td>Selects the transport stop for each route point.</td>
                </tr>
                <tr>
                    <td><strong>Stops Type</strong></td>
                    <td>Defines the purpose of each stop — <em>Boarding</em>, <em>Dropping</em>, or <em>Both</em>.</td>
                </tr>
                <tr>
                    <td><strong>Time (in min)</strong></td>
                    <td>Sets the travel time in minutes from the first stop to each selected stop. The first stop must always be <strong>0</strong> minutes.</td>
                </tr>
                <tr>
                    <td><strong>Pickup / Drop</strong></td>
                    <td>Enables or disables pickup and drop-off availability for the selected stop.</td>
                </tr>
                <tr>
                    <td><strong>Stop Order</strong></td>
                    <td>Arranges the stops in the correct journey sequence. The first stop must be a Boarding stop and the last stop must be a Dropping stop.</td>
                </tr>
            </tbody>
        </table>

        <h3>🔀 Route Actions</h3>
        <p class="abtb_doc_section_intro">The following actions are available for managing routes:</p>
        <table>
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Forward Route Configuration</strong></td>
                    <td>Configures the main journey route by selecting stops and arranging them in the correct travel order.</td>
                </tr>
                <tr>
                    <td><strong>Return Route Configuration</strong></td>
                    <td>Configures the return journey route when Same Transport Return is enabled. Stops are selected and arranged for the return journey.</td>
                </tr>
                <tr>
                    <td><strong>Add New Stops</strong></td>
                    <td>Adds new stops directly from the route configuration section without leaving the Transport Details Page.</td>
                </tr>
                <tr>
                    <td><strong>Add New Route</strong></td>
                    <td>Adds and configures a new forward route when multiple route configurations are required.</td>
                </tr>
                <tr>
                    <td><strong>Add New Return Route</strong></td>
                    <td>Adds and configures a new return route for the selected transport.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-23.png">
            <img class="abtb_doc_screen_img" src="#" alt="Route Configuration Overview">
        </div>
    </div>
<?php