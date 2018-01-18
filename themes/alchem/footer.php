 <!--Footer-->
 <?php 
 $display_footer_widgets    = alchem_option('display_footer_widgets'); 
 $footer_columns            = alchem_option('footer_columns'); 
// $copyright_text            = alchem_option('copyright_text',''); 
 $tooltip_position          = alchem_option('footer_social_tooltip_position','top'); 
 $footer_special_effects    = alchem_option('footer_special_effects');
 $footer_class =  $footer_special_effects == 'footer_sticky'? 'fxd-footer':'';
 ?>
        <footer class="<?php echo $footer_class;?>">
        <?php if( $display_footer_widgets == 'yes' ):?>
            <div class="footer-widget-area">
                <div class="container alchem_display_footer_widgets">
                    <div class="row">
                    <?php 

					for( $i=1;$i<=$footer_columns; $i++ ){
					?>
                    <div class="col-md-<?php echo 12/$footer_columns; ?>">
                    <?php
							if(is_active_sidebar("footer_widget_".$i)){
	                           dynamic_sidebar("footer_widget_".$i);
                               }
							?>
                    </div>
                    
                    <?php }?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="footer-info-area">
                <div class="container text-center alchem_footer_social_icon_1"> 
                 <?php echo alchem_get_social('footer','footer-sns', $tooltip_position);?>
                    <div class="clearfix"></div>
                    <?php 
					 wp_nav_menu(array('theme_location'=>'footer_menu','depth'=>1,'fallback_cb' =>false,'menu_class'=>'footer-links','link_before' => '', 'link_after' => '','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));
					?>
                    
                    <div class="site-info">
                    <?php printf(__('©2015-2017 北京喜农云科网络技术有限公司  京ICP备1602230号-1<br/> 客服服务热线：010-58433029','alchem'),esc_url('http://wordpress.org/'),esc_url('http://www.mageewp.com/'));?>
                    </div>
                    
                </div>
            </div>          
        </footer>
    </div>  
    <?php wp_footer(); ?>
<div id="full" style="width:88px; height:88px; position:fixed; right:0px; 
    bottom:0px; margin-left:0px; margin-bottom:0px; z-index:100; text-align:center; cursor:pointer;">
  <a>
	<img src="http://www.xinongtech.com/xn2hp7fxw48/wp-content/uploads/2017/11/top1.png"/>	
  </a>
</div>
<script type="text/javascript">
  var isie6 = window.XMLHttpRequest ? false: true;
  function newtoponload() {
    var c = document.getElementById("full");
    function b() {
      var a = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
      if (a > 0) {
        if (isie6) {
          c.style.display = "none";
          clearTimeout(window.show);
          window.show = setTimeout(function() {
            var d = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            if (d > 0) {
              c.style.display = "block";
              c.style.top = (400 + d) + "px"
            }
          },
          300)
        } else {
          c.style.display = "block"
        }
      } else {
        c.style.display = "none"
      }
    }
    if (isie6) {
      c.style.position = "absolute"
    }
    window.onscroll = b;
    b()
  }
  if (window.attachEvent) {
    window.attachEvent("onload", newtoponload)
  } else {
    window.addEventListener("load", newtoponload, false)
  }
  document.getElementById("full").onclick = function() {
    window.scrollTo(0, 0)
  };
</script>
</body>
</html>