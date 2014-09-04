<?php $slide = $slides[0]; ?>
<div class="project">
	<div class="pageSlider" style="<?php echo $shortcode['style']; ?>" data-speed="<?php echo $shortcode['speed']*1000; ?>" data-pause="<?php echo $shortcode['pause']*1000; ?>">
        <div class="pageSliderItems">
            <ul>
        		<?php foreach($slide['options']['image_slider'] as $image): ?>
				<li><img src="<?php echo $image; ?>" alt="" /></li>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="projectInfo">
        <div class="projectInfoTitle font1">
            <?php echo get_the_title($slide['post']->ID); ?>
        </div>
        <div class="projectInfoDescription">
            <?php echo $slide['options']['full_description']; ?>
        </div>
        <div class="projectInfoDetails">
            <div class="projectInfoDetailsTitle font1">
                <?php _e('Project Details','teslawp'); ?>
            </div>
            <div class="projectInfoDetailsEntry">
                <div class="projectInfoDetailsEntryTitle">
                    <?php _e('Categories','teslawp'); ?>
                </div>
                <div class="projectInfoDetailsEntryBody">
                    <?php
                    if(empty($slide['options']['categories']))
                    	echo implode(', ', array_values($slide['categories']));
                    else
                    	echo $slide['options']['categories'];
                    ?>
                </div>
            </div>
            <div class="projectInfoDetailsEntry">
                <div class="projectInfoDetailsEntryTitle">
                    <?php _e('Skills','teslawp'); ?>
                </div>
                <div class="projectInfoDetailsEntryBody">
                    <?php echo $slide['options']['skills']; ?>
                </div>
            </div>
            <div class="projectInfoDetailsEntry">
                <div class="projectInfoDetailsEntryTitle">
                    <?php _e('Project url','teslawp'); ?>
                </div>
                <div class="projectInfoDetailsEntryBody">
                    <a href="<?php echo empty($slide['options']['url'])?get_permalink($slide['post']->ID):$slide['options']['url']; ?>" target="_blank"><?php _e('Project link','teslawp'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($slide['related'])): ?>
    <div class="projectRelated">
        <div class="titleContainer font1">
            <div class="title">
                <?php _e('related projects','teslawp'); ?>
            </div>
            <div class="clientsNav">
                <div class="clientsNavPrev"></div>
                <div class="clientsNavNext"></div>
            </div>
        </div>
        <ul>
    		<?php foreach($slide['related'] as $related): ?>
        	<li>
		        <a href="<?php echo get_permalink($related['post']->ID); ?>">
		            <img src="<?php echo $related['options']['related_image']; ?>" alt="" />
		        </a>
		        <div class="title">
		            <a href="<?php echo $related['options']['url']; ?>">
		                <?php echo get_the_title($related['post']->ID); ?>
		            </a>
		        </div>
		        <div class="description">
		            <?php echo $related['options']['related_description'] ?>
		        </div>
		    </li>
			<?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>