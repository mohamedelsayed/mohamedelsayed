<?php $slider_widget = elsayed_get_slider_widget();
if(!empty($slider_widget)){?>
    <div id="slider">
        <div class="flexslider">
            <ul class="slides">
                <?php foreach ($slider_widget as $key => $slider) {
                    $slider_image = $slider->field_image[LANGUAGE_NONE][0]['uri'];
                    $image = image_style_url('default_size', $slider_image);?>
                    <li>
                        <div class="slider-caption">
                            <!-- <h1>Delicious Meals</h1>
                            <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                            <br><br>eget tellus luctus fermentum.</p>
                            <a href="single-post.html">Shop Now</a> -->
                        </div>
                        <img src="<?php echo $image;?>" title="<?php echo $slider->title;?>" alt="<?php echo $slider->title;?>" />
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
<?php }?>