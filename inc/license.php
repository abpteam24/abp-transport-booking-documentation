<div class="abtb_doc_panel" data-tabs="#abptb_license">
    <div class="abtb_doc_page_head">
        <h2>🔑 License Management</h2>
        <p class="abtb_doc_lede">
            The <strong>License</strong> card (<strong>PRO</strong>) in the Dashboard sidebar manages your Transport Booking Pro license key and
            tracks the trial period. This is where you activate your purchased key, deactivate it when moving
            sites, and see the current license state at a glance.
        </p>
    </div>

    <h3>🎯 Overview</h3>
    <p class="abtb_doc_section_intro">
        Transport Booking Pro runs on a 30-day trial immediately after activation. During the trial every PRO feature,
        including automated E-mail and PDF tickets, is fully enabled. To keep using the PRO features beyond the trial —
        and to unlock automatic plugin updates and premium support — you need to activate a valid license key.
    </p>

    <div class="abtb_doc_callout abtb_doc_callout_note">
        <strong>ℹ️ Where to find this</strong>
        In the WordPress admin, open <em>ABP Transport Booking → Dashboard</em>. The License card appears in the sidebar on the right.
    </div>

    <h3>🔑 License states</h3>
    <p class="abtb_doc_section_intro">The badge next to the card title shows the current state:</p>
    <table>
        <thead>
            <tr>
                <th>State</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Active</strong></td>
                <td>A valid key is activated on this site. All PRO features, automatic updates and premium support are enabled.</td>
            </tr>
            <tr>
                <td><strong>Trial</strong></td>
                <td>No key has been activated yet. E-mail and PDF features stay enabled until the 30-day trial expires.</td>
            </tr>
            <tr>
                <td><strong>Expired</strong></td>
                <td>The trial ended or the activated license expired. E-mail and PDF features are disabled until a valid key is activated.</td>
            </tr>
            <tr>
                <td><strong>Inactive</strong></td>
                <td>No license data exists on this site yet.</td>
            </tr>
        </tbody>
    </table>

    <h3>🔑 Activating a license key</h3>
    <ol class="abtb_doc_steps">
        <li><strong>Buy the license</strong> — Purchase Transport Booking Pro from the official <em>abp-team.com</em> store and copy your key from the license section of your account.</li>
        <li><strong>Open the Dashboard</strong> — Go to <em>ABP Transport Booking → Dashboard</em> in the WordPress admin and find the License card in the sidebar.</li>
        <li><strong>Enter the key</strong> — Paste the key (format <code>XXXXXXXX-XXXXXXXX-XXXXXXXX</code>) into the <em>License Key</em> field.</li>
        <li><strong>Activate</strong> — Click <em>Activate License</em>. The plugin contacts the license server and stores the license on your site.</li>
        <li><strong>Confirm</strong> — A confirmation message appears and the card switches to <em>Active</em>, showing the expiry date, activation date and the site the key is locked to.</li>
    </ol>

    <div class="abtb_doc_callout abtb_doc_callout_warn">
        <strong>⚠️ Activate on your live website — not on a demo or staging site</strong>
        The license key is locked to the website where it is first activated, and each key permits a limited number of
        activations. Installing Pro on a demo or staging site and activating there consumes an activation slot and will
        not license your live site.
    </div>

    <h3>🔑 Deactivating a license key</h3>
    <ol class="abtb_doc_steps">
        <li>Open <em>ABP Transport Booking → Dashboard</em> and find the License card in the sidebar.</li>
        <li>Click <em>Deactivate License</em>. The stored key is removed from this site and the activation slot is freed.</li>
        <li>The site returns to the trial state (if trial time remains) for continued testing.</li>
    </ol>
    <div class="abtb_doc_callout abtb_doc_callout_tip">
        <strong>💡 Moving to a new server?</strong>
        Always deactivate the license on the old site before activating it on the new one — this avoids consuming an
        extra activation slot.
    </div>

    <h3>⚙️ Fields</h3>
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>License Key</strong></td>
                <td>The activation key for Transport Booking Pro. Read-only once a key is active.</td>
            </tr>
            <tr>
                <td><strong>Activate License</strong></td>
                <td>Validates the entered key against the license server and activates it on this site.</td>
            </tr>
            <tr>
                <td><strong>Deactivate License</strong></td>
                <td>Removes the license from this site and frees the activation slot. Shown only while a key is active.</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td>Shows the current state — <em>Active</em>, <em>Trial</em>, <em>Expired</em> or <em>Inactive</em>.</td>
            </tr>
            <tr>
                <td><strong>Expires</strong></td>
                <td>The date the activated license expires. Keep renewing before this date to avoid interruption.</td>
            </tr>
            <tr>
                <td><strong>Activated</strong></td>
                <td>The date the key was activated on this site.</td>
            </tr>
            <tr>
                <td><strong>Site</strong></td>
                <td>The website URL the key is locked to.</td>
            </tr>
        </tbody>
    </table>

    <h3>✅ Prerequisites for automatic updates</h3>
    <p class="abtb_doc_section_intro">
        Automatic update checks for Transport Booking Pro are handled by the license subsystem and are only polled while
        a license is active. To receive new versions reliably:
    </p>
    <ul>
        <li>Keep a valid, non-expired license active on your live site.</li>
        <li>Make sure your server can reach the license server (HTTPS outbound connections).</li>
        <li>Renew before the expiry date so updates and support are never interrupted.</li>
    </ul>

    <div class="abtb_doc_callout abtb_doc_callout_note">
        <strong>ℹ️ Trial behavior</strong>
        When the site starts without a key, a <em>30-day</em> trial begins automatically. The License card shows the remaining
        trial days, and once the trial is over (or the license expires) the E-mail and PDF features are disabled until a
        valid key is activated.
    </div>
</div>