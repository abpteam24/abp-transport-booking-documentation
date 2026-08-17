<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_resource">
        <h2 class="abp_color_theme">📋 Tax Configuration</h2>
        <div class="_divider_xs"></div>
        <label>
            The Tax Configuration system allows you to control whether tax is applied to transport bookings. Tax calculation is fully managed through WooCommerce tax settings.
        </label>
        <label>
            If WooCommerce Tax is enabled, taxes will be automatically calculated and applied according to your configured WooCommerce tax rules and product settings. If WooCommerce Tax is disabled, no tax will be calculated or displayed for the transport booking.
        </label>
        <h2 class="abp_color_theme_gap_xs">❓ FAQs Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The FAQ Configuration system allows you to display frequently asked questions and answers for your transport. You can use global FAQs or configure transport-specific FAQs for greater flexibility.
        </label>
        <h6 class="abp">🌍 Global FAQ</h6>
        <i>
            From the Global Configuration panel, you can create and manage a standard set of FAQs that can be reused across transports.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Define global questions and answers</li>
            <li>👉 Enable or disable the FAQ section globally</li>
            <li>👉 Maintain a consistent FAQ structure across transports</li>
        </ul>
        <h6 class="abp">🚍 Custom Transport-Level FAQ</h6>
        <i>
            Each individual transport can also have its own custom FAQ configuration.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Import FAQs from the global configuration</li>
            <li>👉 Add new FAQs specific to a transport</li>
            <li>👉 Modify imported questions and answers</li>
            <li>👉 Remove or reorder FAQs according to transport requirements</li>
        </ul>
        <h6 class="abp">🔄 Import & Customization System</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 One-click import from global FAQs</li>
            <li>👉 Fully editable after import</li>
            <li>👉 Combine global and custom FAQs when needed</li>
            <li>👉 Control FAQ order and visibility</li>
        </ul>
        <h6 class="abp">⚙️ Smart Behavior</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Global FAQs can be used as a reusable FAQ template</li>
            <li>👉 Each transport can customize its FAQ content independently</li>
            <li>👉 Imported FAQs can be edited without affecting the global configuration</li>
        </ul>
        <h6 class="abp_gap_xs">🚀 Benefits</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Helps passengers quickly find answers to common questions</li>
            <li>👉 Reduces repetitive customer support queries</li>
            <li>👉 Saves time with reusable FAQ templates</li>
            <li>👉 Provides flexible FAQ management for different transports</li>
        </ul>
        <h2 class="abp_color_theme">📄 Terms & Conditions Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Terms & Conditions Configuration system allows you to define the terms that passengers must review and accept before completing a transport booking. You can use global terms or configure transport-specific terms when needed.
        </label>
        <h6 class="abp_gap_xs">🌍 Global Terms & Conditions</h6>
        <i>
            From the Global Configuration panel, you can create and manage standard Terms & Conditions that can be reused across transports.
        </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Define global Terms & Conditions content</li>
            <li>👉 Enable or disable terms acceptance globally</li>
            <li>👉 Maintain consistent booking policies across transports</li>
        </ul>
        <h6 class="abp_gap_xs">🚍 Custom Transport-Level Terms</h6>
        <i> Each individual transport can also have its own custom Terms & Conditions configuration. </i>
        <ul class="abp_list_margin_xs">
            <li>👉 Import Terms & Conditions from the global configuration</li>
            <li>👉 Add custom terms specific to a transport</li>
            <li>👉 Modify imported terms when required</li>
            <li>👉 Replace or customize terms according to transport requirements</li>
        </ul>
        <h6 class="abp_gap_xs">🔄 Import & Customization System</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 One-click import from global Terms & Conditions</li>
            <li>👉 Fully editable after import</li>
            <li>👉 Combine global and custom terms when required</li>
            <li>👉 Control visibility and acceptance requirements</li>
        </ul>
        <h6 class="abp_gap_xs">⚙️ Smart Behavior</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Global terms can be used as a default policy template</li>
            <li>👉 Each transport can customize its terms independently</li>
            <li>👉 Imported terms can be edited without changing the global configuration</li>
        </ul>
        <h6 class="abp_gap_xs">🚀 Benefits</h6>
        <ul class="abp_list_margin_xs">
            <li>👉 Ensures passengers are aware of booking policies</li>
            <li>👉 Saves time with reusable global templates</li>
            <li>👉 Allows transport-specific policies when required</li>
            <li>👉 Improves transparency and booking compliance</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url(ABPTB_DOC_URL . '/') ?>image/post_resource.png">
            <img class="_img_control" src="#" alt="Terms & Conditions Configuration Overview">
        </div>
    </div>
<?php
