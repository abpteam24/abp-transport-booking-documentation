<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_organizer_global">
        <div class="abtb_doc_page_head">
            <h2>🏢 Global Organizer Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Organizer</strong> screen under the <em>Global Data</em> tab lets you create, edit,
                and delete organizers, operators, or companies. Each organizer includes a name, optional slug, and
                optional description, and a shortcode that can be used to display transports from a specific organizer.
            </p>
        </div>

        <h3>📋 Managing Organizers</h3>
        <p class="abtb_doc_section_intro">
            The organizer list displays all existing organizers. From this list you can view, edit, or delete
            organizers and create new ones.
        </p>
        <ul>
            <li>Use the <strong>Edit</strong> option to update an existing organizer.</li>
            <li>Use the <strong>Delete</strong> option to remove an existing organizer.</li>
            <li>Click <strong>Add New Organizer</strong> to create a new organizer.</li>
        </ul>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/organizer.png"><img class="abtb_doc_screen_img" src="#" alt="Organizer List"></div>

        <h3>➕ Adding a New Organizer</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Enter the name</strong> — Provide an <strong>Organizer Name</strong> for the new organizer.</li>
            <li><strong>Set a slug (optional)</strong> — Add an <strong>Organizer Slug</strong>, or leave it blank to generate one automatically from the name.</li>
            <li><strong>Add a description (optional)</strong> — Enter an <strong>Organizer Description</strong> to provide additional information about the organizer.</li>
            <li><strong>Save</strong> — Click <strong>Save Organizer</strong> to persist the new organizer.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/organizer_add.png"><img class="abtb_doc_screen_img" src="#" alt="Add New Organizer"></div>
    </div>
<?php
