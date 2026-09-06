<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_ticket">
        <div class="abtb_doc_page_head">
            <h2>🎫 Ticket Configuration</h2>
            <p class="abtb_doc_lede">
                The <strong>Ticket</strong> tab in the Transport Details Page defines how tickets and seats are
                managed for the transport. Choose between a seat plan or ticket-based configuration, enable
                multiple ticket types, and control minimum and maximum order quantities.
            </p>
        </div>

        <h3>🎯 Overview</h3>
        <p class="abtb_doc_section_intro">
            This section lets you control the entire ticketing model for a transport — from the fundamental
            booking type (seat plan vs. standard ticket) to per-order quantity limits and individual ticket
            type settings. The options available depend on the ticket configuration type you select.
        </p>

        <h3>📋 Fields and Options</h3>
        <p class="abtb_doc_section_intro">The following fields and controls are available in the Ticket Configuration section:</p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Ticket Type</strong></td>
                    <td>Selects the configuration type — <em>Seat Plan</em> or <em>Ticket</em> — based on how passengers will be booked.</td>
                </tr>
                <tr>
                    <td><strong>Multiple Ticket Type ON/OFF</strong></td>
                    <td>Enables multiple ticket or seat types for the transport. Disable when all tickets or seats use the same type.</td>
                </tr>
                <tr>
                    <td><strong>Min Qty/Order</strong></td>
                    <td>Sets the minimum number of tickets or seats a customer must select in a single order.</td>
                </tr>
                <tr>
                    <td><strong>Max Qty/Order</strong></td>
                    <td>Sets the maximum number of tickets or seats a customer can select in a single order.</td>
                </tr>
            </tbody>
        </table>

        <h3>🪑 Seat Plan Configuration</h3>
        <p class="abtb_doc_section_intro">
            When <strong>Seat Plan</strong> is selected as the ticket type, additional options become available:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Seat Plan Configuration</strong></td>
                    <td>Assigns reusable seat plans to the transport and configures their frontend names and ticket/seat type quantities.</td>
                </tr>
                <tr>
                    <td><strong>Add New Seat Label</strong></td>
                    <td>Adds a new seat label configuration for the selected seat plan.</td>
                </tr>
                <tr>
                    <td><strong>Type-wise Quantity</strong></td>
                    <td>Configures the quantity available for each ticket or seat type within the selected seat plan.</td>
                </tr>
            </tbody>
        </table>

        <h3>🎟️ Ticket Configuration</h3>
        <p class="abtb_doc_section_intro">
            When <strong>Ticket</strong> is selected as the ticket type, the following options become available:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Ticket Configuration</strong></td>
                    <td>Configures individual ticket types, quantities, reserve quantities, min/max quantity per order, and ticket descriptions.</td>
                </tr>
                <tr>
                    <td><strong>Add New Item</strong></td>
                    <td>Adds a new ticket configuration item to the ticket list.</td>
                </tr>
                <tr>
                    <td><strong>Add New Ticket Type</strong></td>
                    <td>Adds a new ticket type when multiple ticket types are enabled.</td>
                </tr>
                <tr>
                    <td><strong>Reserve Quantity</strong></td>
                    <td>Defines a quantity reserved from the available ticket quantity for the selected ticket type.</td>
                </tr>
                <tr>
                    <td><strong>Ticket Description</strong></td>
                    <td>Adds a description for the selected ticket type to provide additional information to customers.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-21.png"><img class="abtb_doc_screen_img" src="#" alt="Ticket Configuration Overview"></div>
        <div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-22.png"><img class="abtb_doc_screen_img" src="#" alt="Ticket Configuration Overview"></div>
    </div>
<?php