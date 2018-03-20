<?php
/**
 * The template for search form
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Numero
 */
?>

<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
             <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
      
              <span class="input-group-btn">
              <button  type="submit"><i class="fa  fa-search"></i></button>
              </span></div>
          </form>