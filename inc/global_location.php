<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_location_global">
        <div class="abtb_doc_page_head">
            <h2>📍 Global Location &amp; Stop Management</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Location &amp; Stop Management</strong> screen under the <em>Global Data</em> tab lets
                you create reusable transport locations and stops. Create a location once, then assign it to any
                transport route as a pickup, drop-off, boarding, or intermediate stop. Changes to a global location are
                automatically reflected across all routes and transports where it is used.
            </p>
        </div>

        <h3>🏗️ Managing Locations</h3>
        <p class="abtb_doc_section_intro">
            The location list displays all existing global locations. From this list you can view, edit, or delete
            locations, and add new ones.
        </p>

        <h3>🔍 Location-Based Transport Listing</h3>
        <p class="abtb_doc_section_intro">
            The <code>[abptb_list]</code> shortcode supports location-based transport filtering. Pass a location ID to
            display only the transports available at that location.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Shows all transports available at the selected location.</td>
                </tr>
                <tr>
                    <td><code>bp</code></td>
                    <td>Shows transports departing from the selected boarding location (use the location ID as the value).</td>
                </tr>
                <tr>
                    <td><code>dp</code></td>
                    <td>Shows transports arriving at the selected drop-off location (use the location ID as the value).</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Reusable across routes</strong>
            Because locations are globally reusable, the same location ID can be used across different shortcode
            configurations and routes without duplicating data.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/location_add.png"><img class="abtb_doc_screen_img" src="#" alt="Location Add"></div>
        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/location_list.png"><img class="abtb_doc_screen_img" src="#" alt="Location List"></div>
    </div>
<?php
