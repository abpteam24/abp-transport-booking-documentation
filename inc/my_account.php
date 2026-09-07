<div class="abtb_doc_panel" data-tabs="#abptb_my_account">
	<div class="abtb_doc_page_head">
		<h2>👤 Customer My Account — Transport Bookings</h2>
		<p class="abtb_doc_lede">
			Customers can view every transport booking they made from the WooCommerce <strong>My Account</strong>
			page, and PRO adds a <strong>Download Booking PDF</strong> button and a
			<strong>Request Cancellation</strong> option for each booked journey.
		</p>
	</div>

	<p class="abtb_doc_section_intro">
		A <strong>Transport Bookings</strong> menu item is added automatically next to the standard
		WooCommerce <em>Orders</em> section. The page lists the logged-in customer's bookings newest first,
		with pagination, using the same booking data the admin Order List uses.
	</p>

	<h3>📋 What the Customer Sees</h3>
	<p class="abtb_doc_section_intro">Each booking card shows:</p>
	<ul>
		<li><strong>Transport name</strong> and order reference number with creation date.</li>
		<li><strong>Booking status</strong> chip (processing, completed, cancelled, and so on).</li>
		<li><strong>Route</strong> (from — to), boarding point, dropping point, and approximate journey time.</li>
		<li><strong>Ticket types</strong> with quantities and the booking total.</li>
		<li><strong>Seat number</strong> and additional services when configured.</li>
	</ul>

	<h3>👤 Where It Appears</h3>
	<p class="abtb_doc_section_intro">
		The list is rendered on the WooCommerce account page endpoint
		<code>/my-account/abptb-bookings/</code>. It shows bookings tied to the customer's account — bookings
		made while logged in are linked to the customer automatically.
	</p>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ Free &amp; PRO</strong>
		Showing the customer's bookings in My Account is included in the <strong>free</strong> plugin. The
		PDF download and cancel-request actions below are <strong>PRO</strong> features.
	</div>

	<h3>📄 Download Booking PDF (PRO)</h3>
	<p class="abtb_doc_section_intro">
		For bookings in a booked status (processing / completed), PRO shows a
		<strong>Download Booking PDF</strong> button. It downloads the order/invoice PDF for that booking.
		Customers can only download PDFs for their own bookings — the download is verified against the booking
		owner before the file is generated.
	</p>

	<h3>❌ Request Cancellation (PRO)</h3>
	<p class="abtb_doc_section_intro">
		A <strong>Request Cancellation</strong> button is shown for booked journeys that still begin more than
		the configured time limit away, and that do not already have a pending request.
	</p>
	<ul>
		<li>Sending a request marks the booking as <strong>Cancel Request Pending</strong> for the customer.</li>
		<li>The request is stored on the booking record, and the admin is notified via a
			<strong>Cancel Requested</strong> badge in the Order List.</li>
		<li>The customer cannot send another request while one is pending, and cannot request cancellation
			after the configured deadline.</li>
	</ul>

	<h3>⚙️ Admin-Controlled Settings (PRO)</h3>
	<p class="abtb_doc_section_intro">
		The entire cancellation flow is controlled by the administrator — there is no direct cancellation:
	</p>
	<table>
		<thead>
			<tr>
				<th>Where</th>
				<th>Setting</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Configuration → On/Off Features</td>
				<td><strong>Customer Cancel Request</strong> switch turns the feature on or off site-wide.</td>
			</tr>
			<tr>
				<td>Global Data → <strong>Cancel Request</strong> (new tab)</td>
				<td>Set how long before the journey starts a request can still be sent, in <em>Hours</em> or
					<em>Days</em> (default 24 hours). The customer sees the button only while the journey starts
					more than this limit away.</td>
			</tr>
		</tbody>
	</table>

	<h3>🛡️ Approving / Rejecting Requests (PRO)</h3>
	<p class="abtb_doc_section_intro">
		In <em>Transport Booking → Orders</em>, a booking with a pending request shows a
		<strong>Cancel Requested</strong> badge with two actions:
	</p>
	<table>
		<thead>
			<tr>
				<th>Action</th>
				<th>Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Approve (✔)</strong></td>
				<td>The booking is cancelled (status changes to <em>Cancelled</em>) and its seats/tickets
					<strong>immediately become available again</strong> for other customers to book.</td>
			</tr>
			<tr>
				<td><strong>Reject (✖)</strong></td>
				<td>The cancellation request is cleared and the booking keeps its current status.</td>
			</tr>
		</tbody>
	</table>
	<p class="abtb_doc_section_intro">
		Only administrators can approve or reject requests, and both actions are logged on the booking record
		(by whom and when).
	</p>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ PRO feature</strong>
		Download Booking PDF and Request Cancellation require Transport Booking Pro. The request-approval
		buttons in the admin Order List are also PRO-only.
	</div>
</div>