<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_brand_global">
        <div class="abtb_doc_page_head">
            <h2>🏷️ Brands Library</h2>
            <p class="abtb_doc_lede">
                The <strong>Brands</strong> section of the Global Configuration panel lets you create, update, and
                delete the brands, manufacturers, or service providers used by your transports. Assign a brand to a
                transport while creating or editing a post, or use the provided shortcode to display transports from a
                specific brand.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            Brands give you a single, reusable library of manufacturers, operators, or service providers that can be
            linked to any transport. Because brands are managed in one central place, you maintain consistent naming
            and avoid re-entering the same information for every transport.
        </p>

        <h3>🏷️ Managing brands</h3>
        <ol class="abtb_doc_steps">
            <li><strong>View all brands</strong> — The list displays all currently available brands together with their details.</li>
            <li><strong>Edit a brand</strong> — Use the <em>Edit</em> option to update an existing brand.</li>
            <li><strong>Delete a brand</strong> — Use the <em>Delete</em> option to remove an existing brand.</li>
            <li><strong>Add a new brand</strong> — Use the <em>Add New Brand</em> option to create a new brand.</li>
            <li><strong>Use the shortcode</strong> — Use the displayed <em>Shortcode</em> to show transports assigned to a specific brand.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/brand.png"><img class="abtb_doc_screen_img" src="#" alt="Brand List"></div>

        <h3>🆕 Adding a new brand</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Enter the Brand Name</strong> — This is the only required field and is used to create the new brand.</li>
            <li><strong>Add a Brand Slug</strong> — An optional slug for the brand; leave it blank to generate one automatically from the name.</li>
            <li><strong>Add a Brand Description</strong> — Optional text providing additional information about the brand.</li>
            <li><strong>Save the brand</strong> — Click <em>Save Brand</em> to store the new brand.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/brand_add.png"><img class="abtb_doc_screen_img" src="#" alt="Add New Brand"></div>
    </div>
<?php
