<?php
  $key = 'tool';
  $custom_css = '';

  $sections = best_restaurant_public_content_default(); 
  $default = $sections[$key];

  $imagepath =  get_stylesheet_directory_uri() . '/custom/images/'; 
  
  $tool_1_logo     = esc_url(get_theme_mod( 'tool_1_logo','' ));  
  
  
 $tool_1_description     = esc_html(get_theme_mod( 'tool_1_description',__( 'Donec at eui smod nibh, eu bibendum quam. Nullam  non gravida pDonec at eui smod nibh, eu bibendum quam. Nullam  non gravida peu bibendum quam. Nullam  non gravida peu bibendum quam. Nullam  non gravida p', 'best-restaurant' ) ));
 
 $tool_2_title     = esc_html(get_theme_mod( 'tool_2_title',__( 'Contact Us', 'best-restaurant' ) )); 
 
 $tool_3_title     = esc_html(get_theme_mod( 'tool_3_title',__( 'Opening Hours', 'best-restaurant' ) )); 
 
  
?>
<section id="ct_<?php echo $key;?>" class="ct_section ct_<?php echo $key;?> ct_section_<?php echo $key;?> ">
	<div  id="<?php echo $key;?>" class="section_content " >

        <div class="ct_tool_list container">

          	<div class="row ct_tool_row">
          	  	<div class="col-md-4 tool-1">
					<div class="tool-content-1">	
                        <div class="logo-container">
                        <?php 
                            if ( $tool_1_logo !='' )
                            {
                        ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="Logo">
                                <img src="<?php echo $tool_1_logo;?> " />
                            </a>
                        <?php
                            }else{
                        ?> 
                        
                        <div class="logo-text">
                            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><span class="blogname"><?php esc_html(bloginfo('name')); ?></span></a></h1>
                            <hr>
                        </div>
                        <?php }?>
                        </div>
                        <div class="clear"></div>   
                        <div class="tool-1-text"><?php echo $tool_1_description;?></div>
                	</div>
    			</div>


            	<div class="col-md-4 tool-3">
					<div class="tool-content-3">	
						<h2><?php echo $tool_3_title;?></h2>
                        <hr>
                        <div>
						<?php
						  $default_content3 = array(
								array(
									'tool_3_text' => esc_attr__( 'Monday-Friday: 08:00AM - 10:00PM', 'best-restaurant' ),												
								),
						
								array(
									'tool_3_text' => esc_attr__( 'Saturday-Sunday: 10:00AM - 11:00PM', 'best-restaurant' ),												
								),
						
							);
                          $repeater_value = get_theme_mod( 'repeater_tool_3',$default_content3);	

                          if ( ! empty( $repeater_value ) ) :	
                            foreach ( $repeater_value as $row ) : 
                              if ( isset( $row[ 'tool_3_text' ] ) && !empty( $row[ 'tool_3_text' ] ) ) :
                        ?>
            					<p>
									<?php echo esc_html($row[ 'tool_3_text' ]);?>
                                </p>
                        <?php
                              endif;

                            endforeach;	
                          endif; 
                        ?>

                        </div>
                   	</div>
				</div>



            	<div class="col-md-4 tool-2">
					<div class="tool-content-2">	
						<h2><?php echo $tool_2_title;?></h2>
                        <hr>
                        <ul>
						<?php
						  $default_content = best_restaurant_section_content_default($key);
                          $repeater_value = get_theme_mod( 'repeater_tool_2',$default_content);	

                          if ( ! empty( $repeater_value ) ) :	
                            foreach ( $repeater_value as $row ) : 
                              if ( isset( $row[ 'tool_2_icon' ] ) && !empty( $row[ 'tool_2_icon' ] ) ) :
                        ?>
            					<li><i class="fa <?php echo esc_html($row[ 'tool_2_icon' ]);?>" aria-hidden="true"></i>
									<?php echo esc_html($row[ 'tool_2_text' ]);?>
                                </li>
                        <?php
                              endif;

                            endforeach;	
                          endif; 
                        ?>

                        </ul>
                        
                   	</div>
               	</div>		           
          	</div>      
            
        </div>
        

	</div>
	<div class="clear"></div>
</section>