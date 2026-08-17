<?php
	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	} ?>
	<div class="tab_item" data-tabs="#abptb_sp">
		<h3 class="abp_color_theme_gap_xs"><?php ABPTB_Static::svg('seat'); ?> Ticket/Seat Plan Configuration</h3>
		<div class="_divider_xxs"></div>

		<label>
			The Ticket/Seat Plan Configuration system allows you to create and manage reusable ticket types, decorative items, and seat plans for your transports. You can create a seat plan once and reuse it across multiple transports while maintaining flexible control over seat types, layout, dimensions, and seat numbering.
		</label>

		<h6 class="abp">🎫 Ticket Type Management</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Create and manage dynamic ticket types for use across transports</li>
			<li>👉 Define ticket names, icons, colors, and ticket prefixes</li>
			<li>👉 Use different ticket types such as Ticket, VIP, Business Class, Special, Couple, Female, Adult, Child, and Economy</li>
			<li>👉 Reuse the same ticket types across multiple seat plans and transports</li>
			<li>👉 Configure ticket types according to your transport booking requirements</li>
		</ul>

		<h6 class="abp">🎨 Others / Decor Item Management</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Create and manage decorative items for seat plan layouts</li>
			<li>👉 Use items such as Driver Seat, Door Entry, Stairs, Aisle/Walkway, Window, Engine Box, Toilet, Luggage Rack, Food/Snacks, and Emergency Exit</li>
			<li>👉 Arrange decorative elements to represent the actual transport layout</li>
			<li>👉 Use decor items for visual organization without treating them as passenger seats</li>
		</ul>

		<h6 class="abp">💺 Reusable Seat Plan</h6>
		<label>
			The reusable Seat Plan system allows you to create a seat layout once and assign it to multiple transports. This helps reduce repetitive work when the same seating arrangement is used by different transports.
		</label>
		<ul class="abp_list_margin_xs">
			<li>👉 Create and manage multiple reusable seat plans</li>
			<li>👉 Assign a seat plan to multiple transports</li>
			<li>👉 Automatically calculate the total number of available seats</li>
			<li>👉 Automatically identify and calculate assigned ticket types</li>
			<li>👉 View seat type quantities directly from the seat plan list</li>
			<li>👉 Duplicate or manage existing seat plans when needed</li>
		</ul>

		<h6 class="abp">⚙️ Seat Plan Layout Configuration</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Define the number of rows and columns for the seat layout</li>
			<li>👉 Configure the seat plan background image or background color</li>
			<li>👉 Set individual cell width, height, gap, and radius</li>
			<li>👉 Add or remove rows and columns according to the required layout</li>
			<li>👉 Create complex layouts using multiple cells for selected elements</li>
			<li>👉 Arrange seats and decorative items according to the actual transport structure</li>
		</ul>

		<h6 class="abp">🪑 Seat Type Assignment</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Select a ticket type and assign it to available seat cells</li>
			<li>👉 Automatically assign seat numbers according to the selected ticket type</li>
			<li>👉 Manage different passenger seat categories within the same seat plan</li>
			<li>👉 View ticket-type-wise seat quantities while designing the layout</li>
			<li>👉 Select and modify individual seats or multiple cells when required</li>
		</ul>

		<h6 class="abp">🖱️ Interactive Seat Plan Editor</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Drag cells to change their position</li>
			<li>👉 Drag-select multiple cells for easier layout management</li>
			<li>👉 Double-click to edit row/column span settings</li>
			<li>👉 Ctrl + Click to select a particular item or range</li>
			<li>👉 Shift + Click to select any range of cells</li>
			<li>👉 Use the editor to build customized seating and transport layouts</li>
		</ul>

		<h6 class="abp">🔢 Automatic Seat Numbering</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Automatically generate seat numbers when assigning ticket types</li>
			<li>👉 Maintain ticket-type-specific seat numbering</li>
			<li>👉 Keep seat numbering organized across the complete seat plan</li>
		</ul>

		<h6 class="abp">📊 Seat Plan Information</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 View total seats for each reusable seat plan</li>
			<li>👉 View ticket-type-wise seat quantities</li>
			<li>👉 View seat plan dimensions and cell configuration</li>
			<li>👉 Manage multiple seat plans from a centralized list</li>
		</ul>

		<h6 class="abp">🚀 Benefits</h6>
		<ul class="abp_list_margin_xs">
			<li>👉 Save time by reusing existing seat plans</li>
			<li>👉 Create accurate layouts for different types of transport</li>
			<li>👉 Support multiple ticket and passenger seat types</li>
			<li>👉 Easily represent doors, aisles, windows, toilets, stairs, and other transport elements</li>
			<li>👉 Maintain flexible control over seat layout and numbering</li>
			<li>👉 Build complex and customized transport seating arrangements</li>
		</ul>

		<div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/screenshot-11.png">
			<img class="_img_control" src="#" alt="Ticket and Seat Plan Configuration Overview">
		</div>
	</div>
<?php
