<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtb_doc_panel" data-tabs="#abptb_shortcode">
        <div class="abtb_doc_page_head">
            <h2>Shortcodes</h2>
            <p class="abtb_doc_lede">
                Transport Booking provides shortcodes that let you display transport listings, booking interfaces,
                ticket retrieval, and image galleries anywhere on your website — pages, posts, widgets, or other
                supported WordPress areas.
            </p>
        </div>

        <h3>🔄 Overview</h3>
        <p class="abtb_doc_section_intro">
            Each shortcode supports a set of parameters for controlling layout, filtering, item count, and frontend
            display. Parameters can be combined to create customised transport listing and booking pages tailored
            to your requirements.
        </p>

        <div class="abtb_doc_callout abtb_doc_callout_note">
            <strong>ℹ️ Parameter usage</strong>
            Use only the parameters supported by each shortcode. Invalid or unsupported parameters are ignored and do
            not affect the shortcode output.
        </div>

        <h3>🚌 Booking Shortcode</h3>
        <p class="abtb_doc_section_intro">
            The <code>[abptb-booking]</code> shortcode displays the Transport Booking interface. Use it to create a
            dedicated booking page where customers can browse available transports and proceed with the booking process.
            You can show all transports or filter by a specific transport, category, or location.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>style</code></td>
                    <td>Layout style of the transport listing. Options: <code>grid</code>, <code>missionary</code>. Example: <code>[abptb-booking style="missionary"]</code></td>
                    <td>grid</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display a specific transport post. When used, other filtering parameters are ignored. Example: <code>[abptb-booking post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter transports by category ID. Example: <code>[abptb-booking cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter transports by location ID. Example: <code>[abptb-booking loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>bp</code> &amp; <code>dp</code></td>
                    <td>Filter transports by route. Values are location IDs. Example: <code>[abptb-booking bp="2" dp="3"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>org_id</code></td>
                    <td>Filter transports by Organizer ID. Example: <code>[abptb-booking org_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>brand_id</code></td>
                    <td>Filter transports by Brand ID. Example: <code>[abptb-booking brand_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>show</code></td>
                    <td>Number of transports to display. Example: <code>[abptb-booking show="12"]</code></td>
                    <td>9</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of columns (grid layout only). Example: <code>[abptb-booking column="4"]</code></td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>

        <p class="abtb_doc_section_intro">
             When a listing shortcode is rendered, ABP Transport Booking also fires the 
             <code>abptb_post_filter</code> action just above the list. That action loads the 
             <strong>Frontend Taxonomy Filter Bar</strong> (see the Features guide). The bar shows 
             Category, Brand, Organizer and Location dropdowns; each one is shown only when its 
             on/off toggle is enabled in the shortcode defaults, so the visitor sees exactly the 
             filters they are allowed to use. Selecting a value filters the transports on the page.
         </p>
<h3>🔍 Frontend Taxonomy Filter Bar</h3>
<p class="abtb_doc_section_intro">
             When a listing shortcode is rendered, ABP Transport Booking also shows a toolbar of filter dropdowns just above the transport list. Each dropdown (Category, Brand, Organizer, Location) can be independently turned on or off.
         </p>
<table>
     <thead>
         <tr><th>Parameter</th><th>Description</th><th>Default</th></tr>
     </thead>
     <tbody>
         <tr><td><code>category</code></td><td>Toggle the Category dropdown on/off.</td><td><code>&quot;on&quot;</code></td></tr>
         <tr><td><code>brand</code></td><td>Toggle the Brand dropdown on/off.</td><td><code>&quot;off&quot;</code></td></tr>
         <tr><td><code>organizer</code></td><td>Toggle the Organizer dropdown on/off.</td><td><code>&quot;off&quot;</code></td></tr>
         <tr><td><code>location</code></td><td>Toggle the Location/Stops dropdown on/off.</td><td><code>&quot;on&quot;</code></td></tr>
     </tbody>
</table>
<p class="abtb_doc_callout abtb_doc_callout_note">
     <strong>💡 Tip:</strong> set any of these to a value other than <code>&quot;on&quot;</code> (e.g. <code>&quot;&quot;</code> or <code>&quot;off&quot;</code>) to hide that filter from the frontend.
</p>
<h3>📋 Listing Shortcode</h3>
        <p class="abtb_doc_section_intro">
            The <code>[abptb-post]</code> shortcode displays a transport listing anywhere on your website. It is useful for
            creating dedicated transport listing pages with different layouts and filtering options. You can display all
            transports or limit results by transport, category, or location.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>style</code></td>
                    <td>Layout style of the transport listing. Options: <code>grid</code>, <code>missionary</code>. Example: <code>[abptb-post style="missionary"]</code></td>
                    <td>grid</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display a specific transport post. When used, other filtering parameters are ignored. Example: <code>[abptb-post post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter transports by category ID. Example: <code>[abptb-post cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter transports by location ID. Example: <code>[abptb-post loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>bp</code> &amp; <code>dp</code></td>
                    <td>Filter transports by route. Values are location IDs. Example: <code>[abptb-post bp="2" dp="3"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>org_id</code></td>
                    <td>Filter transports by Organizer ID. Example: <code>[abptb-post org_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>brand_id</code></td>
                    <td>Filter transports by Brand ID. Example: <code>[abptb-post brand_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>show</code></td>
                    <td>Number of transports to display. Example: <code>[abptb-post show="12"]</code></td>
                    <td>9</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of columns (grid layout only). Example: <code>[abptb-post column="4"]</code></td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>

        <h3>🎫 Ticket Retrieval Shortcode <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span></h3>
        <p class="abtb_doc_section_intro">
            The <code>[abptb-ticket]</code> shortcode lets customers securely retrieve their booking and ticket information
            using their Order ID or Ticket PIN. Customers can view booking details and download the corresponding ticket
            as a PDF.
        </p>
        <ul>
            <li>Retrieve booking information using Order ID.</li>
            <li>Retrieve ticket information using Ticket PIN.</li>
            <li>View customer and booking details.</li>
            <li>Display ticket and journey information.</li>
            <li>Download the ticket as a PDF.</li>
            <li>Provides an easy way for customers to access their ticket after booking.</li>
        </ul>

        <h3>🖼️ Gallery Shortcode</h3>
        <p class="abtb_doc_section_intro">
            The <code>[abptb-gallery]</code> shortcode displays transport images in a gallery or slider layout anywhere on your
            website. You can show images for a specific transport or filter the gallery by category and location.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>style</code></td>
                    <td>Gallery display style. Options: <code>gallery</code>, <code>slider</code>. Example: <code>[abptb-gallery style="slider"]</code></td>
                    <td>gallery</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display images for a specific transport post. Example: <code>[abptb-gallery post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter gallery images by category ID. Example: <code>[abptb-gallery cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter gallery images by location ID. Example: <code>[abptb-gallery loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of images per row (gallery mode only). Example: <code>[abptb-gallery column="4"]</code></td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
