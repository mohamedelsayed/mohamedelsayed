<?php global $sitelang; ?>
<?php
$slider_widget = elsayed_get_slider_widget();
if (!empty($slider_widget)) {
    ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php
            foreach ($slider_widget as $key => $slider) {
                $slider_image = $slider->field_image[LANGUAGE_NONE][0]['uri'];
                $image = image_style_url('large', $slider_image);
                $slider_title = trim($slider->title);
                $slider_link = '';
                if (isset($slider->field_link[LANGUAGE_NONE][0]['value'])) {
                    $slider_link = $slider->field_link[LANGUAGE_NONE][0]['value'];
                }
                $slider_blank = 0;
                if (isset($slider->field_blank[LANGUAGE_NONE][0]['value'])) {
                    $slider_blank = $slider->field_blank[LANGUAGE_NONE][0]['value'];
                }
                $href_code = '';
                if (trim($slider_link) != '') {
                    $blank_code = '';
                    if ($slider_blank) {
                        $blank_code = ' target="_blank" ';
                    }
                    $href_code = ' href="' . $slider_link . '" ' . $blank_code;
                }
                ?>
                <li>
                    <a hreflang="<?php echo $sitelang; ?>" <?php echo $href_code; ?>>
                        <img alt="<?php echo $slider_title; ?>" title="<?php echo $slider_title; ?>" src="<?php echo $image; ?>">
                        <div class="caption">
                            <h2>
                                <span>
        <?php echo $slider_title; ?>
                                </span>
                            </h2>
                        </div>
                    </a>
                </li>
    <?php } ?>
        </ul>
    </div>
    <?php
}?>