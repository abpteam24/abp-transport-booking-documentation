<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_category_global">
        <div class="abtb_doc_page_head">
            <h2>🏘️ Global Transport Type / Category</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Transport Type / Category</strong> screen under the <em>Global Data</em> tab lets you
                create, edit, and delete transport types or categories. Each type includes a name, optional slug, and
                optional description, and a shortcode that can be used to display transports of that type.
            </p>
        </div>

        <h3>📋 Managing Transport Types</h3>
        <p class="abtb_doc_section_intro">
            The category list displays all existing transport types. From this list you can view, edit, or delete
            categories and create new ones.
        </p>
        <ul>
            <li>Use the <strong>Edit</strong> option to update an existing transport type or category.</li>
            <li>Use the <strong>Delete</strong> option to remove an existing transport type or category.</li>
            <li>Click <strong>Add New Transport Type</strong> to create a new category.</li>
        </ul>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/category.png"><img class="abtb_doc_screen_img" src="#" alt="Transport Type List"></div>

        <h3>➕ Adding a New Transport Type</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Enter the name</strong> — Provide a <strong>Transport Type Name</strong> for the new category.</li>
            <li><strong>Set a slug (optional)</strong> — Add a <strong>Transport Type Slug</strong>, or leave it blank to generate one automatically from the name.</li>
            <li><strong>Add a description (optional)</strong> — Enter a <strong>Transport Type Description</strong> to provide additional information about the category.</li>
            <li><strong>Save</strong> — Click <strong>Save Transport Type</strong> to persist the new category.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/category_add.png"><img class="abtb_doc_screen_img" src="#" alt="Add New Transport Type"></div>
    </div>
<?php
