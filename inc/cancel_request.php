<div class="abtb_doc_panel" data-tabs="#abptb_cancel_request">
	<div class="abtb_doc_page_head">
		<h2>🚫 Cancel Requests</h2>
		<p class="abtb_doc_lede">
			The <strong>Cancel Requests</strong> admin screen (PRO) lists every booking for which a customer has
			requested cancellation. From here the admin approves or rejects each request, and configures how long
			before departure a request can still be sent.
		</p>
	</div>

	<p class="abtb_doc_section_intro">
		The <strong>Cancel Requests</strong> menu tab appears in the main admin menu (between <em>Add Order</em>
		and <em>Global Data</em>) only when <strong>Transport Booking Pro</strong> is active. The menu label shows
		the number of pending requests in a badge.
	</p>

	<h3>📋 What the Page Shows</h3>
	<p class="abtb_doc_section_intro">
		The list contains bookings that have a pending cancellation request from a customer. Each row shows:
	</p>
	<ul>
		<li><strong>Action</strong> — Approve (✔) and Reject (✖) buttons.</li>
		<li><strong>Order / Date</strong> — order number and creation date.</li>
		<li><strong>Transport</strong> — transport name and journey start time.</li>
		<li><strong>From – To</strong> — route direction of the booking.</li>
		<li><strong>Ticket Info</strong>, <strong>Total</strong> and booking <strong>Status</strong>.</li>
		<li><strong>Requested By / At</strong> — which customer sent the request and when.</li>
	</ul>

	<h3>✔️ Approve / ✖️ Reject</h3>
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
		Only administrators can approve or reject requests. When there are no pending requests, the page shows a
		"no orders found" notice.
	</p>

	<h3>⚙️ Cancel Request Setting</h3>
	<p class="abtb_doc_section_intro">
		The <strong>Cancel Request Setting</strong> button (top-right) opens a popup to configure how long before
		the journey starts a customer can still send a request — in <em>Hours</em> or <em>Days</em> (e.g.
		24 hours). The customer sees the <em>Request Cancellation</em> button on their My Account booking only
		while the journey begins more than this limit away.
	</p>

	<h3>🔗 How Requests Arrive Here</h3>
	<p class="abtb_doc_section_intro">
		Customers send cancellation requests from their <strong>My Account → Transport Bookings</strong> page
		(PRO). The whole flow is admin-approved:
	</p>
	<ul>
		<li>The booking is flagged <strong>Cancel Request Pending</strong> for the customer until the admin decides.</li>
		<li>The booking row in the admin Order List and here in Cancel Requests shows a
			<strong>Cancel Requested</strong> badge while pending.</li>
		<li>Until the admin acts, the request stays in this list — the customer cannot send another request in
			the meantime.</li>
	</ul>

	<div class="abtb_doc_callout abtb_doc_callout_note">
		<strong>ℹ️ PRO feature</strong>
		Cancel Requests is part of Transport Booking Pro and only appears when PRO is active and the
		<em>Customer Cancel Request</em> feature switch (Configuration → On/Off Features) is enabled.
	</div>
</div>