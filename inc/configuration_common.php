<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_common">
        <div class="abtb_doc_page_head">
            <h2>🚌 Transport</h2>
            <p class="abtb_doc_lede">
                Configure the core settings of Transport Booking from this section. These global options control booking
                status, labels, menu icons, URL structures, and other terminology used throughout the plugin.
            </p>
        </div>

        <h3>⚙️ Options</h3>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Booked Status</strong></td>
                    <td>Select the order statuses that automatically trigger inventory deduction or reserve a seat. Orders with the selected statuses are treated as booked for seat and availability management.</td>
                </tr>
                <tr>
                    <td><strong>Label</strong></td>
                    <td>Customize the main Transport Booking menu label displayed in the WordPress admin dashboard to match your preferred business terminology.</td>
                </tr>
                <tr>
                    <td><strong>Slug</strong></td>
                    <td>Define the primary URL slug for Transport Booking pages. After changing the slug, refresh your permalinks by navigating to <em>Settings → Permalinks</em> and clicking <em>Save Changes</em>.</td>
                </tr>
                <tr>
                    <td><strong>Dashboard Menu Icon</strong></td>
                    <td>Choose a custom WordPress Dashicon for the Transport Booking dashboard menu. Visit the WordPress Dashicons Library, copy the desired icon class, and paste it here.</td>
                </tr>
                <tr>
                    <td><strong>Transport Booking Icon</strong></td>
                    <td>Select a global FontAwesome vector icon or Emoji to represent Transport Booking throughout the plugin panels and related interface elements.</td>
                </tr>
                <tr>
                    <td><strong>Category Label</strong></td>
                    <td>Customize the category label used throughout the dashboard and plugin interface. For example, you can change it from "Transport Type" to another term that better matches your business.</td>
                </tr>
                <tr>
                    <td><strong>Category Slug</strong></td>
                    <td>Define the custom URL structure for category archives. After changing the slug, refresh your permalinks by navigating to <em>Settings → Permalinks</em> and clicking <em>Save Changes</em>.</td>
                </tr>
                <tr>
                    <td><strong>Organizer Label</strong></td>
                    <td>Customize the label used for Organizers throughout the Transport Booking dashboard and plugin interface to match your preferred terminology.</td>
                </tr>
                <tr>
                    <td><strong>Organizer Slug</strong></td>
                    <td>Define the custom URL structure for Organizer archives. After changing the slug, refresh your permalinks by navigating to <em>Settings → Permalinks</em> and clicking <em>Save Changes</em>.</td>
                </tr>
                <tr>
                    <td><strong>Brand Label</strong></td>
                    <td>Customize the label used for Brands throughout the Transport Booking dashboard and plugin interface to match your business terminology.</td>
                </tr>
                <tr>
                    <td><strong>Brand Slug</strong></td>
                    <td>Define the custom URL structure for Brand archives. After changing the slug, refresh your permalinks by navigating to <em>Settings → Permalinks</em> and clicking <em>Save Changes</em>.</td>
                </tr>
                <tr>
                    <td><strong>Stops Label</strong></td>
                    <td>Customize the label used for Stops throughout the Transport Booking dashboard and plugin interface to match your preferred terminology.</td>
                </tr>
                <tr>
                    <td><strong>Stops Slug</strong></td>
                    <td>Define the custom URL structure for Stops archives. After changing the slug, refresh your permalinks by navigating to <em>Settings → Permalinks</em> and clicking <em>Save Changes</em>.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_callout abtb_doc_callout_tip">
            <strong>💡 Refreshing permalinks</strong>
            Whenever you change any slug option, remember to visit <em>Settings → Permalinks</em> and click
            <em>Save Changes</em> to regenerate your URL structure.
        </div>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-18.png"><img class="abtb_doc_screen_img" src="#" alt="Transport Configuration"></div>
    </div>
<?php
