<?php
get_header();
?>

	<main id="primary" class="site-main">
        <div class="banner">
            <?php
            the_post_thumbnail();
            ?>
        </div>
        <div class="text_banner">
            <div class="title">
                <?php the_field('title_banner'); ?>
            </div>
            <div class="subtitle">
                <?php the_field('subtitle_banner'); ?>
            </div>
            <div class="button">
            <?php 
                $link = get_field('link_banner');
                $text = get_field('button_banner');
                if( $link ): ?>
                    <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                <?php endif; ?>
            </div>
        </div>

	</main><!-- #main -->
    <div class="main">
            <div class="partner">
                <div class="partners">
                    <div class="title"><?php the_field('our_partners'); ?></div>
                    <div class="our_partners">
                        <div class="title_logo_partners"><?php the_field('title_logo_partners'); ?></div>
                        <div class="logo_partners">
                        <?php 
                            $image = get_field('logo_partners');
                            $image1 = get_field('logo_partners_1');
                            $image2 = get_field('logo_partners_2');
                            $image3 = get_field('logo_partners_3');
                            $image4 = get_field('logo_partners_4');

                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <?php
                                if( !empty( $image1 ) ): ?>
                                <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
                            <?php endif; ?>
                        
                            <?php
                                if( !empty( $image2 ) ): ?>
                                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                            <?php endif; ?>

                            <?php
                                if( !empty( $image3 ) ): ?>
                                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
                            <?php endif; ?>

                            <?php
                                if( !empty( $image4 ) ): ?>
                                <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <div class="wrapper">

            <div class="why_with_us">
                    <div class="title_accordion">
                        <div class="title"> <?php the_field('title_why_with_us'); ?></div>
                            <div id="accordion" class="accordion">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php 
                                            $image = get_field('logo_realtime');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; 
                                        ?>
                                        <?php the_field('realtime'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('realtime_text'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php 
                                            $image = get_field('logo_analitics');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; 
                                        ?>
                                        <?php the_field('analitics'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('analitics_text'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php 
                                            $image = get_field('logo_monthly');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; 
                                        ?>
                                        <?php the_field('monthly'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('monthly_text'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php 
                                            $image = get_field('logo_reports');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; 
                                        ?>
                                        <?php the_field('reports'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('reports_text'); ?>
                                        </div>
                                    </div>
                                </div>
                    

                        </div>
                    </div>


                    <div class="analytics">
                        <div class="text_analytics">
                            <div id="accordion_analytics" class="accordion_analytics">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <div class="text">
                                            <div class="title">
                                                <?php 
                                                    $image = get_field('logo_advanced_analytics');
                                                        if( !empty( $image ) ): ?>
                                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        <?php endif; 
                                                ?>
                                                <?php the_field('advanced_analytics'); ?>
                                            </div>
                                            <div class="accordion_subtitle">
                                                <?php the_field('advanced_analytics_subtitle'); ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('advanced_analytics_text'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="graphics_progress">
                            <div class="graphics">
                                <div class="graphics_and_comments">
                                    <div class="histograma">
                                        <div>
                                            <canvas id="myChart" style="width: 40%; height: 113px;"></canvas>
                                        </div>
                                    </div>
                                    <div class="progress_and_text">
                                        <div class="progressbar">
                                            <div class="title_semicircle">
                                                <div class="title"><?php the_field('semi_circle'); ?></div>
                                                <div class="container">
                                                    <svg class="circle-container" viewBox="2 -2 28 36" xmlns="http://www.w3.org/2000/svg">
                                                        <circle class="circle-container__background" r="16" cx="16" cy="16" shape-rendering="geometricPrecision"></circle>
                                                        <circle class="circle-container__progress" r="16" cx="16" cy="16" style="stroke-dashoffset: 20" shape-rendering="geometricPrecision">
                                                        </circle>
                                                    </svg>
                                                    <div class="subtitle"><?php the_field('subtitle_semi_circle'); ?></div>
                                                </div>
                                            </div>
                                        
                                        </div>

                                        <div class="text">
                                            <div class="title"><?php the_field('comments'); ?></div>
                                                <div class="comments">
                                                    <div class="text_logo" style="padding-bottom: 7px;">
                                                        <div class="logo">
                                                            <?php 
                                                                $image = get_field('logo_clients');
                                                                    if( !empty( $image ) ): ?>
                                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="name_comment">
                                                            <div class="name"><?php the_field('name_client'); ?>
                                                                <div class="comment"><?php the_field('comment_client'); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text_logo" style="padding-bottom: 7px;">
                                                        <div class="logo">
                                                            <?php 
                                                                $image = get_field('logo_clients1');
                                                                    if( !empty( $image ) ): ?>
                                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="name_comment">
                                                            <div class="name"><?php the_field('name_client1'); ?>
                                                                <div class="comment"><?php the_field('comment_client1'); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text_logo">
                                                        <div class="logo">
                                                            <?php 
                                                                $image = get_field('logo_clients2');
                                                                    if( !empty( $image ) ): ?>
                                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="name_comment">
                                                            <div class="name"><?php the_field('name_client2'); ?>
                                                                <div class="comment"><?php the_field('comment_client2'); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="progress_comments">
                                <div class="circle_text">
                                    <div class="title"><?php the_field('progress_in_progress'); ?></div>
                                    <div class="circle">
                                        <div class="circle_progress">
                                            <div class="progress_big">
                                                <svg class="circle-container" viewBox="2 -2 28 36" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="circle-container__background" r="16" cx="16" cy="16"></circle>
                                                    <circle class="circle-container__progress" r="16" cx="16" cy="16" style="stroke-dashoffset: 28"></circle>
                                                </svg>
                                            </div>
                                            <div class="progress_medium">
                                                <svg class="circle-container" viewBox="2 -2 28 36" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="circle-container__background" r="16" cx="16" cy="16"></circle>
                                                    <circle class="circle-container__progress" r="16" cx="16" cy="16" style="stroke-dashoffset: 40"></circle>
                                                </svg>
                                            </div>
                                            <div class="progress_small">
                                                <svg class="circle-container" viewBox="2 -2 28 36" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="circle-container__background" r="16" cx="16" cy="16"></circle>
                                                    <circle class="circle-container__progress" r="16" cx="16" cy="16" style="stroke-dashoffset: 70"></circle>
                                                </svg>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <div class="logo_text" style="padding-bottom: 20px;">
                                                <div class="logo_name">
                                                    <div class="logo">
                                                        <?php 
                                                            $image = get_field('logo_client_progress');
                                                                if( !empty( $image ) ): ?>
                                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="name"><?php the_field('name_client_in_progress'); ?></div>
                                                </div>
                                                <div class="subtitle"><?php the_field('subtitle_client_in_progress'); ?></div>
                                            </div>
                                            <div class="logo_text" style="padding-bottom: 20px;">
                                                <div class="logo_name">
                                                    <div class="logo">
                                                        <?php 
                                                            $image = get_field('logo_client_progress1');
                                                                if( !empty( $image ) ): ?>
                                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="name"><?php the_field('name_client_in_progress1'); ?></div>
                                                </div>
                                                <div class="subtitle"><?php the_field('subtitle_client_in_progress1'); ?></div>
                                            </div>
                                            <div class="logo_text">
                                                <div class="logo_name">
                                                    <div class="logo">
                                                        <?php 
                                                            $image = get_field('logo_client_progress2');
                                                                if( !empty( $image ) ): ?>
                                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="name"><?php the_field('name_client_in_progress2'); ?></div>
                                                </div>
                                                <div class="subtitle"><?php the_field('subtitle_client_in_progress2'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    
                        <div class="lower_accordion">
                            <div id="lower_accordion" class="lower_accordion">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php 
                                            $image = get_field('logo_lower_accordion');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; 
                                        ?>
                                        <?php the_field('lower_accordion'); ?>
                                    </div>
                                    
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('lower_accordion_text'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        
                </div>


            </div>

            <div class="socials">
                    <div class="our_socials">
                        <div class="title_logo_socials"><?php the_field('title_logo_socials'); ?></div>
                        <div class="logo_socials">
                            <?php 

                                $image = get_field('logo_socials');
                                $link = get_field('link_inst');

                                $image1 = get_field('logo_socials_1');
                                $link1 = get_field('link_linkedin');

                                $image2 = get_field('logo_socials_2');
                                $link2 = get_field('link_you_tube');

                                $image3 = get_field('logo_socials_3');
                                $link3 = get_field('link_facebook');

                                if( $link ):
                                    if( !empty( $image ) ): ?>
                                        <a class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php
                                    if( $link1 ):
                                        if( !empty( $image1 ) ): ?>
                                            <a class="button" href="<?php echo esc_url( $link1 ); ?>"  target="_blank"><img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" /></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            
                                <?php
                                    if( $link2 ):
                                        if( !empty( $image2 ) ): ?>
                                            <a class="button" href="<?php echo esc_url( $link2 ); ?>"  target="_blank"><img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" /></a>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php
                                    if( $link3 ):
                                        if( !empty( $image3 ) ): ?>
                                            <a class="button" href="<?php echo esc_url( $link3 ); ?>"  target="_blank"><img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" /></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                        </div>
                    </div>
            </div>

            <div class="container_steps">
                <div class="steps">
                    <div class="one_steps">
                        <div class="step">
                            <div class="info_step">
                                <div class="number_step"><?php the_field('one_steps'); ?></div>
                                <div class="text_step">
                                    <div class="title"><?php the_field('title_steps'); ?></div>
                                    <div class="subtitle"><?php the_field('subtitle_steps'); ?></div>
                                </div>
                            </div>
                            <div class="logo_step">
                                <?php 
                                    $image = get_field('logo_steps');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="line_down"></div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="two_steps">
                        <div class="step">
                            <div class="logo_step">
                                <div class="line_up"></div>
                                <?php 
                                    $image = get_field('logo_second_steps');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="line_down"></div>
                            </div>
                            <div class="info_step">
                                <div class="number_step"><?php the_field('two_steps'); ?></div>
                                <div class="text_step">
                                    <div class="title"><?php the_field('title_second_steps'); ?></div>
                                    <div class="subtitle"><?php the_field('subtitle_second_steps'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="three_steps">
                        <div class="step">
                            <div class="info_step">
                                <div class="number_step"><?php the_field('third_steps'); ?></div>
                                <div class="text_step">
                                    <div class="title"><?php the_field('title_third_steps'); ?></div>
                                    <div class="subtitle"><?php the_field('subtitle_third_steps'); ?></div>
                                </div>
                            </div>
                            <div class="logo_step">
                                <div class="line_up"></div>
                                <?php 
                                    $image = get_field('logo_third_steps');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="line_down"></div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="four_steps">
                        <div class="step">
                            <div class="logo_step">
                                <div class="line_up"></div>
                                <?php 
                                    $image = get_field('logo_final_steps');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="line_down"></div>
                            </div>
                            <div class="info_step">
                                <div class="number_step"><?php the_field('final_steps'); ?></div>
                                <div class="text_step">
                                    <div class="title"><?php the_field('title_final_steps'); ?></div>
                                    <div class="subtitle"><?php the_field('subtitle_final_steps'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tabs_what_we_offer">
                <div class="what_we_offer">
                    <div class="title"><?php the_field('what_we_offer'); ?></div>
                    <div class="warpper_tabs">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <input class="radio" id="four" name="group" type="radio">
                        <input class="radio" id="five" name="group" type="radio">
                        <input class="radio" id="six" name="group" type="radio">
                        <input class="radio" id="seven" name="group" type="radio">
                        <div class="tabs">
                            <label class="tab" id="one-tab" for="one">
                                <?php 
                                    $image = get_field('logo_google');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="two-tab" for="two">
                                <?php 
                                    $image = get_field('logo_meta');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="three-tab" for="three">
                                <?php 
                                    $image = get_field('logo_reddit');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="four-tab" for="four">
                                <?php 
                                    $image = get_field('logo_linkedin');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="five-tab" for="five">
                                <?php 
                                    $image = get_field('logo_twitch');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="six-tab" for="six">
                                <?php 
                                    $image = get_field('logo_pinterest');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                            <label class="tab" id="seven-tab" for="seven">
                                <?php 
                                    $image = get_field('logo_tiktok');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </label>
                        </div>
                        <div class="panels">
                            <div class="panel" id="one-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                            <div class="panel" id="two-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel" id="three-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel" id="four-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel" id="five-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel" id="six-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel" id="seven-panel">
                                <div class="right-container">
                                    <div class="text">
                                        <div class="panel-price"> <?php the_field('price_google'); ?></div>
                                        <div class="panel-title"> <?php the_field('title_google'); ?>
                                            <div class="panel-subtitle"><?php the_field('subtitle_google'); ?></div>
                                        </div>
                                        <div class="button">
                                            <div class="button_started">
                                                <?php 
                                                    $link = get_field('link_get_started_google');
                                                    $text = get_field('button_get_started');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="button_learn">
                                                <?php 
                                                    $link = get_field('link_learn_more');
                                                    $text = get_field('button_learn_more');
                                                        if( $link ): ?>
                                                            <a class="button" href="<?php echo esc_url( $link ); ?>"> <?php echo $text; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="logo">
                                        <div class="title_logo"><?php the_field('title_logo_for_google'); ?></div>
                                        <div class="logo_google">
                                            <?php 
                                                $image = get_field('google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('facebook');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('youtube');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php 
                                                $image = get_field('pinterest');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-container">
                                    <div class="image">
                                        <div class="main_image">
                                            <?php 
                                                $image = get_field('left_image_for_google');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="sub_image">
                                            <div class="sub_image_calendar">
                                                <div class="calendar">
                                                    <?php 
                                                        $image = get_field('image_calendar_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="sub_image_blog">
                                                <div class="blog">
                                                    <?php 
                                                        $image = get_field('image_blog_on_main_image');
                                                            if( !empty( $image ) ): ?>
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                     
                        
                  
                </div>
            </div>

            <div class="testimonials">
                <div class="title"><?php the_field('testimonials'); ?></div>
                <div class="content">
                    <div class="left_content">
                        <div class="webflow">
                            <div class="webflow_logo_text">
                                <div class="logo">
                                    <?php 
                                        $image = get_field('testimonials_webflow_logo');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="subtitle"><?php the_field('subtitle_webflow'); ?></div>
                                <div class="comments">
                                    <div class="avatar">
                                    <?php 
                                        $image = get_field('commenter_avatar_webflow');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                    <div class="name_profession">
                                        <div class="name"><?php the_field('commenter_name_webflow'); ?></div>
                                        <div class="profession"><?php the_field('commenter_profession_webflow'); ?></div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="right_content">
                        <div class="airtable">
                            <div class="airtable_logo_text">
                                <div class="logo">
                                    <?php 
                                        $image = get_field('testimonials_airtable_logo');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="subtitle"><?php the_field('subtitle_airtable'); ?></div>
                                <div class="comments">
                                    <div class="avatar">
                                    <?php 
                                        $image = get_field('commenter_avatar_airtable');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                    <div class="name_profession">
                                        <div class="name"><?php the_field('commenter_name_airtable'); ?></div>
                                        <div class="profession"><?php the_field('commenter_profession_airtable'); ?></div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="zapier">
                            <div class="zapier_logo_text">
                                <div class="logo">
                                    <?php 
                                        $image = get_field('testimonials_zapier_logo');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="subtitle"><?php the_field('subtitle_zapier'); ?></div>
                                <div class="comments">
                                    <div class="avatar">
                                    <?php 
                                        $image = get_field('commenter_avatar');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                    <div class="name_profession">
                                        <div class="name"><?php the_field('commenter_name'); ?></div>
                                        <div class="profession"><?php the_field('commenter_profession'); ?></div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="newsletter">
                <div class="text_input">
                    <div class="title_newsletter"><?php the_field('title_newsletter'); ?></div>
                    <div class="input_button">
                        <div class="form-control">
                            <input type="text" class="input" placeholder="Enter your e-mail" />
                            <button class="btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="touch">
                <div class="text">
                    <div class="title"> <?php the_field('stay_in_touch'); ?></div>
                    <div class="subtitle"><?php the_field('stay_in_touch_subtitle'); ?></div>
                </div>
                <div class="forms">
                <?php echo do_shortcode ('[contact-form-7 id="272" title="Contact form 1"]') ?>
                </div>
            </div>

            <div class="faq">
                    <div class="content_accordion_faq">
                        <div class="title"> <?php the_field('title_faq'); ?></div>
                            <div id="faq_accordion" class="faq_accordion">
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('why_is_whyte_the_best_nocode_tool'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('when_did_whyte_was_founded'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('is_nocode_the_future_of_the_web'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('how_to_launch_a_whyte_website'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('who_founded_brix_templates'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        <?php the_field('who_are_the_whyte_founders'); ?>
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__content">
                                            <?php the_field('subtitle_for_why_is_whyte_the_best_nocode_tool'); ?>
                                        </div>
                                    </div>
                                </div>
                                
                    

                        </div>
                    </div>
            </div>

 
  

        </div>
        
    </div>
   

<?php
get_sidebar();
get_footer();