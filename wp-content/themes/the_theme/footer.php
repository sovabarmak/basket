<?php wp_footer(); ?>
<script type='text/javascript' src='http://myspacestyle.ru/wp-content/themes/the_theme/js/qty-add-to-cart.js?ver=1.0.1'></script>
<div class="container-fluid footer-n">
  <div class="container">
  <div class="row" >


   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
     <div class="news-title">Новости</div>
	 </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


      <?php
 $pc = new WP_Query('cat=8&orderby=date&posts_per_page=3'); ?>

   <?php while ($pc->have_posts()) : $pc->the_post(); ?>
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
       <div class="row">
       <div class="col-md-10 col-xs-6 news_home">
         <div class="head-n">
          <h2><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
           <?php the_title(); ?>
           </a>
          </h2>
         </div>
         </div>
         <div class="col-md-2 col-xs-6">

           <div class="date-n">
             <div class="day"><?php the_time('d'); ?></div>
            <div class="month"><?php the_time('M'); ?></div>
           </div>

           </div>
         </div>
       <!--noindex-->
       <div class="text-n"><?php echo mb_substr(get_the_excerpt(), 0, 180); echo '...'; ?></div>
       <!--/noindex-->

      </div>
     <?php endwhile;  ?>




	 </div>




  </div>
    
	</div>

	<!-- <div class="container footer-info">
     
  </div> -->

</div>
    <div class="container bottom">
     
<div class="row">

  <div class="col-lg-3 co-md-3 col-sm-2 col-xs-3">

  <img class="logo-b" src="http://myspacestyle.ru/wp-content/themes/the_theme/logo-b.png">
  </div>

  <div class="col-lg-8 co-md-7 col-sm-9 col-xs-7">




    <?php
                 $args = array(
                 'theme_location' => 'top-bar3',
                 'depth' => 0,
                 'container' => false,
                 'menu_class' => 'nav',
                 'walker' => new BootstrapNavMenuWalker()
                 );
                 wp_nav_menu($args);
                ?>


  </div>

  <div class="col-lg-1 co-md-2 col-sm-1 col-xs-2">

  <img class="logo-b2" src="http://myspacestyle.ru/wp-content/themes/the_theme/logo-b2.png">
  </div>

				<!--noindex-->
         <div class="social-linkss">
           <a target="_blank" href="https://vk.com/myspacestyle" rel="nofollow"><img src="http://myspacestyle.ru/wp-content/uploads/2016/08/vk.png"></a>
   				 <a target="_blank" href="https://www.instagram.com/spacestyle.ru/" rel="nofollow"><img src="http://myspacestyle.ru/wp-content/uploads/2016/08/insta.png"></a>
   			 <a target="_blank" href="https://twitter.com/Space_Style_ru" rel="nofollow"><img src="http://myspacestyle.ru/wp-content/uploads/2016/08/rrrr.png"></a>
    <a target="_blank" href="https://www.facebook.com/groups/323128344735381/" rel="nofollow"><img src="http://myspacestyle.ru/wp-content/uploads/2016/08/ffff.png"></a>
					<div>
  		
      </div>
		
      </div>
  
  
			<!--/noindex-->
<style>


  </style>

  
      </div>
      <div class="row">
        <div class="col-lg-3 co-md-3 col-sm-2 col-xs-12"></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 footer-inf">
          <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12">
              <p><b>«Спейс Стайл»</b> - <?php if($_SERVER['REQUEST_URI'] == '/') { ?>интернет-магазин косметики<?php } else { ?> <a href="/">интернет-магазин косметики</a> <?php } ?> в Москве</p>
              <p><b>Наш адрес:</b>  Москва, (м. Дмитровская) ул. Новодмитровская, д. 5а,стр. 3, подъезд №6</p>
        
        </p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <p><b>Тел.:</b> 8-495-748-87-53</p>
              <p><b>e-mail:</b> <a href="mailto:inform@myspacestyle.ru">inform@myspacestyle.ru</a></p>
            </div>
          </div>
       
      </div>
      <div class="col-lg-2 co-md-2 col-sm-1 col-xs-2"></div>
    </div>
    <!-- <div class="line-f"></div> -->
  </div>
