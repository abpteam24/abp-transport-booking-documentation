<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="abtb_doc_panel" data-tabs="#abptb_price">
		<div class="abtb_doc_page_head">
			<h2>💲 Price Configuration</h2>
			<p class="abtb_doc_lede">
				The <strong>Price</strong> tab in the Transport Details Page lets you set ticket prices for each
				From and To stop combination on the selected route. Configure separate prices for forward and
				return routes when the transport supports return journeys.
			</p>
		</div>

		<h3>🎯 Overview</h3>
		<p class="abtb_doc_section_intro">
			Pricing is organized by route direction — forward and return — with individual price rows for every
			possible boarding-to-dropping stop combination. Additional ticket types (such as Business Class) can
			be priced independently for the same route combination.
		</p>

		<h3>📋 Fields and Options</h3>
		<p class="abtb_doc_section_intro">The following fields are available in the Price Configuration section:</p>
		<table>
			<thead>
				<tr>
					<th>Field</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Forward Price</strong></td>
					<td>Configures ticket prices for each available From and To combination on the forward route.</td>
				</tr>
				<tr>
					<td><strong>Return Price</strong></td>
					<td>Configures ticket prices for each available From and To combination on the return route when a return route is configured.</td>
				</tr>
				<tr>
					<td><strong>From</strong></td>
					<td>Displays the starting stop for the selected price combination.</td>
				</tr>
				<tr>
					<td><strong>To</strong></td>
					<td>Displays the destination stop for the selected price combination.</td>
				</tr>
				<tr>
					<td><strong>Ticket</strong></td>
					<td>Sets the ticket price for the selected From and To stop combination.</td>
				</tr>
				<tr>
					<td><strong>Business Class</strong></td>
					<td>Sets the price for the selected ticket type or class for the corresponding route combination.</td>
				</tr>
			</tbody>
		</table>

		<div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/screenshot-24.png">
			<img class="abtb_doc_screen_img" src="#" alt="Price Configuration Overview">
		</div>
	</div>
<?php