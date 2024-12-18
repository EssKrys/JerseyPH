<?php
$google_fonts = nasa_get_google_fonts();
$custom_fonts = nasa_get_custom_fonts();
$font_weight = array(
    '' => esc_html__("Default", 'nasa-core'),
    '900' => esc_html__("Bold - 900", 'nasa-core'),
    '800' => esc_html__("Bold - 800", 'nasa-core'),
    '700' => esc_html__("Bold - 700", 'nasa-core'),
    '600' => esc_html__("Bold - 600", 'nasa-core'),
    '500' => esc_html__("Bold - 500", 'nasa-core')
);

if (is_object($term) && $term) {
    $type_font = get_term_meta($term->term_id, $this->_type_font, true);
    if (!isset($type_font)) {
        $type_font = add_term_meta($term->term_id, $this->_type_font, '', true);
    }
    ?>
    <tr class="form-field nasa-term-root hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_type_font; ?>">
                <?php _e('Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                echo '<p><select id="' . $this->_type_font . '" name="' . $this->_type_font . '">';
                echo '<option value="">' . esc_html__("Default", 'nasa-core') . '</option>';
                echo '<option value="custom"' . ($type_font == 'custom' ? ' selected' : '') . '>' . esc_html__('Custom Font', 'nasa-core') . '</option>';
                echo '<option value="google"' . ($type_font == 'google' ? ' selected' : '') . '>' . esc_html__('Google Font', 'nasa-core') . '</option>';
                echo '</select></p>';
                ?>
            </div>
       </td>
    </tr>

    <!-- Headings Font -->
    <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_headings_font; ?>">
                <?php _e('Headings Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                if ($google_fonts) {
                    $selected = get_term_meta($term->term_id, $this->_headings_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_headings_font, '', true);
                    }

                    echo '<p><select id="' . $this->_headings_font . '" name="' . $this->_headings_font . '">';
                    foreach ($google_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                }
                ?>
            </div>
       </td>
    </tr>

    <!-- Texts Font -->
    <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_texts_font; ?>">
                <?php _e('Texts Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                if ($google_fonts) {
                    $selected = get_term_meta($term->term_id, $this->_texts_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_texts_font, '', true);
                    }

                    echo '<p><select id="' . $this->_texts_font . '" name="' . $this->_texts_font . '">';
                    foreach ($google_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                }
                ?>
            </div>
       </td>
    </tr>

    <!-- Menu Nav Font -->
    <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_nav_font; ?>">
                <?php _e('Menu Navigation Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                if ($google_fonts) {
                    $selected = get_term_meta($term->term_id, $this->_nav_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_nav_font, '', true);
                    }

                    echo '<p><select id="' . $this->_nav_font . '" name="' . $this->_nav_font . '">';
                    foreach ($google_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                }
                ?>
            </div>
       </td>
    </tr>

    <!-- Banner Font -->
    <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_banner_font; ?>">
                <?php _e('Banner Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                if ($google_fonts) {
                    $selected = get_term_meta($term->term_id, $this->_banner_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_banner_font, '', true);
                    }

                    echo '<p><select id="' . $this->_banner_font . '" name="' . $this->_banner_font . '">';
                    foreach ($google_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                }
                ?>
            </div>
       </td>
    </tr>

    <!-- Price Font -->
    <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_price_font; ?>">
                <?php _e('Price Font', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                if ($google_fonts) {
                    $selected = get_term_meta($term->term_id, $this->_price_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_price_font, '', true);
                    }

                    echo '<p><select id="' . $this->_price_font . '" name="' . $this->_price_font . '">';
                    foreach ($google_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                }
                ?>
            </div>
       </td>
    </tr>

    <!-- Custom Font -->
    <?php if ($custom_fonts) { ?>
        <tr class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-custom'; ?> hidden-tag ns-advance-field">
            <th scope="row" valign="top">
                <label for="<?php echo $this->_custom_font; ?>">
                    <?php _e('Custom Font', 'nasa-core'); ?>
                </label>
            </th>
            <td>
                <div class="nasa_font_style">
                    <?php
                    $selected = get_term_meta($term->term_id, $this->_custom_font, true);

                    if (!isset($selected)) {
                        $selected = add_term_meta($term->term_id, $this->_custom_font, '', true);
                    }

                    echo '<p><select id="' . $this->_custom_font . '" name="' . $this->_custom_font . '">';
                    foreach ($custom_fonts as $slug => $name) {
                        echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                    }
                    echo '</select></p>';
                    ?>
                </div>
           </td>
        </tr>
    <?php } ?>
    
    <!-- Override Font Weight -->
    <tr class="form-field nasa-term-root hidden-tag ns-advance-field">
        <th scope="row" valign="top">
            <label for="<?php echo $this->_font_weight; ?>">
                <?php _e('Font Weight', 'nasa-core'); ?>
            </label>
        </th>
        <td>
            <div class="nasa_font_style">
                <?php
                $selected = get_term_meta($term->term_id, $this->_font_weight, true);

                if (!isset($selected)) {
                    $selected = add_term_meta($term->term_id, $this->_custom_font, '', true);
                }
                
                echo '<p><select id="' . $this->_font_weight . '" name="' . $this->_font_weight . '">';
                foreach ($font_weight as $slug => $name) {
                    echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                }
                echo '</select></p>';
                ?>
            </div>
       </td>
    </tr>
<?php } else {
    global $nasa_opt;
    ?>
    <div class="form-field nasa-term-root hidden-tag ns-advance-field">
        <label for="<?php echo $this->_type_font; ?>">
            <?php _e('Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <select name="<?php echo $this->_type_font; ?>" id="<?php echo $this->_type_font; ?>" class="postform">
                <option value=""><?php echo esc_html__('Default', 'nasa-core'); ?></option>
                <option value="custom"><?php echo esc_html__('Custom Font', 'nasa-core'); ?></option>
                <option value="google"><?php echo esc_html__('Google Font', 'nasa-core'); ?></option>
            </select>
        </div>
    </div>

    <!-- Headings Font -->
    <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <label for="<?php echo $this->_headings_font; ?>">
            <?php _e('Headings Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            $selected = isset($nasa_opt['type_headings']) ? $nasa_opt['type_headings'] : '';

            echo '<select id="' . $this->_headings_font . '" name="' . $this->_headings_font . '">';
            foreach ($google_fonts as $slug => $name) {
                echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>

    <!-- Texts Font -->
    <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <label for="<?php echo $this->_texts_font; ?>">
            <?php _e('Texts Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            $selected = isset($nasa_opt['type_texts']) ? $nasa_opt['type_texts'] : '';
            echo '<select id="' . $this->_texts_font . '" name="' . $this->_texts_font . '">';
            foreach ($google_fonts as $slug => $name) {
                echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>

    <!-- Nav Font -->
    <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <label for="<?php echo $this->_nav_font; ?>">
            <?php _e('Menu Navigation Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            $selected = isset($nasa_opt['type_nav']) ? $nasa_opt['type_nav'] : '';
            echo '<select id="' . $this->_nav_font . '" name="' . $this->_nav_font . '">';
            foreach ($google_fonts as $slug => $name) {
                echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>

    <!-- Banner Font -->
    <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <label for="<?php echo $this->_banner_font; ?>">
            <?php _e('Banner Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            $selected = isset($nasa_opt['type_banner']) ? $nasa_opt['type_banner'] : '';
            echo '<select id="' . $this->_banner_font . '" name="' . $this->_banner_font . '">';
            foreach ($google_fonts as $slug => $name) {
                echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>

    <!-- Price Font -->
    <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-google'; ?> hidden-tag ns-advance-field">
        <label for="<?php echo $this->_price_font; ?>">
            <?php _e('Price Font', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            $selected = isset($nasa_opt['type_price']) ? $nasa_opt['type_price'] : '';
            echo '<select id="' . $this->_price_font . '" name="' . $this->_price_font . '">';
            foreach ($google_fonts as $slug => $name) {
                echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>

    <!-- Custom Font -->
    <?php if ($custom_fonts) { ?>
        <div class="form-field nasa-term-root-child <?php echo $this->_type_font . ' nasa-term-' . $this->_type_font . '-custom'; ?> hidden-tag ns-advance-field">
            <label for="<?php echo $this->_custom_font; ?>">
                <?php _e('Custom Font', 'nasa-core'); ?>
            </label>
            <div class="nasa_font_style">
                <?php
                $selected = isset($nasa_opt['custom_font']) ? $nasa_opt['custom_font'] : '';
                echo '<select id="' . $this->_custom_font . '" name="' . $this->_custom_font . '">';
                foreach ($custom_fonts as $slug => $name) {
                    echo '<option value="' . $slug . '"' . ($selected == $slug ? ' selected' : '') . '>' . $name . '</option>';
                }
                echo '</select>';
                ?>
            </div>
        </div>
    <?php } ?>
    
    <!-- Override Font Weight -->
    <div class="form-field nasa-term-root hidden-tag ns-advance-field">
        <label for="<?php echo $this->_font_weight; ?>">
            <?php _e('Font Weight', 'nasa-core'); ?>
        </label>
        <div class="nasa_font_style">
            <?php
            echo '<select id="' . $this->_font_weight . '" name="' . $this->_font_weight . '">';
            foreach ($font_weight as $slug => $name) {
                echo '<option value="' . $slug . '">' . $name . '</option>';
            }
            echo '</select>';
            ?>
        </div>
    </div>
<?php
}
