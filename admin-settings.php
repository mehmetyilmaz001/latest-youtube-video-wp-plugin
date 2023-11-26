<?php
add_action('admin_menu', 'lyvf_admin_menu');
add_action('admin_init', 'lyvf_register_settings');

function lyvf_admin_menu() {
    add_menu_page('Latest YouTube Video Fetcher Settings', 'YouTube Video Fetcher', 'manage_options', 'lyvf-settings', 'lyvf_settings_page');
}

function lyvf_settings_page() {
    ?>
    <div class="wrap">
        <h2>Latest YouTube Video Fetcher Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields('lyvf_settings'); ?>
            <?php do_settings_sections('lyvf_settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">YouTube API Key:</th>
                    <td><input type="text" name="lyvf_api_key" value="<?php echo esc_attr(get_option('lyvf_api_key')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">YouTube Channel ID:</th>
                    <td><input type="text" name="lyvf_channel_id" value="<?php echo esc_attr(get_option('lyvf_channel_id')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function lyvf_register_settings() {
    register_setting('lyvf_settings', 'lyvf_api_key');
    register_setting('lyvf_settings', 'lyvf_channel_id');
}