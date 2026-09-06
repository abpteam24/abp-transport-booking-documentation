<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_feature_global">
        <div class="abtb_doc_page_head">
            <h2>🔗 Features Library</h2>
            <p class="abtb_doc_lede">
                The <strong>Features</strong> section of the Global Configuration panel lets you create, update, and
                delete the features your transports offer. Manage feature details in one place and reuse them whenever
                you create or edit a transport.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            Features describe the individual services or attributes a transport provides, such as Wi-Fi, air
            conditioning, or refreshments. By keeping them in a central library, you can apply the same set of features
            consistently across your transports instead of re-entering them each time.
        </p>

        <h3>🔗 Managing features</h3>
        <ol class="abtb_doc_steps">
            <li><strong>View all features</strong> — The list displays all currently available features together with their details.</li>
            <li><strong>Edit a feature</strong> — Use the <em>Edit</em> option to update an existing feature.</li>
            <li><strong>Delete a feature</strong> — Use the <em>Delete</em> option to remove an existing feature.</li>
            <li><strong>Add a new feature</strong> — Use the <em>Add New Feature</em> option to create a new feature.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/feature.png"><img class="abtb_doc_screen_img" src="#" alt="Feature List"></div>

        <h3>🆕 Adding a new feature</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Enter the Feature Name</strong> — The name of the feature you want to create.</li>
            <li><strong>Add a Feature Value</strong> — An optional value for the feature; leave it blank if not required.</li>
            <li><strong>Save the feature</strong> — Click <em>Save Feature</em> to store the new feature.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/feature_add.png"><img class="abtb_doc_screen_img" src="#" alt="Add New Feature"></div>
    </div>
<?php
