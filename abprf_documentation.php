<?php
    /**
     * Plugin Name: ABP Transport Booking -  Documentation
     * Plugin URI:
     * Description: ABP Transport Booking -  Documentation
     * Version: 1.0
     * Author: abpteam
     * Author URI: http://www.abp-team.com/
     * Text Domain: abptb_documentation
     * Domain Path: /languages
     * WC requires at least: 8.0.0
     * *  WC tested up to: latest
     */
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }
    if (!class_exists('ABPTB_Documentation')) {
        class ABPTB_Documentation {
            public function __construct() {
                add_action('admin_init', function () {
                    if (!function_exists('is_plugin_active')) {
                        require_once ABSPATH . 'wp-admin/includes/plugin.php';
                    }
                });
                add_action(
                    'before_woocommerce_init', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
                    function () {
                        if (class_exists('\Automattic\WooCommerce\Utilities\FeaturesUtil')) {
                            \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
                                'custom_order_tables',
                                __FILE__,
                                true
                            );
                        }
                    }
                );
                if (!defined('ABPTB_DOC_DIR')) {
                    define('ABPTB_DOC_DIR', dirname(__FILE__));
                }
                if (!defined('ABPTB_DOC_URL')) {
                    define('ABPTB_DOC_URL', plugins_url() . '/' . plugin_basename(dirname(__FILE__)));
                }
                add_shortcode('abptb-documentation', array($this, 'do_documentation'));
                add_action('abptb_add_admin_menu_tab', array($this, 'menu_tab'));
                add_action('abptb_load_documentation', array($this, 'documentation'));
            }
            public function menu_tab($active_tab): void {
                ?>
                <a href="<?php echo esc_url(ABPTB_Function::build_url('documentation')); ?>" class="_btn_white_xs <?php echo esc_attr($active_tab == 'documentation' ? 'abp_active' : ''); ?>">
                    📚<?php esc_html_e('Documentation', 'abptb_documentation'); ?>
                </a>
                <?php
            }
            public function do_documentation(): bool|string {
                ob_start();
                $this->documentation();
                return ob_get_clean();
            }
            public function documentation(): void {
                ?>
                <div class="abptb_area documentation">
                    <div class="abp_container">
                        <div class="abp_panel">
                            <!-- HEADER -->
                            <div class="_panel_head _fd_column_gap_xs">
                                <h3 class="abp_color_11_gap_xs">📘ABP Transport Booking Documentation</h3>
                                <i class="abp_text_center">WooCommerce transport booking for bus, ferry, shuttle and coach services with seat plans, ticket types, routes, schedules and return trips.</i>
                            </div>
                            <div class="_panel_body_ov_initial">
                                <div class="abp_tabs tab_left">
                                    <!-- LEFT MENU -->
                                    <ul class="abp_bg_light tab_lists">
                                        <li data-tabs-target="#abptb_getting_start">🚀Getting Started</li>
                                        <li data-tabs-target="#abptb_feature">⭐Features</li>
                                        <li data-tabs-target="#abptb_application">📌 Applications</li>
                                        <li data-tabs-target="#abptb_menu_lists">🧭Menu Overview</li>
                                        <!-- POST SECTION -->
                                        <li>
                                            <div class="_fj_between_fa_center" data-collapse-target="#display_abptb_post" data-tabs-target="#abptb_post" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus"><span class="_gap_xs"> 🚌 Transport List and  Management</span> <span data-icon class="fas fa-plus"></span></div>
                                            <ul class="abp_bg_5_pad_l" data-collapse="#display_abptb_post">
                                                <li data-tabs-target="#abptb_general"><span class="fas fa-rainbow"></span> General Configuration</li>
                                                <li data-tabs-target="#abptb_ticket">🎫 Ticket</li>
                                                <li data-tabs-target="#abptb_route"><span class="fas fa-route"></span> Route</li>
                                                <li data-tabs-target="#abptb_price">💲 Price</li>
                                                <li data-tabs-target="#abptb_date">📅 Date Configuration</li>
                                                <li data-tabs-target="#abptb_time">⏰ Time Configuration</li>
                                                <li data-tabs-target="#abptb_additional">💰 Additional Services</li>
                                                <li data-tabs-target="#abptb_client_form">🧾 Client Forms</li>
                                                <li data-tabs-target="#abptb_discount">✂️ Discount Settings(PRO)</li>
                                                <li data-tabs-target="#abptb_resource">📚 Resources</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abptb_orders"><?php ABPTB_Static::svg('order'); ?>Orders</li>
                                        <li data-tabs-target="#abptb_sp"><?php ABPTB_Static::svg('seat'); ?>Ticket/Seat Plan</li>
                                        <li data-tabs-target="#abptb_create_order"><?php ABPTB_Static::svg('plus'); ?>Add Order (PRO)</li>
                                        <!-- GLOBAL DATA -->
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abptb_global" data-tabs-target="#abptb_global_data" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">
                                                <div class="_gap_xs">🌐 Global Data</div>
                                                <span data-icon class="fas fa-plus"></span>
                                            </div>
                                            <ul class="abp_bg_5_pad_l" data-collapse="#display_abptb_global">
                                                <li data-tabs-target="#abptb_date_global">📅 Dates</li>
                                                <li data-tabs-target="#abptb_additional_global">💰Additional services</li>
                                                <li data-tabs-target="#abptb_client_form_global">📋Client Form</li>
                                                <li data-tabs-target="#abptb_global_discount">✂️ Discount (PRO)</li>
                                                <li data-tabs-target="#abptb_location_global">📍Stops</li>
                                                <li data-tabs-target="#abptb_category_global">🏘️ Transport Type</li>
                                                <li data-tabs-target="#abptb_organizer_global">🏢 Organizer</li>
                                                <li data-tabs-target="#abptb_brand_global">🏷️ Brands</li>
                                                <li data-tabs-target="#abptb_feature_global">🔗Feature</li>
                                                <li data-tabs-target="#abptb_resource_global">📚 Resources</li>
                                            </ul>
                                        </li>
                                        <!-- CONFIGURATION -->
                                        <li>
                                            <div class="_fj_between" data-collapse-target="#display_abptb_configuration" data-tabs-target="#abptb_configuration" data-open-icon="fas fa-minus" data-close-icon="fas fa-plus">
                                                <div class="_gap_xs">⚙️ Configuration</div>
                                                <span data-icon class="fas fa-plus"></span>
                                            </div>
                                            <ul class="abp_bg_5_pad_l" data-collapse="#display_abptb_configuration">
                                                <li data-tabs-target="#abptb_common">🚌 Transport</li>
                                                <li data-tabs-target="#abptb_pdf">📄PDF (PRO)</li>
                                                <li data-tabs-target="#abptb_booking_pdf">📑 Order Lists PDF (PRO)</li>
                                                <li data-tabs-target="#abptb_csv">📑Order Lists CSV (PRO)</li>
                                                <li data-tabs-target="#abptb_email">📧 E-mail (PRO)</li>
                                                <li data-tabs-target="#abptb_on_off"><span class="fas fa-toggle-on"></span>ON/OFF</li>
                                                <li data-tabs-target="#abptb_slider">🖼️Slider</li>
                                                <li data-tabs-target="#abptb_contact">☎️ Contact Information</li>
                                                <li data-tabs-target="#abptb_css_value">🎨CSS Property</li>
                                            </ul>
                                        </li>
                                        <li data-tabs-target="#abptb_status">🛡️ Status</li>
                                        <li data-tabs-target="#abptb_shortcode">🔗Shortcodes</li>
                                        <li data-tabs-target="#abptb_template">🧩Templating</li>
                                        <li data-tabs-target="#abptb_translate">🌍Translate</li>
                                    </ul>
                                    <!-- CONTENT -->
                                    <div class="tab_content">
                                        <?php
                                            require_once ABPTB_DOC_DIR . '/inc/getting_start.php';
                                            require_once ABPTB_DOC_DIR . '/inc/features.php';
                                            require_once ABPTB_DOC_DIR . '/inc/application.php';
                                            require_once ABPTB_DOC_DIR . '/inc/menu_lists.php';
                                            /************************/
                                            require_once ABPTB_DOC_DIR . '/inc/post_menu.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_general.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_ticket.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_route.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_price.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_date.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_time.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_additional.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_client_form.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_discount.php';
                                            require_once ABPTB_DOC_DIR . '/inc/post_resource.php';
                                            /************************/
                                            require_once ABPTB_DOC_DIR . '/inc/ticket_sp.php';
                                            require_once ABPTB_DOC_DIR . '/inc/order_list.php';
                                            require_once ABPTB_DOC_DIR . '/inc/add_order.php';
                                            /************************/
                                            require_once ABPTB_DOC_DIR . '/inc/global_data.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_date.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_additional.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_client_form.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_discount.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_category.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_location.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_organizer.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_brand.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_feature.php';
                                            require_once ABPTB_DOC_DIR . '/inc/global_resource.php';
                                            /************************/
                                            require_once ABPTB_DOC_DIR . '/inc/configuration.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_common.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_pdf.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_order_list.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_csv.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_email.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_on_off.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_slider.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_contact.php';
                                            require_once ABPTB_DOC_DIR . '/inc/configuration_css.php';
                                            /************************/
                                            require_once ABPTB_DOC_DIR . '/inc/status.php';
                                            require_once ABPTB_DOC_DIR . '/inc/shortcode.php';
                                            require_once ABPTB_DOC_DIR . '/inc/templating.php';
                                            require_once ABPTB_DOC_DIR . '/inc/translate.php';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        new ABPTB_Documentation();
    }
