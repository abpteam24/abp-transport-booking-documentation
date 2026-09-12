<?php
/**
 * Plugin Name:       ABP Transport Booking - Documentation
 * Plugin URI:        https://abp-team.com/
 * Description:       Complete user documentation for the ABP Transport Booking plugin (Free + PRO). Standalone and fully self-contained — render it with the [abptb-documentation] shortcode. No admin menu, no dependency on the main plugin's styles or classes.
 * Version:           1.0.4
 * Author:            ABPTEAM
 * Author URI:        https://abp-team.com/
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       abptb_documentation
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Requires Plugins:  abp-transport-booking
 * WC requires at least: 8.0.0
 * WC tested up to:   latest
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!defined('ABPTB_DOC_VERSION')) {
    define('ABPTB_DOC_VERSION', '1.0.4');
}
if (!defined('ABPTB_DOC_DIR')) {
    define('ABPTB_DOC_DIR', dirname(__FILE__));
}
if (!defined('ABPTB_DOC_URL')) {
    define('ABPTB_DOC_URL', plugins_url('', __FILE__));
}
if (!defined('ABPTB_DOC_INC')) {
    define('ABPTB_DOC_INC', ABPTB_DOC_DIR . '/inc');
}

if (!class_exists('ABTB_Documentation')) {
    class ABTB_Documentation {

        private bool $rendered = false;

        public function __construct() {
            add_action( 'admin_init', function () {
					if ( ! function_exists( 'is_plugin_active' ) ) {
						require_once ABSPATH . 'wp-admin/includes/plugin.php';
					}
				} );
				add_action(
					'before_woocommerce_init', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
					function () {
						if ( class_exists( '\Automattic\WooCommerce\Utilities\FeaturesUtil' ) ) {
							\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
								'custom_order_tables',
								__FILE__,
								true
							);
						}
					}
				);
            add_shortcode('abptb-documentation', array($this, 'do_documentation'));
            add_action('wp', array($this, 'maybe_enqueue_assets'));
        }

        /* -------------------------------------------------------------
         * Bootstrapping
         * ----------------------------------------------------------- */
        public function enqueue_assets(): void {
            wp_enqueue_style(                'abtb-doc',                ABPTB_DOC_URL . '/assets/css/abtb_doc.css',                array(),                ABPTB_DOC_VERSION            );
            wp_enqueue_style(                'abtb-doc-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',                array(),                ABPTB_DOC_VERSION         );
            wp_enqueue_script(                'abtb-doc',                ABPTB_DOC_URL . '/assets/js/abtb_doc.js',                array('jquery'),                ABPTB_DOC_VERSION,                true            );
        }

        public function maybe_enqueue_assets(): void {
            if (is_admin() || $this->rendered) {
                return;
            }
            if ($this->page_uses_shortcode()) {
                $this->enqueue_assets();
            }
        }

        private function page_uses_shortcode(): bool {
            global $post, $wp_query;
            if ($post && is_object($post) && has_shortcode($post->post_content, 'abptb-documentation')) {
                return true;
            }
            if ($wp_query && !empty($wp_query->posts)) {
                foreach ($wp_query->posts as $p) {
                    if (!empty($p->post_content) && has_shortcode($p->post_content, 'abptb-documentation')) {
                        return true;
                    }
                }
            }
            return false;
        }

        /* -------------------------------------------------------------
         * Entry points
         * ----------------------------------------------------------- */

        public function do_documentation(): string {
            $this->rendered = true;
            $this->enqueue_assets();
            ob_start();
            $this->documentation();
            return (string) ob_get_clean();
        }

        /* -------------------------------------------------------------
         * Sections registry (grouped, ordered)
         * ----------------------------------------------------------- */

        private function get_sections(): array {
            return array(
                $this->tab('abptb_getting_start', __('Getting Started', 'abptb_documentation'), 'fas fa-rocket', 'getting_start.php', false, 'start intro welcome version'),
                $this->tab('abptb_installation', __('Installation', 'abptb_documentation'), 'fas fa-download', 'installation.php', false, 'install setup activate free pro zip upload license requirements woocommerce'),
                $this->tab('abptb_feature', __('Features', 'abptb_documentation'), 'fas fa-star', 'features.php', false, 'feature list free pro'),
                $this->tab('abptb_application', __('Applications', 'abptb_documentation'), 'fas fa-thumbtack', 'application.php', false, 'use case bus ferry coach shuttle'),
                $this->tab('abptb_menu_lists', __('Menu Overview', 'abptb_documentation'), 'fas fa-list-ul', 'menu_lists.php', false, 'admin menu navigation'),
                $this->tab('abptb_dashboard', __('Dashboard', 'abptb_documentation'), 'fas fa-gauge-high', 'admin_dashboard.php', false, 'dashboard overview stats kpi quick actions system status'),
                array(
                    'id'       => 'transport',
                    'label'    => __('Transport Lists', 'abptb_documentation'),
                    'icon'     => 'fas fa-bus',
                    'overview' => 'abptb_post',
                    'tabs'     => array(
                        $this->tab('abptb_post', __('Overview', 'abptb_documentation'), 'fas fa-layer-group', 'post_menu.php', false, 'overview list clone restore delete edit trash'),
                        $this->tab('abptb_general', __('General Configuration', 'abptb_documentation'), 'fas fa-rainbow', 'post_general.php', false, 'basic sale template sku icon capacity type organizer brand'),
                        $this->tab('abptb_ticket', __('Ticket', 'abptb_documentation'), '🎫', 'post_ticket.php', false, 'ticket seat plan quantity min max'),
                        $this->tab('abptb_route', __('Route', 'abptb_documentation'), 'fas fa-route', 'post_route.php', false, 'route stop forward return pickup dropoff'),
                        $this->tab('abptb_price', __('Price', 'abptb_documentation'), '💲', 'post_price.php', false, 'price fare forward return amount'),
                        $this->tab('abptb_date', __('Date Configuration', 'abptb_documentation'), '🗓️', 'post_date.php', false, 'date schedule periodic specific weekend off'),
                        $this->tab('abptb_time', __('Time Configuration', 'abptb_documentation'), '⏰', 'post_time.php', false, 'time multiple time schedule'),
                        $this->tab('abptb_additional', __('Additional Services', 'abptb_documentation'), '💰', 'post_additional.php', false, 'additional service extra'),
                        $this->tab('abptb_client_form', __('Client Forms', 'abptb_documentation'), '📋', 'post_client_form.php', false, 'client form field attendee'),
                        $this->tab('abptb_discount', __('Discount Settings', 'abptb_documentation'), '✂️', 'post_discount.php', true, 'discount seasonal early bird pro'),
                        $this->tab('abptb_pp_post', __('Partial Payment', 'abptb_documentation'), '💰', 'post_partial_payment.php', true, 'partial payment deposit advance balance due pro'),
                        $this->tab('abptb_resource', __('Resources', 'abptb_documentation'), '📚', 'post_resource.php', false, 'resource tax faq terms condition'),
                    ),
                ),
                $this->tab('abptb_orders', __('Orders', 'abptb_documentation'), 'fas fa-file-invoice', 'order_list.php', false, 'order list booking status filter'),

                $this->tab('abptb_sp', __('Ticket / Seat Plan', 'abptb_documentation'), 'fas fa-chair', 'ticket_sp.php', false, 'seat plan ticket type decor numbering'),
                $this->tab('abptb_create_order', __('Add Order', 'abptb_documentation'), 'fas fa-cart-plus', 'add_order.php', true, 'add order create pro'),
                $this->tab('abptb_cancel_request', __('Cancel Requests', 'abptb_documentation'), 'fas fa-ban', 'cancel_request.php', true, 'cancel request approve reject pending pro'),
                array(
                    'id'       => 'global',
                    'label'    => __('Global Data', 'abptb_documentation'),
                    'icon'     => 'fas fa-globe',
                    'overview' => 'abptb_global_data',
                    'tabs'     => array(
                        $this->tab('abptb_global_data', __('Global Data Overview', 'abptb_documentation'), 'fas fa-globe', 'global_data.php', false, 'global reusable centralized'),
                        $this->tab('abptb_date_global', __('Dates', 'abptb_documentation'), 'fas fa-calendar-day', 'global_date.php', false, 'global date format buffer advance'),
                        $this->tab('abptb_additional_global', __('Additional services', 'abptb_documentation'), '💰', 'global_additional.php', false, 'global additional service'),
                        $this->tab('abptb_client_form_global', __('Client Form', 'abptb_documentation'), '📋', 'global_client_form.php', false, 'global client form'),
                        $this->tab('abptb_global_discount', __('Global Discount', 'abptb_documentation'), '✂️', 'global_discount.php', true, 'global discount seasonal early bird pro'),
                        $this->tab('abptb_pp_global', __('Partial Payment', 'abptb_documentation'), '💰', 'global_partial_payment.php', true, 'partial payment deposit advance balance due pro'),
                        $this->tab('abptb_location_global', __('Stops / Locations', 'abptb_documentation'), 'fas fa-route', 'global_location.php', false, 'global stop location loc_id'),
                        $this->tab('abptb_category_global', __('Transport Type / Category', 'abptb_documentation'), 'fas fa-boxes-stacked', 'global_category.php', false, 'global category transport type cat_id'),
                        $this->tab('abptb_organizer_global', __('Organizer', 'abptb_documentation'), '🏢', 'global_organizer.php', false, 'global organizer company operator org_id'),
                        $this->tab('abptb_brand_global', __('Brands', 'abptb_documentation'), '🏷️', 'global_brand.php', false, 'global brand brand_id'),
                        $this->tab('abptb_feature_global', __('Features Library', 'abptb_documentation'), '🔗', 'global_feature.php', false, 'global feature library'),
                        $this->tab('abptb_resource_global', __('Global Resources', 'abptb_documentation'), '📚', 'global_resource.php', false, 'global resource faq terms condition'),
                    ),
                ),
                array(
                    'id'       => 'configuration',
                    'label'    => __('Configuration', 'abptb_documentation'),
                    'icon'     => 'fas fa-gear',
                    'overview' => 'abptb_configuration',
                    'tabs'     => array(
                        $this->tab('abptb_configuration', __('Configuration Overview', 'abptb_documentation'), 'fas fa-gear', 'configuration.php', false, 'global configuration woocommerce'),
                        $this->tab('abptb_pdf', __('PDF', 'abptb_documentation'), 'fas fa-ticket-alt', 'configuration_pdf.php', true, 'pdf config pro background logo'),
                        $this->tab('abptb_booking_pdf', __('Order Lists PDF', 'abptb_documentation'), 'far fa-file-alt', 'configuration_order_list.php', true, 'order list pdf pro'),
                        $this->tab('abptb_csv', __('Order Lists CSV', 'abptb_documentation'), 'fas fa-file-csv', 'configuration_csv.php', true, 'csv export order list pro'),
                        $this->tab('abptb_email', __('E-Mail', 'abptb_documentation'), 'far fa-envelope', 'configuration_email.php', true, 'email notification pdf shortcode pro'),
                        $this->tab('abptb_on_off', __('On / Off Features', 'abptb_documentation'), 'fa-solid fa-toggle-on', 'configuration_on_off.php', false, 'feature on off toggle'),
                        $this->tab('abptb_slider', __('Slider', 'abptb_documentation'), 'fas fa-photo-video', 'configuration_slider.php', false, 'slider'),
                        $this->tab('abptb_contact', __('Contact Information', 'abptb_documentation'), 'fas fa-id-card-alt', 'configuration_contact.php', false, 'contact company address phone email'),
                        $this->tab('abptb_css_value', __('CSS Property', 'abptb_documentation'), 'fas fa-drafting-compass', 'configuration_css.php', false, 'css color font size'),
                    ),
                ),
                $this->tab('abptb_my_account', __('My Account', 'abptb_documentation'), 'fas fa-user', 'my_account.php', false, 'my account customer bookings download pdf cancel request pro'),
                $this->tab('abptb_license', __('License', 'abptb_documentation'), 'fas fa-key', 'license.php', true, 'license key activate deactivate trial pro updates'),
                $this->tab('abptb_shortcode', __('Shortcodes', 'abptb_documentation'), 'fas fa-code', 'shortcode.php', false, 'shortcode abptb-booking abptb-post gallery ticket parameters'),
                $this->tab('abptb_template', __('Templating', 'abptb_documentation'), 'fas fa-puzzle-piece', 'templating.php', false, 'template override theme'),
                $this->tab('abptb_translate', __('Translation', 'abptb_documentation'), 'fas fa-language', 'translate.php', false, 'translation loco translate language'),
            );
        }

        private function tab(string $id, string $label, string $icon, string $file, bool $pro, string $keywords): array {
            return array(
                'id'       => $id,
                'label'    => $label,
                'icon'     => $icon,
                'file'     => $file,
                'pro'      => $pro,
                'keywords' => $keywords,
            );
        }

        /* -------------------------------------------------------------
         * Rendering
         * ----------------------------------------------------------- */

        public function documentation(): void {
            $sections    = $this->get_sections();
            $first_sec   = $sections[0];
            $first_id    = isset($first_sec['tabs']) ? $first_sec['tabs'][0]['id'] : $first_sec['id'];
            $base_active = class_exists('ABPTB') || class_exists('ABPTB_Static');
            ?>
            <div class="abtb_doc" id="abtb-documentation">
                <div class="abtb_doc_container">
                    <?php if (!$base_active) : ?>
                        <div class="abtb_doc_alert" style="margin:18px 18px 0;padding:12px 16px;border-radius:8px;background:#fff7ed;border:1px solid #fdba74;color:#9a3412;">
                            ⚠️ <?php esc_html_e('The ABP Transport Booking plugin is not active. This documentation is designed to be used with it — it still renders standalone with all screenshots and guides included.', 'abptb_documentation'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="abtb_doc_header">
                        <div class="abtb_doc_brand">
                            <h1 class="abtb_doc_title">
                                📘 <?php esc_html_e('ABP Transport Booking — Documentation', 'abptb_documentation'); ?>
                                <span class="abtb_doc_chip">v<?php echo esc_html(ABPTB_DOC_VERSION); ?></span>
                            </h1>
                            <p class="abtb_doc_subtitle">
                                <?php esc_html_e('Free + PRO user guide — setup, configuration, booking workflow, orders, global data, shortcodes and templates.', 'abptb_documentation'); ?>
                            </p>
                        </div>
                        <div class="abtb_doc_search">
                            <span class="abtb_doc_search_icon" aria-hidden="true">🔍</span>
                            <input type="search" class="abtb_doc_search_input"
                                   placeholder="<?php esc_attr_e('Search documentation…', 'abptb_documentation'); ?>"
                                   aria-label="<?php esc_attr_e('Search documentation', 'abptb_documentation'); ?>" />
                            <button type="button" class="abtb_doc_search_clear" aria-label="<?php esc_attr_e('Clear search', 'abptb_documentation'); ?>">✕</button>
                        </div>
                    </div>

                    <div class="abtb_doc_legend">
                        <span class="abtb_doc_legend_item"><span class="abtb_doc_badge abtb_doc_badge_free">FREE</span> <?php esc_html_e('Included in the free plugin', 'abptb_documentation'); ?></span>
                        <span class="abtb_doc_legend_item"><span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span> <?php esc_html_e('Requires the PRO version', 'abptb_documentation'); ?></span>
                        <span class="abtb_doc_legend_item"><?php esc_html_e('Tip: press “/” to focus search.', 'abptb_documentation'); ?></span>
                    </div>

                    <div class="abtb_doc_body">
                        <aside class="abtb_doc_sidebar">
                            <ul class="abtb_doc_nav" role="tablist" aria-label="<?php esc_attr_e('Documentation sections', 'abptb_documentation'); ?>">
                                <?php
                                foreach ($sections as $section) {
                                    if (isset($section['tabs'])) {
                                        $this->render_nav_group($section, $first_id);
                                    } else {
                                        $this->render_nav_item($section, $first_id);
                                    }
                                }
                                ?>
                            </ul>
                        </aside>

                        <section class="abtb_doc_main">
                            <div class="abtb_doc_tabs tab_left">
                                <div class="abtb_doc_panels">
                                    <?php
                                    $is_first_tab = true;
                                    foreach ($sections as $section) {
                                        $tabs = isset($section['tabs']) ? $section['tabs'] : array($section);
                                        foreach ($tabs as $tab) {
                                            $fragment = $this->render_fragment($tab['file']);
                                            if ($is_first_tab) {
                                                $fragment = $this->mark_first_panel_active($fragment);
                                                $is_first_tab = false;
                                            }
                                            echo $fragment; // phpcs:ignore WordPress.Security.EscapeOutput
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="abtb_doc_no_results">
                                <div style="font-size:34px;margin-bottom:8px;">🕵️</div>
                                <strong><?php esc_html_e('No documentation found', 'abptb_documentation'); ?></strong><br />
                                <?php esc_html_e('Try a different search term.', 'abptb_documentation'); ?>
                            </div>
                            <div class="abtb_doc_pager" data-doc-prev="<?php esc_attr_e('Previous', 'abptb_documentation'); ?>" data-doc-next="<?php esc_attr_e('Next', 'abptb_documentation'); ?>">
                                <a href="#abtb-documentation" class="abtb_doc_pager_card is-prev">
                                    <span class="abtb_doc_pager_dir"></span>
                                    <span class="abtb_doc_pager_title"></span>
                                </a>
                                <a href="#abtb-documentation" class="abtb_doc_pager_card is-next">
                                    <span class="abtb_doc_pager_dir"></span>
                                    <span class="abtb_doc_pager_title"></span>
                                </a>
                            </div>
                        </section>
                    </div>

                    <div class="abtb_doc_footer">
                        <span class="abtb_doc_footer_note">
                            📘 ABP Transport Booking — Documentation v<?php echo esc_html(ABPTB_DOC_VERSION); ?> ·
                            <span class="abtb_doc_top" role="button" tabindex="0">↑ <?php esc_html_e('Back to top', 'abptb_documentation'); ?></span>
                        </span>
                        <span>
                            <?php esc_html_e('Free & PRO user guide by', 'abptb_documentation'); ?>
                            <a href="https://abp-team.com" target="_blank" rel="noopener">ABPTEAM</a>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }

        private function render_nav_group(array $group, string $first_id): void {
            $overview = $group['overview'] ?? null;
            $headless = !empty($group['headless']);
            $pro_items = false;
            foreach ($group['tabs'] as $t) {
                if (!empty($t['pro'])) {
                    $pro_items = true;
                    break;
                }
            }

            echo '<li class="abtb_doc_group">';

            if (!$headless) {
                $menu_id = 'abtb_doc_grp_' . esc_attr($group['id']);
                ?>
                <div class="abtb_doc_group_head"
                     data-collapse-target="#<?php echo esc_attr($menu_id); ?>"
                     <?php if ($overview) : ?>data-tabs-target="#<?php echo esc_attr($overview); ?>"<?php endif; ?>
                     aria-expanded="true">
                    <span class="abtb_doc_group_icon" aria-hidden="true"><?php $this->render_icon($group['icon']); ?></span>
                    <span class="abtb_doc_group_label"><?php echo esc_html($group['label']); ?></span>
                    <?php if ($pro_items) : ?>
                        <span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span>
                    <?php endif; ?>
                    <span class="abtb_doc_group_toggle" aria-hidden="true"></span>
                </div>
                <ul class="abtb_doc_group_menu" id="<?php echo esc_attr($menu_id); ?>" data-collapse="#<?php echo esc_attr($menu_id); ?>" role="group">
                <?php
            }

            foreach ($group['tabs'] as $tab) {
                $this->render_nav_item($tab, $first_id);
            }

            if (!$headless) {
                echo '</ul>';
            }
            echo '</li>';
        }

        private function render_nav_item(array $tab, string $first_id): void {
            $active = ($tab['id'] === $first_id) ? ' abtb_doc_active' : '';
            ?>
            <li class="abtb_doc_nav_item<?php echo esc_attr($active); ?>"
                data-tabs-target="#<?php echo esc_attr($tab['id']); ?>"
                data-doc-search="<?php echo esc_attr(strtolower($tab['label']) . ' ' . $tab['keywords']); ?>"
                role="tab">
                <span class="abtb_doc_nav_icon" aria-hidden="true"><?php $this->render_icon($tab['icon']); ?></span>
                <span class="abtb_doc_nav_label"><?php echo esc_html($tab['label']); ?></span>
                <?php if ($tab['pro']) : ?>
                    <span class="abtb_doc_nav_badge"><span class="abtb_doc_badge abtb_doc_badge_pro">PRO</span></span>
                <?php endif; ?>
            </li>
            <?php
        }

        /* -------------------------------------------------------------
         * Fragment rendering
         * ----------------------------------------------------------- */

        private function mark_first_panel_active(string $html): string {
            return (string) preg_replace('/<div class="abtb_doc_panel"(\s)/', '<div class="abtb_doc_panel abtb_doc_active"$1', $html, 1);
        }

        private function render_icon(string $icon): void {
            if (substr($icon, 0, 2) === 'fa') {
                echo '<i class="' . esc_attr($icon) . '"></i>';
            } else {
                echo '<span class="abtb_doc_icon_emoji">' . esc_html($icon) . '</span>';
            }
        }

        private function render_fragment(string $file): string {
            $path = ABPTB_DOC_INC . '/' . $file;
            if (!is_readable($path)) {
                return '<div class="abtb_doc_panel"><p>' . esc_html__('Documentation section not found.', 'abptb_documentation') . '</p></div>';
            }
            ob_start();
            try {
                require $path;
                $html = (string) ob_get_clean();
            } catch (\Throwable $e) {
                ob_end_clean();
                return '<div class="abtb_doc_panel"><p>' . esc_html__('Documentation section could not be rendered.', 'abptb_documentation') . '</p></div>';
            }
            return $this->hydrate_images($html);
        }

        /**
         * The fragments lazy-load their screenshots through data-abtb-doc-img with src="#".
         * Replace src="#" with the real image URL so screenshots always load even if the
         * parent plugin scripts are not available.
         */
        private function hydrate_images(string $html): string {
            if (false === strpos($html, 'src="#"')) {
                return $html;
            }
            return (string) preg_replace_callback(
                '#<([a-z][a-z0-9]*)\b([^>]*)data-abtb-doc-img="([^"]+)"([^>]*)>(.*?)</\1>#is',
                function ($m) {
                    $url  = esc_url($m[3]);
                    $inner = preg_replace('/src="#"([^>]*>)/', 'src="' . $url . '"$1', $m[5], 1);
                    return '<' . $m[1] . $m[2] . 'data-abtb-doc-img="' . $url . '"' . $m[4] . '>' . $inner . '</' . $m[1] . '>';
                },
                $html
            );
        }
    }
    new ABTB_Documentation();
}