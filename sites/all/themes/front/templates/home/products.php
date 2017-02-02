<div id="portfolio" class="section-padding">
	<div class="container">
		<?php if(isset($home_widgets['products']) && !empty($home_widgets['products'])){
			$item = $home_widgets['products'];
			$title = '';$body = '';
			if(isset($item->title)){
				$title = $item->title;
			}	
			if(isset($item->body[LANGUAGE_NONE][0]['value'])){
				$body = $item->body[LANGUAGE_NONE][0]['value'];
			}?>
			<div class="row">
				<div class="page-title text-center">
					<h1><?php echo $title;?></h1>
					<p><?php echo $body;?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
			</div>
		<?php }?>
		<?php $category = 0;$home = 1;$limit = 6;$page = 1;
        $return = elsayed_get_products($category, $home, $limit, $page);
        $products = $return['items'];?>
		<div class="port-sec">			
			<?php $categories = array();
			$html2 = '';
			if(!empty($products)){
				$html2 .= '<div id="Container">';
				foreach ($products as $key => $product) {
					$product_title = $product->title;
			        $product_url = elsayed_get_node_url_by_id($product->nid);
			        $product_description = '';
			        if(isset($product->body[LANGUAGE_NONE][0]['value'])){
			            $product_description = elsayed_cut_string($product->body[LANGUAGE_NONE][0]['value'], 250);
			        }
			        $image = $GLOBALS['default_image'];
			        if(isset($product->field_images[LANGUAGE_NONE][0]['uri'])){
			            $image = image_style_url('thumbnail', $product->field_images[LANGUAGE_NONE][0]['uri']);
			        }
					$field_category = '';
					$category_nid = 0;
				    if(isset($product->field_category[LANGUAGE_NONE][0]['target_id'])){
				        $category = node_load($product->field_category[LANGUAGE_NONE][0]['target_id']);
				        if(!empty($category)){
				        	$field_category = $category->title;
							$category_nid = $category->nid;
							$categories[$category_nid] = $category->title;
						}
				    }
					$html2 .= '<div class="view_1 view_1-eighth filimg mix category-1 category-'.$category_nid.' col-md-4 col-sm-4 col-xs-12" data-myorder="2">
						<a href="'.$product_url.'">
				    		<img src="'.$image.'" class="img-responsive">
			    		</a>
			    		<div class="mask">
			    			<a title="'.$product_title.'" href="'.$product_url.'">
			    				<h4>'.$product_title.'</h4>
			    			</a>
		    			</div>
	    			</div>';
				}		
				$html2 .= '</div>';
			}
			$html1 = '';
			$html1 .= '<div class="col-md-12 fil-btn text-center">
			<div class="filter wrk-title active" data-filter="all">'.__('الكل').'</div>';
			if(!empty($categories)){
				$count = count($categories);
				$i = 1;
				foreach ($categories as $key => $category) {
					$additional_class = '';
					if($i++ >= $count){
						$additional_class = ' lst-cld';							
					}
					$html1 .= '<div class="filter wrk-title '.$additional_class.'" data-filter=".category-'.$key.'">'.$category.'</div>';						
				}					
			}
			$html1 .= '</div>';
			echo $html1.$html2;?>
            <div class="col-md-12">
            	<a class="inpt" href="<?php echo $base_url.'/'.'products';?>"><?php echo __('المزيد');?></a>
            </div>			
		</div>
	</div>
</div>