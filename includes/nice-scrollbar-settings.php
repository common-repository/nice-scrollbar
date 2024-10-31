<?php

// Create menu Link
function nsb_options_menu(){
	add_options_page(
		'Nice Scrollbar Options',
		'Nice Scrollbar',
		'manage_options',
		'nsb-options',
		'nsb_options_content'
	);
}
// Create Options Page Content
function nsb_options_content(){

	// Init Options Global
	global $nsb_options;

	ob_start(); ?>
		<div class="wrap">
			<h2><?php _e('Nice Scrollbar Settings', 'nsb_domain'); ?></h2>
			<p><?php _e('Settings for the Nice Scrollbar plugin', 'nsb_domain'); ?></p>
			<form method="post" action="options.php">
				<?php settings_fields('nsb_settings_group'); ?>
				<table class="form-table">
					<tbody>
						<tr>
							<th scope="row"><label for="nsb_settings[enable]"><?php _e('Enable','nsb_domain'); ?></label></th>
							<td><input name="nsb_settings[enable]" type="checkbox" id="nsb_settings[enable]" value="1" <?php checked('1', $nsb_options['enable']); ?></td>
						</tr>
						<tr>
							<th scope="row"><label for="nsb_settings[bar_color]"><?php _e('Scrollbar Color','nsb_domain'); ?></label></th>
							<td><input name="nsb_settings[bar_color]" type="text" id="nsb_settings[bar_color]" value="<?php echo $nsb_options['bar_color']; ?>" class="color-picker">
								<p class="description"><?php _e('Enter a color or HEX value with a #', 'nsb_domain'); ?></p></td>
						</tr>
						<tr>
							<th scope="row"><label for="nsb_settings[bar_width]"><?php _e('Scrollbar Width','nsb_domain'); ?></label></th>
							<td><input name="nsb_settings[bar_width]" type="hidden" id="nsb_settings_bar_width" value="<?php echo $nsb_options['bar_width']; ?>" class="cursor-width">

							<div id="slider">
  <div id="custom-handle" class="ui-slider-handle"></div>
</div>
								<p class="description"><?php _e('Select Scrollbar width', 'nsb_domain'); ?></p></td>
						</tr>

					</tbody>
				</table>
				<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'nsb_domain'); ?>"</p>
			</form>
		</div>
	<?php
	echo ob_get_clean();
}

add_action('admin_menu', 'nsb_options_menu');

// Register Settings
function nsb_register_settings(){
	register_setting('nsb_settings_group', 'nsb_settings');
}

add_action('admin_init', 'nsb_register_settings');