<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
	<div class="abtb_doc_panel" data-tabs="#abptb_slider">
		<div class="abtb_doc_page_head">
			<h2>🖼️ Slider Configuration</h2>
			<p class="abtb_doc_lede">
				The <strong>Slider</strong> tab controls the homepage transport slider, including theme style, indicators,
				showcase position, and popup behaviour. All settings apply to the transport slider on the frontend.
			</p>
		</div>

		<h3>🔄 Overview</h3>
		<p class="abtb_doc_section_intro">
			Transport Booking includes a configurable homepage slider that displays transport images in a carousel format.
			You can enable or disable the slider, choose a theme, control indicator and showcase visibility, and configure
			popup options for an enhanced browsing experience.
		</p>

		<h3>📝 Slider Settings</h3>
		<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Description</th>
					<th>Default</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Slider/Thumbnail</strong></td>
					<td>Turn the slider switch <strong>ON</strong> to display the slider, or <strong>OFF</strong> to show only the thumbnail.</td>
					<td>ON</td>
				</tr>
				<tr>
					<td><strong>Slider Theme</strong></td>
					<td>Choose the visual theme style for the slider.</td>
					<td>—</td>
				</tr>
				<tr>
					<td><strong>Visible Indicator</strong></td>
					<td>Control indicator visibility. Turn <strong>OFF</strong> to hide the indicator, or <strong>ON</strong> to show it.</td>
					<td>ON</td>
				</tr>
				<tr>
					<td><strong>Indicator Type</strong></td>
					<td>Select the slider indicator type.</td>
					<td>Default Icon</td>
				</tr>
				<tr>
					<td><strong>Visible Showcase</strong></td>
					<td>Control showcase visibility. Turn <strong>OFF</strong> to hide the showcase, or <strong>ON</strong> to show it.</td>
					<td>ON</td>
				</tr>
				<tr>
					<td><strong>Showcase Position</strong></td>
					<td>Select the position of the slider showcase.</td>
					<td>Right</td>
				</tr>
				<tr>
					<td><strong>Visible Popup</strong></td>
					<td>Control popup slider visibility. Turn <strong>OFF</strong> to hide the popup slider, or <strong>ON</strong> to show it.</td>
					<td>ON</td>
				</tr>
				<tr>
					<td><strong>Popup Image Indicator</strong></td>
					<td>Control the popup image indicator. Turn <strong>OFF</strong> to hide it, or <strong>ON</strong> to show it.</td>
					<td>ON</td>
				</tr>
				<tr>
					<td><strong>Popup Icon Indicator</strong></td>
					<td>Control the popup icon indicator. Turn <strong>OFF</strong> to hide it, or <strong>ON</strong> to show it.</td>
					<td>ON</td>
				</tr>
			</tbody>
		</table>

		<div class="abtb_doc_screen" data-abtb-doc-img="<?php echo esc_url( ABPTB_DOC_URL . '/' ) ?>image/slider.png"><img class="abtb_doc_screen_img" src="#" alt="Slider"></div>
	</div>
<?php
