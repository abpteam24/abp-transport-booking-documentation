<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_common">
        <h2 class="abp_color_theme_gap_xs">🚌 Transport</h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Configure the core settings of Transport Booking from this section. These global options control booking status, labels, menu icons, URL structures, and other terminology used throughout the plugin.
        </i>
        <table class="abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Booked Status</th>
                <td colspan="3">Select the order statuses that will automatically trigger inventory deduction or reserve a seat. Orders with the selected statuses will be treated as booked for seat and availability management.</td>
            </tr>
            <tr>
                <th class="_color_theme">Label</th>
                <td colspan="3">Customize the main Transport Booking menu label displayed in the WordPress admin dashboard to match your preferred business terminology.</td>
            </tr>
            <tr>
                <th class="_color_theme">Slug</th>
                <td colspan="3">
                    Define the primary URL slug for Transport Booking pages. After changing the slug, refresh your permalinks by navigating to <strong class="abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Dashboard Menu Icon</th>
                <td colspan="3">Choose a custom WordPress Dashicon for the Transport Booking dashboard menu. Visit the <strong>WordPress Dashicons Library</strong>, copy the desired icon class, and paste it here.</td>
            </tr>
            <tr>
                <th class="_color_theme">Transport Booking Icon</th>
                <td colspan="3">Select a global FontAwesome vector icon or Emoji to represent Transport Booking throughout the plugin panels and related interface elements.</td>
            </tr>
            <tr>
                <th class="_color_theme">Category Label</th>
                <td colspan="3">Customize the category label used throughout the dashboard and plugin interface. For example, you can change it from "Transport Type" to another term that better matches your business.</td>
            </tr>
            <tr>
                <th class="_color_theme">Category Slug</th>
                <td colspan="3">
                    Define the custom URL structure for category archives. After changing the slug, refresh your permalinks by navigating to <strong class="abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Organizer Label</th>
                <td colspan="3">Customize the label used for Organizers throughout the Transport Booking dashboard and plugin interface to match your preferred terminology.</td>
            </tr>
            <tr>
                <th class="_color_theme">Organizer Slug</th>
                <td colspan="3">
                    Define the custom URL structure for Organizer archives. After changing the slug, refresh your permalinks by navigating to <strong class="abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Brand Label</th>
                <td colspan="3">Customize the label used for Brands throughout the Transport Booking dashboard and plugin interface to match your business terminology.</td>
            </tr>
            <tr>
                <th class="_color_theme">Brand Slug</th>
                <td colspan="3">
                    Define the custom URL structure for Brand archives. After changing the slug, refresh your permalinks by navigating to <strong class="abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Stops Label</th>
                <td colspan="3">Customize the label used for Stops throughout the Transport Booking dashboard and plugin interface to match your preferred terminology.</td>
            </tr>
            <tr>
                <th class="_color_theme">Stops Slug</th>
                <td colspan="3">
                    Define the custom URL structure for Stops archives. After changing the slug, refresh your permalinks by navigating to <strong class="abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            </tbody>
        </table>
        <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-18.png"><img class="_img_control" src="#" alt="Transport Configuration"></div>
    </div>
<?php