<?php wp_footer(); ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88740856-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41503744 = new Ya.Metrika({ id:41503744, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41503744" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="http://myspacestyle.ru/wp-content/themes/the_theme/js/jquery.matchHeight-min.js"></script>
<script>
    // increase or decrease quanity to minicart
    $(".product-quantity a").on('click', function() {
        var id = $(this).parent().parent().attr("data-item-id");
        var qty = $(this).parent().find("input.qty").val();
        var rem = $(this).closest(".minicart-item").find("a.btn-remove").attr("data-remove-item");

        if ($(this).text() == '+') {
            qty++;
            $('.woocommerce').css({opacity: .24});
            quantityMax(id, qty);
        } else

        if($(this).text() == '-'){
            if ( 1 >= qty ) return ;
            qty--;
            $('.woocommerce').css({opacity: .24});
            quantityMin(id, qty);
        }
        //$(this).parent(".detail-quantity").find("input.qty").val(qty);

    });

    function quantityMax(id, qty) {
        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {action : 'remove_item_from_cart','product_id' : id, "qty": qty},
            dataType: 'json',
            success: function (res) {
                var string1 = ".product-quantity[data-item-id*='"+ id +"']";
                $price = $(string1);
                var newHtml = '<span class="woocommerce-Price-amount amount" >' + res['productSubtotal'].toFixed(2) + '&nbsp;<input type="hidden" id="coast" value="'+ res['productSubtotal'].toFixed(2) +'"><span class="woocommerce-Price-currencySymbol"><span class=rur >&#x440;<span>&#x443;&#x431;.</span></span></span></span>';
                $price.parent().find('.product-subtotal').html(newHtml);
                $price.find('.input-text.qty').val(res['quantity']);
                $('.offset-lg-3.total-price').html(res['total']);
            },
            error: function(res) {
                console.log('Some error in ajax');
            },
            complete: function() {
                $('.woocommerce').css({opacity: 1});
            }
        });
        refreshCart(); refreshCart();

        /*var string1 = ".product-quantity[data-item-id*='"+ id +"']";
         $(string1).parent().find('.product-subtotal').html($('#div-test .price-total .price').html());*/
    }
    function quantityMin(id, qty) {
        //$.get("/?post_type=product&add-to-cart="+id+"&quantity="+qty);
        $.ajax({
            type: "POST",
            url: '/wp-admin/admin-ajax.php',
            data: {action : 'remove_item_from_cart','product_id' : id, "qty": qty},
            dataType: 'json',
            success: function (res) {
                var string1 = ".product-quantity[data-item-id*='"+ id +"']";
                $price = $(string1);
                var newHtml = '<span class="woocommerce-Price-amount amount" >' + res['productSubtotal'].toFixed(2) + '&nbsp;<input type="hidden" id="coast" value="'+ res['productSubtotal'].toFixed(2) +'"><span class="woocommerce-Price-currencySymbol"><span class=rur >&#x440;<span>&#x443;&#x431;.</span></span></span></span>';
                $price.parent().find('.product-subtotal').html(newHtml);
                $price.find('.input-text.qty').val(res['quantity']);
                $('.offset-lg-3.total-price').html(res['total']);
            },
            error: function(res) {
                console.log('Some error in ajax');
            },
            complete: function() {
                $('.woocommerce').css({opacity: 1});
            }
        });
        refreshCart(); refreshCart();
        //$(string1).parent().find('.product-subtotal').html($('#div-test .price-total .price').html());
    }


    $(document).ready(function(){

        $('.new_checkout .cr-inc').click(function () {
            setTimeout(window.location.reload(), 1);
        });
        $('.product-category').hover(function () {
            $(this).children().children('.cat-img-bord').children('.second_block').toggle();
        });
        $('.separates span').each(function (e) {
            var percent = $(this).data('percent') * 10;
            $(this).css('left', percent+'%')
        });

        jQuery('ul.products').each(function() {
            jQuery(this).children('li').matchHeight({

            });
        });

        $('body').on('click', 'input[name="shipping_method[0]"]',function   () {
            setTimeout(function nona () {
                var chi = $('.left_checkout').children().children('span');
                console.log(chi);
                $('.checkut_price2').children().children().children().html(chi);
            },3000);

        });
        $('.ajax_add_to_cart').click(function () {
         //   $(this).parent().submit();
        })
//        jQuery('.upsells.products .owl-controls').prependTo($('.upsells.products .title-related')).find('.owl-nav').css({'position': 'relative', 'top': '33px'});
//        jQuery('.related.products .owl-controls').prependTo($('.related.products .title-related')).find('.owl-nav').css({'position': 'relative', 'top': '33px'});
        jQuery('.cart-collaterals .owl-controls').prependTo($('.cart-collaterals .title-related')).find('.owl-nav').css({'position': 'relative', 'top': '33px'});

        $('body').on('mouseleave', '#div-test', function(){
            jQuery('#div-test').hide();
        });

        var arrEl = $('.carousel-block h3 a, .carousel-item a h3');
        resize_to_fit(arrEl);
        arrEl = $('ul.products h3');
        resize_to_fit(arrEl);
        jQuery('ul.products h3').matchHeight({ });
        jQuery('.carousel-items h3, .carousel-item h3').matchHeight({ });
        $('#menu-side .dropdown-menu li a').on('click', function(){
            event.stopImmediatePropagation();
            event.preventDefault();
            location=$(this).attr('href');
        });
        $('.button.add_to_cart_button').hover(
            function(){
                $(this).html('Добавить в корзину');
            },
            function(){
                $(this).html('<a href="javascript:void(0)" style="color:#fff">КУПИТЬ</a>');
            });
        if ($('[id^="product-"]').length) {
            $('.product_title.entry-title').parent().insertBefore($('[id^="product-"] .images')).css({'position': 'static'});
            $('[id^="product-"]').css({'paddingTop': '0px'});
        }
    });
    function resize_to_fit(arr){
        arr.each(function() {
            changeSize($(this));
        });
    }
    function changeSize(elem){
        var jEl = elem;
        var fontsize = jEl.css('font-size');
        if (jEl.height() >= 60){
            jEl.css('fontSize', parseFloat(fontsize) - 2);
            changeSize(elem);
        }
    }

</script>

</body>
</html>
