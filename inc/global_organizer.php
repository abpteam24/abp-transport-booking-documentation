<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abptb_organizer_global">
        <h2 class="abp_color_theme_xs"><span class="_mar_r_xs">🏢</span>Transport Booking - Global Organizer Configuration</h2>
        <div class="_divider"></div>
        <label> Here you can create, update, and delete Transport Booking organizers, operators, or companies easily. You can also manage organizer details and use the available shortcode to display transports from a specific organizer. </label>
        <ul class="abp_list_mar_l">
            <li>1. View all available Organizers from the list.</li>
            <li>2. Use the <strong>Edit</strong> option to update an existing Organizer.</li>
            <li>3. Use the <strong>Delete</strong> option to remove an existing Organizer.</li>
            <li>4. Use the <strong>Add New Organizer</strong> option to create a new Organizer.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/organizer.png"><img class="_img_control" src="#" alt="Organizer List"></div>
        <ul class="abp_list_mar_l">
            <li>1. Enter the <strong>Organizer Name</strong> to create a new Organizer.</li>
            <li>2. Add an optional <strong>Organizer Slug</strong>, or leave it blank to generate it automatically from the name.</li>
            <li>3. Add an optional <strong>Organizer Description</strong> to provide additional information about the Organizer.</li>
            <li>4. Click <strong>Save Organizer</strong> to save the new Organizer.</li>
        </ul>
        <div class="_mar_tb" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/organizer_add.png"><img class="_img_control" src="#" alt="Add New Organizer"></div>
    </div>
<?php
