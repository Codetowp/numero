<?php
 $user_ids = numero_get_section_counter_data();
?>
<?php
    if ( ! empty( $user_ids ) ) 
	{
		$col = 3;
		$num_col = 4;
		$n = count( $user_ids );
		if ( $n <= 4 ) 
		{
			switch ($n) 
			{
				case 3:
					$col = 4;
					$num_col = 3;
					break;
				case 2:
					$col = 6;
					$num_col = 2;
					break;
				default:
					$col = 12;
					$num_col = 1;
			}
		}
		$j = 0;
		foreach ( $user_ids as $k => $f ) 
		{
			$class = 'col-md-3 col-sm-3 col-xs-' . $col;
			if ($j >= $num_col) 
			{
				$j = 1;
				$class .= ' clearleft';
			} else 
			{
				$j++;
			}
           
			$media = '';
			$f =  wp_parse_args( $f, array(
				'icon_type' => 'icon',
				'icon' => 'gg',
				'image' => '',
				'title' => '',
				'count' => '',
			) );
			if ( $f['icon'] ) 
			{
				$f['icon'] = trim( $f['icon'] );
				$icon = esc_attr( $f['icon'] );
			}              
                          
            ?>

             <div class="<?php echo esc_attr($class); ?>">
                  <div class="c-block"><i class="<?php echo $icon; ?>"></i><span class="counter"><?php echo esc_html( $f['count'] ); ?></span>
                    <p><?php echo esc_html($f['title']); ?></p>
                  </div>
            </div>

		<?php } // end foreach
	}
	else
	{
		?>     

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-user"></i><span class="counter">17</span>
            <p>Clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-check"></i><span class="counter">45</span>
            <p>Finished Projects</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-coffee"></i><span class="counter">596</span>
            <p>Cup of Coffee</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="c-block"><i class="fa fa-trophy"></i><span class="counter">56</span>
            <p>Awards won</p>
          </div>
        </div>
          
                
<?php  }?>
