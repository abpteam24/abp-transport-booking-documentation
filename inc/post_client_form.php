<div class="abtb_doc_panel" data-tabs="#abptb_client_form">
    <div class="abtb_doc_page_head">
        <h2>Client / Attendee Form Fields</h2>
        <p class="abtb_doc_lede">
            The Client Form system controls what passenger information is collected during the booking process. You can define fields globally and import them into individual transports, or build transport-specific forms from scratch.
        </p>
    </div>

    <h3>🌍 Global Client Forms</h3>
    <p class="abtb_doc_section_intro">
        From the Global Configuration panel you create a reusable set of client form fields that can be applied across multiple transports, ensuring consistent passenger data collection.
    </p>
    <ul>
        <li>Create reusable passenger information fields.</li>
        <li>Define standard fields such as First Name, Last Name, Email, Phone, Gender, Date of Birth, and other required information.</li>
        <li>Enable or disable individual fields.</li>
        <li>Maintain a consistent passenger information structure across transports.</li>
    </ul>

    <h3>🚌 Transport-Level Client Forms</h3>
    <p class="abtb_doc_section_intro">
        Each transport can use the global client form or have its own customized form configuration tailored to that transport's requirements.
    </p>
    <ul>
        <li>Enable or disable the Client Form for the transport.</li>
        <li>Import fields from the Global Client Form configuration.</li>
        <li>Add custom fields specific to the transport.</li>
        <li>Modify imported fields according to transport requirements.</li>
        <li>Remove fields that are not required for the selected transport.</li>
    </ul>

    <h3>👤 Same Attendee Configuration</h3>
    <p class="abtb_doc_section_intro">
        When a single passenger is purchasing multiple tickets, the Same Attendee option streamlines data entry.
    </p>
    <ul>
        <li>Enable Same Attendee when the same passenger information should be used for multiple tickets.</li>
        <li>Disable it when separate passenger information is required for each ticket.</li>
        <li>This option simplifies passenger information collection when multiple tickets belong to the same attendee.</li>
    </ul>

    <h3>⚙️ Form Field Configuration</h3>
    <p class="abtb_doc_section_intro">Each form field supports the following settings:</p>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Form Title</strong></td>
                <td>The label displayed to the user for this passenger information field.</td>
            </tr>
            <tr>
                <td><strong>Unique ID</strong></td>
                <td>A unique identifier used internally for each form field.</td>
            </tr>
            <tr>
                <td><strong>Form Type</strong></td>
                <td>The field input type — Text, Email, Select, Date, or other supported types.</td>
            </tr>
            <tr>
                <td><strong>Value Option</strong></td>
                <td>Available options for fields that use a Select or similar input type.</td>
            </tr>
            <tr>
                <td><strong>Default Value</strong></td>
                <td>A pre-filled value applied when the field is first rendered.</td>
            </tr>
            <tr>
                <td><strong>Required</strong></td>
                <td>Specifies whether the passenger must provide this information before completing the booking.</td>
            </tr>
            <tr>
                <td><strong>Field Order</strong></td>
                <td>Determines the display position of the field within the form.</td>
            </tr>
        </tbody>
    </table>

    <h3>🔄 Import &amp; Customization System</h3>
    <p class="abtb_doc_section_intro">
        Import the global form with one click, then customize it per transport without affecting the shared configuration.
    </p>
    <ul>
        <li>Import the Global Client Form with one click.</li>
        <li>Edit imported fields according to the transport requirements.</li>
        <li>Combine global and custom passenger information fields.</li>
        <li>Add new fields without changing the global configuration.</li>
        <li>Remove unnecessary fields from the transport-level form.</li>
    </ul>

    <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/client_form.png">
        <img class="abtb_doc_screen_img" src="#" alt="Client Forms Configuration Overview">
    </div>
</div>
