<div class="abtb_doc_panel" data-tabs="#abptb_pp_post">
	<div class="abtb_doc_page_head">
		<h2>💰 Partial Payment Configuration (PRO)</h2>
		<p class="abtb_doc_lede">
			The <strong>Partial Payment</strong> tab under each transport lets you allow customers to pay only a
			partial amount of the booking price at checkout. You can define the deposit as a percentage of the
			total or as a fixed amount, independently for every transport.
		</p>
	</div>

	<p class="abtb_doc_section_intro">
		Partial Payment is a site-wide PRO feature. The individual transport settings below either define a
		custom deposit for that transport or fall back to the global Partial Payment configuration when no
		transport-specific values are set.
	</p>

	<h3>🔀 Enable Partial Payment for the Transport</h3>
	<table>
		<thead>
			<tr>
				<th>Option</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Pay Partial Amount at Checkout?</strong></td>
				<td>Turn this switch to <strong>ON</strong> to allow customers to pay a partial amount for this transport at checkout. Turn it <strong>OFF</strong> to charge the full amount for this transport.</td>
			</tr>
		</tbody>
	</table>

	<h3>🧮 Partial Payment Type &amp; Value</h3>
	<p class="abtb_doc_section_intro">
		When the switch is ON, the deposit calculation is defined by a type and a value:
	</p>
	<ul>
		<li><strong>Partial Payment Type</strong> — choose <em>Percentage (%) of Total</em> or <em>Fixed Amount</em>.</li>
		<li><strong>Partial Payment Value</strong> — enter the deposit value: <code>50</code> means 50% of the total for a percentage, or <code>500</code> means a fixed 500 currency-unit deposit.</li>
		<li>The deposit is never larger than the line total, and the remaining balance is shown to the customer.</li>
	</ul>

	<h3>🌐 Global Fallback</h3>
	<p class="abtb_doc_section_intro">
		If the transport switch is ON but no valid type/value is saved for the transport, the global Partial
		Payment configuration set under <em>Global Data → Partial Payment</em> is used automatically. If neither
		a transport-level nor a global value is available, the full amount is charged.
	</p>

	<h3>🛒 At Checkout</h3>
	<p class="abtb_doc_section_intro">
		For eligible transports, customers see a <strong>Payment Option</strong> block at checkout where they can
		choose to pay the <em>full amount now</em> or the <em>partial amount (deposit) now</em>. When the partial
		option is selected, the balance is subtracted from the cart and shown as a
		<em>Partial Payment : Balance Due Later</em> fee.
	</p>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ PRO feature</strong>
		Partial Payment is available only with Transport Booking Pro. The free version does not include partial or
		deposit payment functionality.
	</div>
</div>