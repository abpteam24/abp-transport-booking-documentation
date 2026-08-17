<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="tab_item" data-tabs="#abptb_translate">
        <h2 class="abp_color_theme">🌐 Transport Booking: Translation</h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Transport Booking is fully translation-ready and can be translated using any
            WordPress translation plugin that supports standard WordPress translation files.
            For the easiest workflow, we recommend using the Loco Translate plugin.
        </i>
        <h5 class="abp_color_theme">🔤 Translate Transport Booking</h5>
        <ol class="abp_list_margin">
            <li>
                Go to <strong>Plugins → Add New</strong> from your WordPress dashboard.
            </li>
            <li>
                Search for <strong>Loco Translate</strong>, then install and activate the plugin.
            </li>
            <li>
                Navigate to <strong>Loco Translate → Plugins</strong>.
            </li>
            <li>
                Select <strong>Transport Booking</strong> from the available plugins.
            </li>
            <li>
                Choose an existing language or click <strong>New language</strong> to create
                a translation for your preferred language.
            </li>
            <li>
                Select the appropriate translation location and create the translation file.
            </li>
            <li>
                Click <strong>Sync</strong> to load the latest translatable strings from the plugin.
            </li>
            <li>
                Translate the required strings and click <strong>Save</strong> to save your translations.
            </li>
        </ol>
        <h5 class="abp_color_theme">🔄 Updating Translation Strings</h5>
        <i class="_color_7_fs_label_mar_tb_d_block">
            When Transport Booking is updated and new translatable strings are added,
            open the corresponding translation in Loco Translate and click
            <strong>Sync</strong> to update the translation catalog. You can then translate
            any newly added or modified strings and save the changes.
        </i>
        <h5 class="abp_color_theme">💡 Translation Notes</h5>
        <ul class="abp_list_margin">
            <li>
                👉 Transport Booking uses standard WordPress translation functions and is
                translation-ready.
            </li>
            <li>
                👉 Plugin interface text and other registered translatable strings can be
                translated through Loco Translate or another compatible translation plugin.
            </li>
            <li>
                👉 Dynamic content entered by administrators, such as transport names,
                route names, ticket names, and custom descriptions, may require separate
                translation depending on how the content is created and displayed.
            </li>
            <li>
                👉 Documentation content is not automatically translated through the
                plugin's translation files.
            </li>
        </ul>
        <h5 class="abp_color_theme">🛡️ Keep Your Translations Safe</h5>
        <i class="_color_7_fs_label_mar_tb_d_block">
            To prevent translations from being overwritten during plugin updates, avoid
            storing customized translation files directly inside the plugin's own directory.
            Use the custom or system-protected translation location provided by Loco Translate
            whenever possible.
        </i>
        <i class="_color_7_fs_label_mar_tb_d_block">
            <strong>Important:</strong> After updating Transport Booking, always use the
            <strong>Sync</strong> option to check for new translation strings and review
            your translations before saving.
        </i>
    </div>
<?php
