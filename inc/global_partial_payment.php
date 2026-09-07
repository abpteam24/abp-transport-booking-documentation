<div class="abtb_doc_panel" data-tabs="#abptb_pp_global">
	<div class="abtb_doc_page_head">
		<h2>💰 Global Partial Payment Configuration (PRO)</h2>
		<p class="abtb_doc_lede">
			The <strong>Partial Payment</strong> screen under the <em>Global Data</em> tab defines the website-wide
			default deposit for transport bookings. It is used automatically for every transport that enables
			<em>Pay Partial Amount at Checkout?</em> without its own transport-level type and value.
		</p>
	</div>

	<p class="abtb_doc_section_intro">
		Partial Payment lets customers pay a deposit at checkout and settle the remaining balance later. The
		calculation method (percentage or fixed amount) is configured here globally and can be overridden
		individually for each transport.
	</p>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ Feature switch</strong>
		The whole Partial Payment feature is controlled by the <strong>Partial Payment</strong> switch under
		<em>Configuration → On / Off Features</em> (default <strong>ON</strong>). Turn this switch OFF to
		completely disable Partial Payment site-wide and hide the Global Data and transport settings for it.
	</div>

	<h3>🧮 Global Partial Payment Settings</h3>
	<table>
		<thead>
			<tr>
				<th>Option</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Partial Payment Type</strong></td>
				<td>Choose how the deposit is calculated: <em>Percentage (%) of Total</em> or <em>Fixed Amount</em>.</td>
			</tr>
			<tr>
				<td><strong>Partial Payment Value</strong></td>
				<td>Enter the deposit value. <code>50</code> means 50% of the total booking price, while <code>500</code> means a fixed 500 currency-unit deposit per eligible line.</td>
			</tr>
			<tr>
				<td><strong>Save Global Partial Payment</strong></td>
				<td>Click to save the global type and value, making them the site-wide default deposit.</td>
			</tr>
		</tbody>
	</table>

	<h3>⬇️ Priority &amp; Fallback</h3>
	<p class="abtb_doc_section_intro">
		The system checks the transport-level Partial Payment settings first. If a transport enables partial
		payment but has no valid type/value of its own, the applicable global configuration is applied. When no
		valid value is available at either level, the full amount is charged.
	</p>

	<h3>🛒 Checkout Behaviour</h3>
	<ul>
		<li>For eligible transports, customers see a <strong>Payment Option</strong> block at checkout and can choose to pay the <em>full amount now</em> or the <em>partial amount (deposit) now</em>.</li>
		<li>Selecting the partial option subtracts the balance from the cart and adds a <em>Partial Payment : Balance Due Later</em> fee.</li>
		<li>The order stores the full amount, deposit paid, and remaining balance, plus the payment option chosen by the customer.</li>
	</ul>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ PRO feature</strong>
		Global Partial Payment configuration is available only with Transport Booking Pro. The basic plugin does
		not include partial payment functionality.
	</div>
</div>