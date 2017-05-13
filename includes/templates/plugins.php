<div class="wrap">
    <h2><?php esc_html_e('Plugins', 'wp-statistics'); ?></h2>
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
            <div id="post-body-content">
                <div id="wps-plugins-list" class="postbox">
                    <h2 class="hndle ui-sortable-handle"><span>Plugins list</span></h2>
                    <div class="inside">
						<?php foreach ($plugins->items as $plugin) : ?>
                            <div class="wps-plugins">
                                <img src="<?php bloginfo('url'); ?>/wp-content/plugins/wp-statistics/assets/images/logo-250.png"/>
                                <div class="wps-plugin-description">
                                    <h3><?php echo $plugin->name; ?></h3>
                                    <p><?php echo $plugin->description; ?></p>
                                </div>

                                <div class="wps-plugin-buttons">
									<?php if (is_plugin_active($plugin->slug . '/' . $plugin->slug . '.php')) { ?>
                                        <a href="admin.php?page=wps_plugins_page&action=deactivate&plugin=<?php echo $plugin->slug; ?>" class="button-primary"><?php _e('Deactivate plugin', 'wp-statistics'); ?></a>
									<?php } else { ?>
										<?php if (file_exists(WP_PLUGIN_DIR . '/' . $plugin->slug . '/' . $plugin->slug . '.php')) { ?>
                                            <a href="admin.php?page=wps_plugins_page&action=activate&plugin=<?php echo $plugin->slug; ?>" class="button-primary"><?php _e('Activate plugin', 'wp-statistics'); ?></a>
										<?php } else { ?>
                                            <a href="<?php echo $plugin->link; ?>" class="button-primary"><?php _e('Buy plugin', 'wp-statistics'); ?></a>
										<?php } ?>
									<?php } ?>
                                </div>
                            </div>
						<?php endforeach; ?>

						<?php if ($error) : ?>
                            <p><?php echo sprintf(__('Error to getting plugins list. (%s)', 'wp_statistics'), $error); ?></p>
						<?php endif; ?>
                    </div>
                </div>
            </div>

            <div id="postbox-container-1" class="postbox-container">
                <div id="wps-plugins-info" class="postbox ">
                    <button type="button" class="handlediv button-link" aria-expanded="true">
                        <span class="screen-reader-text">Toggle panel</span><span class="toggle-indicator" aria-hidden="true"></span>
                    </button>
                    <h2 class="hndle ui-sortable-handle"><span>About plugins</span></h2>
                    <div class="inside">
                        <p>Creates a button on wysiwyg toolbars to add a configurable amount of Lorem Ipsum text to a
                            post, page or any other custom post type.</p>
                    </div>
                </div>

                <div id="wps-plugins-support" class="postbox ">
                    <button type="button" class="handlediv button-link" aria-expanded="true">
                        <span class="screen-reader-text">Toggle panel</span><span class="toggle-indicator" aria-hidden="true"></span>
                    </button>
                    <h2 class="hndle ui-sortable-handle"><span>Support</span></h2>
                    <div class="inside">
                        <p>Creates a button on wysiwyg toolbars to add a configurable amount of Lorem Ipsum text to a
                            post, page or any other custom post type.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>