<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_shortcode">
        <h2 class="abp_color_theme">Transport Booking - Shortcodes</h2>
        <div class="_divider_xs"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Transport Booking provides flexible shortcodes that allow you to display transport listings, booking interfaces, and image galleries anywhere on your website. You can use these shortcodes on pages, posts, widgets, or other supported WordPress areas.
        </i>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Each shortcode supports different parameters for controlling the layout, filtering, number of items, and frontend display. Parameters can be combined to create customized transport listing and booking pages according to your requirements.
        </i>
        <!-- Booking shortcode -->
        <pre>[<strong class="abp_color_theme">abptb-booking</strong>]</pre>
        <label>
            The <strong>abptb-booking</strong> shortcode allows you to display the Transport Booking interface anywhere on your website. It can be used to create a dedicated booking page where customers can browse available transports and continue with the booking process.
        </label>
        <label>
            You can display all available transports or filter the results by a specific transport, category, or location. The booking interface provides the same core booking functionality available from the transport details page.
        </label>
        <table class="abp_mar_t">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Layout style of the transport listing.
                    <strong class="abp_color_theme">grid, list, masonry</strong> |
                    Default: <strong class="abp_color_theme">grid</strong>
                    <code>[abptb-booking style="list"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Display a specific transport post. When this parameter is used, other filtering parameters will be ignored.
                    <code>[abptb-booking post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter transports by transport category ID.
                    <code>[abptb-booking cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter transports by location ID.
                    <code>[abptb-booking loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>show</td>
                <td>
                    Number of transports to display.
                    Default: <strong class="abp_color_theme">9</strong>
                    <code>[abptb-booking show="12"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of columns. This parameter applies to the grid layout.
                    Default: <strong class="abp_color_theme">3</strong>
                    <code>[abptb-booking column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- Post List shortcode -->
        <pre>[<strong class="abp_color_theme">abptb-post</strong>]</pre>
        <label>
            The <strong>abptb-post</strong> shortcode allows you to display a transport listing anywhere on your website. It is useful for creating dedicated transport listing pages with different layouts and filtering options.
        </label>
        <label>
            You can display all transports or limit the results to a specific transport, category, or location using the available parameters.
        </label>
        <table class="abp">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Layout style of the transport listing.
                    <strong class="abp_color_theme">grid, list, masonry</strong> |
                    Default: <strong class="abp_color_theme">grid</strong>
                    <code>[abptb-post style="list"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Display a specific transport post. When this parameter is used, other filtering parameters will be ignored.
                    <code>[abptb-post post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter transports by transport category ID.
                    <code>[abptb-post cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter transports by location ID.
                    <code>[abptb-post loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>show</td>
                <td>
                    Number of transports to display.
                    Default: <strong class="abp_color_theme">9</strong>
                    <code>[abptb-post show="12"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of columns. This parameter applies to the grid layout.
                    Default: <strong class="abp_color_theme">3</strong>
                    <code>[abptb-post column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
        <!-- Gallery shortcode -->
        <pre>[<strong class="abp_color_theme">abptb-gallery</strong>]</pre>
        <label>
            The <strong>abptb-gallery</strong> shortcode allows you to display transport images in a gallery or slider layout anywhere on your website.
        </label>
        <label>
            You can display images for a specific transport or filter the gallery using category and location parameters.
        </label>
        <table class="abp">
            <tbody>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>style</td>
                <td>
                    Gallery display style.
                    <strong class="abp_color_theme">gallery, slider</strong> |
                    Default: <strong class="abp_color_theme">gallery</strong>
                    <code>[abptb-gallery style="slider"]</code>
                </td>
            </tr>
            <tr>
                <td>post_id</td>
                <td>
                    Display images for a specific transport post.
                    <code>[abptb-gallery post_id="123"]</code>
                </td>
            </tr>
            <tr>
                <td>cat_id</td>
                <td>
                    Filter gallery images by transport category ID.
                    <code>[abptb-gallery cat_id="1"]</code>
                </td>
            </tr>
            <tr>
                <td>loc_id</td>
                <td>
                    Filter gallery images by location ID.
                    <code>[abptb-gallery loc_id="2"]</code>
                </td>
            </tr>
            <tr>
                <td>column</td>
                <td>
                    Number of images per row. This parameter applies to gallery mode.
                    Default: <strong class="abp_color_theme">3</strong>
                    <code>[abptb-gallery column="4"]</code>
                </td>
            </tr>
            </tbody>
        </table>
        <i class="_color_7_fs_label_mar_tb_d_block">
            <strong>Note:</strong> Use only the parameters supported by each shortcode. Invalid or unsupported parameters may be ignored and will not affect the shortcode output.
        </i>
    </div>
<?php
