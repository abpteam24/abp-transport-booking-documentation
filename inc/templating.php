<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_template">
        <h2 class="abp_color_theme">Transport Booking: Templating</h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Transport Booking provides a flexible template override system that allows you
            to customize the frontend structure, layout, styling classes, icons, and other
            template-related elements according to your website requirements.
        </i>
        <h5 class="abp_color_theme">🛠️ Template Override</h5>
        <i class="_color_7_fs_label_mar_tb_d_block">
            To start customizing the plugin templates, copy the
            <strong>tb_templates</strong> folder from the Transport Booking plugin directory
            and paste it into your <strong>wp-content</strong> directory. Once the custom
            template folder is detected, Transport Booking will load the customized
            template files instead of the corresponding default plugin templates.
        </i>
        <h5 class="abp_color_theme">📁 Customize Only the Required Templates</h5>
        <i class="_color_7_fs_label_mar_tb_d_block">
            You do not need to keep every template file in the copied folder. Keep only the
            files you actually want to customize and remove any unnecessary files. This
            allows the plugin to continue using its default templates for all other sections
            and makes future template maintenance easier.
        </i>
        <h5 class="abp_color_theme">🔄 Plugin Updates & Template Overrides</h5>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Custom template files are not automatically updated when Transport Booking is
            updated. If a new plugin version introduces changes to the default templates,
            compare your overridden files with the latest plugin templates and update your
            customizations when necessary.
        </i>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Keeping unnecessary template files in the override folder may cause conflicts
            with new templates, features, or structural changes introduced in future
            plugin updates. Therefore, only override the files that require customization.
        </i>
        <h5 class="abp_color_theme">⚠️ Development Requirements</h5>
        <ul class="abp_list_margin">
            <li>
                👉 Basic knowledge of WordPress template structure is recommended.
            </li>
            <li>
                👉 Basic PHP and HTML knowledge may be required for template customization.
            </li>
            <li>
                👉 Make changes carefully and test customized templates after plugin updates.
            </li>
            <li>
                👉 Always keep a backup of your customized templates before making major changes.
            </li>
        </ul>
        <i class="_color_7_fs_label_mar_tb_d_block">
            <strong>Important:</strong> Template overrides are intended for advanced
            customization. Incorrect changes to PHP, HTML, template structure, or required
            plugin variables may cause frontend errors or unexpected behavior. Only modify
            files and code that you understand.
        </i>
    </div>
<?php
