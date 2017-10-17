<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_services_carousel')):
   class gsc_services_carousel{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_services_carousel',
            'title' => t('Categories Carousel'),
            'size' => 3,
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title For Admin'),
               ),
               array(
                  'id'        => 'items_lg',
                  'type'      => 'select',
                  'title'     => ('Columns for Large Screen'),
                  'options'   => array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'),
                  'std'       => 4
               ),
               array(
                  'id'        => 'items_md',
                  'type'      => 'select',
                  'title'     => ('Columns for Medium Screen'),
                  'options'   => array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'),
                  'std'       => 4
               ),
               array(
                  'id'        => 'items_sm',
                  'type'      => 'select',
                  'title'     => ('Columns for Small Screen'),
                  'options'   => array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'),
                  'std'       => 3
               ),
               array(
                  'id'        => 'items_xs',
                  'type'      => 'select',
                  'title'     => ('Columns for Extra Small Screen'),
                  'options'   => array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'),
                  'std'       => 2
               ),
               array(
                  'id'        => 'text_skin',
                  'type'      => 'select',
                  'title'     => ('Text Color'),
                  'options'   => array(
                     'text-dark'  => t('Text Dark'),
                     'text-white' => t('Text White')
                  )
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => ('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_blockbuilder_animate(),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),   
            ),                                     
         );

         for($i=1; $i<=10; $i++){
            $fields['fields'][] = array(
               'id'     => "info_${i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "title_{$i}",
               'type'      => 'text',
               'title'     => t("Title {$i}")
            );
            $fields['fields'][] = array(
               'id'           => "icon_{$i}",
               'type'         => 'text',
               'title'        => t("Icon {$i}"),
               'desc'         => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="'.base_path().drupal_get_path('theme', 'gavias_organiz').'/demo-font/index.html'.'">Custom icon</a>'),
            );
            $fields['fields'][] = array(
               'id'        => "link_{$i}",
               'type'      => 'text',
               'title'     => t("Link {$i}")
            );
         }
         return $fields;
      }

      public function render_content( $item ) {
         print self::sc_services_carousel( $item['fields'] );
      }

      public static function sc_services_carousel( $attr, $content = null ){
         global $base_url;
         $default = array(
            'title'        => '',
            'items_lg'     => '4',
            'items_md'     => '4',
            'items_sm'     => '3',
            'items_xs'     => '2',
            'text_skin'    => 'text-dark',
            'el_class'     => '',
            'animate'      => '',
         );

         for($i=1; $i<=10; $i++){
            $default["title_{$i}"] = '';
            $default["icon_{$i}"] = '';
            $default["link_{$i}"] = '';
         }

         extract(shortcode_atts($default, $attr));

         $el_class .= $text_skin;

         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }
         $_id = gavias_blockbuilder_makeid();
         ?>

         <?php ob_start() ?>
         <div class="gsc-service-carousel <?php echo $el_class ?>"> 
            <div class="owl-carousel init-carousel-owl owl-loaded owl-drag" data-items="<?php print $items_lg ?>" data-items_lg="<?php print $items_lg ?>" data-items_md="<?php print $items_md ?>" data-items_sm="<?php print $items_sm ?>" data-items_xs="<?php print $items_xs ?>" data-loop="1" data-speed="500" data-auto_play="1" data-auto_play_speed="2000" data-auto_play_timeout="5000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
               <?php for($i=1; $i<=10; $i++){ ?>
                  <?php 
                     $title = "title_{$i}";
                     $icon = "icon_{$i}";
                     $link = "link_{$i}";
                  ?>
                  <?php if($$title){ ?>
                     <div class="item">
                        <div class="service-item">
                           <div class="box-content">
                              <?php if($$icon){ ?><div class="icon"><span class="<?php print $$icon ?>"></span></div> <?php } ?>
                              <div class="content">
                                 <div class="box-title">
                                    <?php if($$link){ ?><a href="<?php print $$link ?>"><?php } ?>   
                                       <?php print $$title ?>
                                    <?php if($$link){ ?></a><?php } ?>  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>   
                  <?php } ?>    
               <?php } ?>
            </div>   
         </div>   
         <?php return ob_get_clean();
      }

      public function load_shortcode(){
         add_shortcode( 'services_carousel', array($this, 'sc_services_carousel') );
      }
   }
 endif;