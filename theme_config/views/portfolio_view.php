<div class="works">
	<div class="worksFilter">
	    <div class="worksFilterText textcolor6">
	        <?php _e('Featured Work:','teslawp'); ?>
	    </div>
	    <ul class="worksFilterCategories">
	        <li class="textcolor6 worksFilterCategoriesActive bordercolor3" data-category="all">
	            <div class="bordercolor3">
	                <?php _e('all','teslawp'); ?>
	            </div>
	        </li>
	        <?php foreach($all_categories as $category_slug => $category_name): ?>
			<li class="textcolor6 bordercolor3" data-category="<?php echo $category_slug; ?>">
	            <div class="bordercolor3">
	            	<?php echo $category_name; ?>
	            </div>
	        </li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="worksViews">
	    <div class="worksViewsOption bordercolor3 worksViewsOptionActive" data-class="worksContainerView1">
	        <img src="<?php echo get_template_directory_uri(); ?>/images/options/sort_opt1.png" alt="" />
	    </div>
	    <div class="worksViewsOption bordercolor3" data-class="worksContainerView2">
	        <img src="<?php echo get_template_directory_uri(); ?>/images/options/sort_opt2.png" alt="" />
	    </div>
	</div>
	<div class="worksContainer worksContainerView1">
		<?php foreach($slides as $slide): ?>
		<div class="worksEntry" data-categories="<?php echo implode(' ', array_keys($slide['categories'])); ?>">
	        <div class="worksEntryContainer">
	            <div class="worksEntryInfo">
	                <div class="worksEntryInfoTitle">
	                    <a href="<?php echo get_permalink($slide['post']->ID); ?>">
	                        <?php echo get_the_title($slide['post']->ID); ?>
	                    </a>
	                </div>
	                <div  class="worksEntryInfoExcerpt">
	                	<?php echo $slide['options']['small_description']; ?>
	                </div>
	                <div  class="worksEntryInfoExcerptBig">
	                	<?php echo $slide['options']['big_description']; ?>
	                </div>
	                <?php if(!$shortcode['no_more']): ?>
					<div class="worksEntryInfoMore">
						<a href="<?php echo get_permalink($slide['post']->ID); ?>">
							<?php _e('read more','teslawp'); ?>
						</a>
					</div>
					<?php endif; ?>
		        </div>
		        <a href="<?php echo get_permalink($slide['post']->ID); ?>"><img class="worksEntryImg" src="<?php echo $slide['options']['small_image']; ?>" alt="" /></a>
		        <img class="worksEntryImgBig" src="<?php echo $slide['options']['big_image']; ?>" alt="" />
		    </div>
		</div>
		<?php endforeach; ?>
    </div>
</div>