<?php
/* Prohibit direct script loading */
defined('ABSPATH') || die('No direct script access allowed!');
global $wpdb;
?>
<div id="additional_features" class="tab-content">
    <div class="content-box content-wpmf-general">
        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_mediafolder" value="0">
                <label data-wpmftippy="<?php esc_html_e('Load WP Media Folder files on frontend. Activate it if
             you want to use a frontend page builder along with the media manager', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('WP Media Folder on frontend', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="wpmf_option_mediafolder"
                               value="1"
                            <?php
                            if (isset($option_mediafolder) && (int) $option_mediafolder === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="show_folder_id" value="0">
                <label data-wpmftippy="<?php esc_html_e('Display and copy the folder ID by making a right click on the folder', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Display folder ID', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_show_folder_id" name="show_folder_id" class="show_folder_id"
                               value="1"
                            <?php
                            if (isset($show_folder_id) && (int) $show_folder_id === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="hide_tree" value="0">
                <label data-wpmftippy="<?php esc_html_e('Load a left folder tree on the left part of the media manager for a faster folder navigation', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Enable folder tree', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="hide_tree"
                               value="1"
                            <?php
                            if (isset($hide_tree) && (int) $hide_tree === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="enable_folders" value="0">
                <label data-wpmftippy="<?php esc_html_e('Enable or not the display of folders in the main view on top of the media', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Enable folders on top of media', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="enable_folders"
                               value="1"
                            <?php
                            if (isset($enable_folders) && (int) $enable_folders === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_countfiles" value="0">
                <label data-wpmftippy="<?php esc_html_e('Display the number of media
             available in each folder, in the folder tree. This option is applied for administrator role only.', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Media count', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_countfiles" name="wpmf_option_countfiles"
                               value="1"
                            <?php
                            if (isset($option_countfiles) && (int) $option_countfiles === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="root_media_count" value="0">
                <label data-wpmftippy="<?php esc_html_e('Display the number of media
             available in root folder, in the folder tree. This option is applied for administrator role only.', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Root media count', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="root_media_count"
                               value="1"
                            <?php
                            if (isset($root_media_count) && (int) $root_media_count === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_override" value="0">
                <label data-wpmftippy="<?php esc_html_e('Possibility to replace an existing file by another one.', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Override file', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_override"
                               name="wpmf_option_override" value="1"
                            <?php
                            if (isset($option_override) && (int) $option_override === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_duplicate" value="0">
                <label data-wpmftippy="<?php esc_html_e('Add a button to duplicate a media from the media manager', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Duplicate file', 'wpmf') ?>
                </label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_duplicate"
                               name="wpmf_option_duplicate" value="1"
                            <?php
                            if (isset($option_duplicate) && (int) $option_duplicate === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_hoverimg" value="0">
                <label data-wpmftippy="<?php esc_html_e('On mouse hover on an image, a large preview is displayed', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Hover image', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_hoverimg" name="wpmf_option_hoverimg" value="1"
                            <?php
                            if (isset($option_hoverimg) && (int) $option_hoverimg === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_useorder" value="0">
                <label data-wpmftippy="<?php esc_html_e('Additional filters will be added in the media views.', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Enable the filter and order feature', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="wpmf_useorder" value="1"
                            <?php
                            if (isset($useorder) && (int) $useorder === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="load_gif" value="0">
                <label data-wpmftippy="<?php esc_html_e('Automatically play the GIF animation on page load. By default it’s a static image in WordPress', 'wpmf') ?>"
                       class="ju-setting-label text"><?php esc_html_e('Load GIF file on page load', 'wpmf') ?>
                </label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="load_gif" value="1"
                            <?php
                            if (isset($load_gif) && (int) $load_gif === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="wpmf_option_media_remove" value="0">
                <label data-wpmftippy="<?php esc_html_e('When you remove a folder all media inside will also be
             removed if this option is activated. Use with caution.', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Remove a folder with its media', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_media_remove"
                               name="wpmf_option_media_remove" value="1"
                            <?php
                            if (isset($option_media_remove) && (int) $option_media_remove === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="search_file_include_childrent" value="0">
                <label data-wpmftippy="<?php esc_html_e('If enabled, when you search file in a folder, it will search in its subfolders too', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Search file in a folder and its subfolder', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox"
                               name="search_file_include_childrent" value="1"
                            <?php
                            if (isset($search_file_include_childrent) && (int) $search_file_include_childrent === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="delete_all_datas" value="0">
                <label data-wpmftippy="<?php esc_html_e('Delete all data on uninstall (including addons)', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Delete all data on uninstall (including addons)', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" id="cb_option_delete_all_datas" name="delete_all_datas" class="delete_all_datas"
                               value="1"
                            <?php
                            if (isset($delete_all_datas) && (int) $delete_all_datas === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
                <?php if (isset($delete_all_datas) && (int) $delete_all_datas === 1) : ?>
                <p class="description delete_all_label show"><?php esc_html_e('Beware: If some cloud system are connected and some private links are added in your content, you will have media broken links', 'wpmf') ?></p>
                <?php else : ?>
                <p class="description delete_all_label hide"><?php esc_html_e('Beware: If some cloud system are connected and some private links are added in your content, you will have media broken links', 'wpmf') ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="ju-settings-option">
            <div class="wpmf_row_full">
                <input type="hidden" name="hide_remote_video" value="0">
                <label data-wpmftippy="<?php esc_html_e('Remote video feature: include and manage remote video from Youtube Vimeo or Dailymotion', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Enable remote video feature', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="hide_remote_video"
                               value="1"
                            <?php
                            if (isset($hide_remote_video) && (int) $hide_remote_video === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="ju-settings-option wpmf_right m-r-0">
            <div class="wpmf_row_full">
                <input type="hidden" name="enable_download_media" value="0">
                <label data-wpmftippy="<?php esc_html_e('Right click on an image or file in the media manager to download it. Image original sized will be downloaded', 'wpmf'); ?>"
                       class="ju-setting-label text"><?php esc_html_e('Enable download media', 'wpmf') ?></label>
                <div class="ju-switch-button">
                    <label class="switch">
                        <input type="checkbox" name="enable_download_media"
                               value="1"
                            <?php
                            if (isset($enable_download_media) && (int) $enable_download_media === 1) {
                                echo 'checked';
                            }
                            ?>
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------  filter and order ----------------------------------->
<div id="media_filtering" class="tab-content">
    <div class="content-box wpmf-config-gallery">
        <div id="wpmf_filter_dimension" class="media_filter_block wpmf_left">
            <ul class="wpmf_filter_dimension wpmf-no-margin">
                <li class="div_list_child accordion-section control-section control-section-default open">
                    <h3 class="accordion-section-title wpmf-section-title dimension_title"
                        data-title="filldimension"
                        tabindex="0"><?php esc_html_e('List default filter size', 'wpmf') ?>
                        <i class="zmdi zmdi-chevron-up"></i>
                        <i class="zmdi zmdi-chevron-down"></i>
                    </h3>
                    <ul class="content_list_filldimension">
                        <?php
                        if (count($a_dimensions) > 0) :
                            foreach ($a_dimensions as $a_dimension) :
                                ?>
                                <li class="wpmf_width_100 ju-settings-option customize-control customize-control-select item_dimension"
                                    style="display: list-item;" data-value="<?php echo esc_html($a_dimension); ?>">
                                    <div class="wpmf_row_full">
                                        <div class="pure-checkbox ju-setting-label">
                                            <input title id="<?php echo esc_attr($a_dimension) ?>" type="checkbox"
                                                   name="dimension[]"
                                                   value="<?php echo esc_attr($a_dimension) ?>"
                                                <?php
                                                if (in_array($a_dimension, $array_s_de)) {
                                                    echo 'checked';
                                                }
                                                ?>
                                            >
                                            <label class="lb" for="<?php echo esc_html($a_dimension) ?>"><?php echo esc_html($a_dimension) ?></label>
                                            <label class="ju-switch-button">
                                                <i class="material-icons wpmf-md-edit"
                                                   data-label="dimension"
                                                   data-value="<?php echo esc_html($a_dimension); ?>"
                                                   title="<?php esc_html_e('Edit dimension', 'wpmf'); ?>">
                                                    border_color
                                                </i>

                                                <i class="material-icons wpmf-delete" data-label="dimension"
                                                   data-value="<?php echo esc_html($a_dimension); ?>"
                                                   title="<?php esc_html_e('Remove dimension', 'wpmf'); ?>">delete_outline</i>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                        endif;
                        ?>

                        <li class="wpmf_width_100 p-d-20 ju-settings-option customize-control customize-control-select dimension"
                            style="display: list-item;">
                            <div class="wpmf_width_40 wpmf_left">
                                <span class="label_text_bold"><?php esc_html_e('Width', 'wpmf'); ?></span>
                                <label>
                                    <input name="wpmf_width_dimension" min="0"
                                           class="small-text wpmf_width_dimension"
                                           type="number">
                                </label>
                            </div>

                            <div class="wpmf_width_50 wpmf_right wpmf_text_right">
                                <span class="label_text_bold"><?php esc_html_e('Height', 'wpmf'); ?></span>
                                <label>
                                    <input name="wpmf_height_dimension" min="0"
                                           class="small-text wpmf_height_dimension"
                                           type="number">
                                </label>
                                <span class="label_text_bold m-l-20"><?php esc_html_e('px', 'wpmf'); ?></span>
                            </div>

                            <div class="wpmf_width_100">
                                    <span id="add_dimension"
                                          class="wpmf_width_100 m-t-30 ju-button no-background orange-button waves-effect waves-light add_dimension">
                                        <?php esc_html_e('Add new size', 'wpmf'); ?></span>
                                <span data-label="dimension" id="edit_dimension"
                                      class="m-t-10 wpmf_left ju-button orange-button waves-effect waves-light wpmfedit edit_dimension"
                                      style="display: none;">
                                        <?php esc_html_e('Save', 'wpmf'); ?>
                                    </span>
                                <span id="can_dimension"
                                      class="m-t-10 wpmf_right ju-button no-background orange-button waves-effect waves-light wpmf_can"
                                      data-label="dimension"
                                      style="display: none;"><?php esc_html_e('Cancel', 'wpmf'); ?></span>
                            </div>
                        </li>
                    </ul>
                    <p class="description">
                        <?php esc_html_e('Image dimension filtering available in filter.
                         Display image with a dimension and above.', 'wpmf'); ?>
                    </p>
                </li>
            </ul>
        </div>

        <div id="wpmf_filter_weights" class="media_filter_block wpmf_right">
            <ul class="wpmf_filter_weight wpmf-no-margin">
                <li class="div_list_child accordion-section control-section control-section-default open">
                    <h3 class="accordion-section-title wpmf-section-title sizes_title"
                        data-title="fillweight"
                        tabindex="0"><?php esc_html_e('List default filter weight', 'wpmf') ?>
                        <i class="zmdi zmdi-chevron-up"></i>
                        <i class="zmdi zmdi-chevron-down"></i>
                    </h3>
                    <ul class="content_list_fillweight">
                        <?php
                        if (count($a_weights) > 0) :
                            foreach ($a_weights as $a_weight) :
                                $labels = explode('-', $a_weight[0]);
                                if ($a_weight[1] === 'kB') {
                                    $label = ($labels[0] / 1024) . ' kB-' . ($labels[1] / 1024) . ' kB';
                                } else {
                                    $label = $labels[0] / (1024 * 1024);
                                    $label .= ' MB-';
                                    $label .= $labels[1] / (1024 * 1024);
                                    $label .= ' MB';
                                }
                                ?>

                                <li class="wpmf_width_100 ju-settings-option customize-control customize-control-select item_weight"
                                    style="display: list-item;" data-value="<?php echo esc_html($a_weight[0]); ?>"
                                    data-unit="<?php echo esc_html($a_weight[1]); ?>">
                                    <div class="wpmf_row_full">
                                        <div class="pure-checkbox ju-setting-label">
                                            <input title
                                                   id="<?php echo esc_html($a_weight[0] . ',' . $a_weight[1]) ?>"
                                                   type="checkbox" name="weight[]"
                                                   value="<?php echo esc_attr($a_weight[0] . ',' . $a_weight[1]) ?>"
                                                   data-unit="<?php echo esc_html($a_weight[1]); ?>"
                                                <?php
                                                if (in_array($a_weight, $array_s_we)) {
                                                    echo 'checked';
                                                }
                                                ?>
                                            >
                                            <label class="lb" for="<?php echo esc_html($a_weight[0] . ',' . $a_weight[1]) ?>">
                                                <?php echo esc_html($label) ?>
                                            </label>
                                            <label class="ju-switch-button">
                                                <i class="material-icons wpmf-md-edit" data-label="weight"
                                                   data-value="<?php echo esc_html($a_weight[0]); ?>"
                                                   data-unit="<?php echo esc_html($a_weight[1]); ?>"
                                                   title="<?php esc_html_e('Edit weight', 'wpmf'); ?>">border_color</i>
                                                <i class="material-icons wpmf-delete" data-label="weight"
                                                   data-value="<?php echo esc_html($a_weight[0]); ?>"
                                                   data-unit="<?php echo esc_html($a_weight[1]); ?>"
                                                   title="<?php esc_html_e('Remove weight', 'wpmf'); ?>">delete_outline</i>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                        endif;
                        ?>

                        <li class="wpmf_width_100 p-d-20 ju-settings-option customize-control customize-control-select weight"
                            style="display: list-item;">
                            <div class="wpmf_width_40 wpmf_left">
                                <span class="label_text_bold"><?php esc_html_e('Min', 'wpmf'); ?></span>
                                <label>
                                    <input name="wpmf_min_weight" min="0" class="small-text wpmf_min_weight"
                                           type="number">
                                </label>
                            </div>
                            <div class="wpmf_width_60 wpmf_right wpmf_text_right">
                                <span class="label_text_bold"><?php esc_html_e('Max', 'wpmf'); ?></span>
                                <label>
                                    <input name="wpmf_max_weight" min="0" class="small-text wpmf_max_weight"
                                           type="number">
                                </label>
                                <span class="label_text_bold m-l-20">
                                    <label>
                                        <select class="wpmfunit" data-label="weight">
                                            <option value="kB"><?php esc_html_e('kB', 'wpmf'); ?></option>
                                            <option value="MB"><?php esc_html_e('MB', 'wpmf'); ?></option>
                                        </select>
                                    </label>
                                </span>
                            </div>


                            <div class="wpmf_width_100">
                                    <span id="add_weight"
                                          class="wpmf_width_100 m-t-30 ju-button no-background orange-button waves-effect waves-light add_weight"><?php esc_html_e('Add weight', 'wpmf'); ?></span>
                                <span data-label="weight" id="edit_weight"
                                      class="m-t-10 wpmf_left ju-button orange-button waves-effect waves-light wpmfedit edit_weight"
                                      style="display: none;">
                                        <?php esc_html_e('Save', 'wpmf'); ?>
                                    </span>
                                <span id="can_dimension"
                                      class="m-t-10 wpmf_right ju-button no-background orange-button waves-effect waves-light wpmf_can"
                                      data-label="weight"
                                      style="display: none">
                                        <?php esc_html_e('Cancel', 'wpmf'); ?></span>
                            </div>

                        </li>


                    </ul>
                    <p class="description">
                        <?php esc_html_e('Select weight range which you would
                         like to display in media library filter', 'wpmf'); ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
