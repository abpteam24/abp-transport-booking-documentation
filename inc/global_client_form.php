<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_client_form_global">
        <div class="abtb_doc_page_head">
            <h2>📋 Global Client Form</h2>
            <p class="abtb_doc_lede">
                The <strong>Global Client Form</strong> screen under the <em>Global Data</em> tab lets you build a
                reusable client information form. Once the form structure is defined here, it can be imported into any
                transport post or used as the site-wide default.
            </p>
        </div>

        <p class="abtb_doc_section_intro">
            The client form collects the information you need from each customer at booking time. Define your fields once
            in the global form, then import or reference them in individual transport posts to avoid duplicate
            configuration.
        </p>

        <h3>📋 Field Reference</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Form Title</strong></td>
                    <td>Enter the label displayed to customers for this form field. This field is required.</td>
                </tr>
                <tr>
                    <td><strong>Unique ID</strong></td>
                    <td>Define the unique identifier used internally to process the submitted client information. This field is required.</td>
                </tr>
                <tr>
                    <td><strong>Form Type</strong></td>
                    <td>Select the input field type used to collect the client information. Choose the type that best matches the required data.</td>
                </tr>
                <tr>
                    <td><strong>Value Option</strong></td>
                    <td>Enter the available options for fields such as Select. Use a comma <code>(,)</code> to separate multiple options, for example: <code>male,female</code>.</td>
                </tr>
                <tr>
                    <td><strong>Default Value</strong></td>
                    <td>Enter a default value for the form field. The configured value is displayed automatically when the client form loads.</td>
                </tr>
                <tr>
                    <td><strong>Required</strong></td>
                    <td>Controls whether the customer must provide a value for this field. Turn <strong>ON</strong> to make the field required, or turn <strong>OFF</strong> to make it optional.</td>
                </tr>
                <tr>
                    <td><strong>Action</strong></td>
                    <td>Use the available action controls to reorder form items or remove an existing field from the global client form.</td>
                </tr>
            </tbody>
        </table>

        <h3>➕ Adding &amp; Saving</h3>
        <ol class="abtb_doc_steps">
            <li><strong>Add a field</strong> — Click <strong>Add New Form Item</strong> to add another client form field and configure its title, unique ID, field type, options, default value, and required status.</li>
            <li><strong>Save</strong> — Click <strong>Save Global Client Form Configuration</strong> to persist the configured form and make it available for reuse across transport posts.</li>
        </ol>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-14.png"><img class="abtb_doc_screen_img" src="#" alt="Global Client Form Configuration"></div>
    </div>
<?php
