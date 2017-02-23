<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');

if ( !in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	return false;
}
global $woocommerce;
?>
<div class="top-form top-form-minicart  minicart-product-style ">
	<div class="top-minicart ">
		<!-- <a class="cart-contents " href="<?php // echo $woocommerce->cart->get_cart_url(); ?>" title="<?php // esc_html_e('View your shopping cart', 'shoppystore'); ?>"><?php // echo '<span class="minicart-number">'.$woocommerce->cart->cart_contents_count.'</span> '; esc_html_e(' items', 'shoppystore');?> - <?php // echo $woocommerce->cart->get_cart_total(); ?></a> -->
    <div class="new-ref top-cart ">
    	<div class="cart hidden-xs">
		<a href="http://myspacestyle.ru/cart/" title="Cart">
              <div class="test1">
             	 <div class="mini-b"><div class="cart-c">  <?php echo WC()->cart->get_cart_contents_count(); ?> <?php echo WC()->cart->get_cart_subtotal(); ?></div></div>
             	 <div class="sub"><?php echo WC()->cart->get_cart_subtotal(); ?></div>
              </div>
		</div>
    	</a>
    </div>

    <script>
    (function ($) {
    $.fn.ellipsis1 = function () {
        return this.each(function (index) {
                var el = $(this);
                var text = el.html();
                if (text.length > 30)
                	text = text.substr(0, 30) + '...';
                el.html(text);

            }
        );
    };
	})(jQuery);
    $(function(){
    	//jQuery('#div-test .product-name a').ellipsis1();

      <?php if(isset($_GET['showcart']) && $_GET['showcart'] == 'true') : ?>
      $( "#div-test" ).show(); // Показываем блок
      <?php endif; ?>
    $('.new-ref').mouseenter(function(){ // Навели на ссылку?
      $( "#div-test" ).show(); // Показываем блок
    });

    $(".new-ref").mouseleave(function(event ){ // курсор ушел с ссылки?
        event = event || window.event   // Не знаю что тут происходит
        var relTarg = event.relatedTarget || event.toElement   // Определяем куда курсор ушел
        if (relTarg.id != 'div-test')
        {
            if ($("input[id='login']").val().length != 0) return; // есть текст в input? -> return
            $( "#div-test" ).hide();  // Скрываем блок
        }
     });

    $("#div-test").mouseleave(function(event ){  // курсор ушел с блока?
        event = event || window.event  // Не знаю что тут происходит
        var relTarg = event.relatedTarget || event.toElement // Определяем куда курсор ушел
        if (relTarg.class != 'new-ref')
          {
             if ($("input[id='login']").val().length != 0) return; // есть текст в input? -> return
             $( "#div-test" ).hide();  // Скрываем блок
          }
    });

    $(document).click(function(e){ // Функция скрывает элемент если произошёл клик в не поля #div-test
            if ($(e.target).closest('#div-test').length) return;  // Не знаю что тут происходит
            $('#div-test').hide(); // Скрываем блок
            e.stopPropagation(); // Не знаю что тут происходит
        });

	$(".minicart-item input").on('change keydown paste input', function(){
      var id = $(this).closest(".minicart-item").attr("data-item-id");
	  var qty = $(this).val();
	  quantityMax(id, qty);

	});

	// fix minicart lag
	if ( $( ".navbar2" ).hasClass( "fix2" ) ) {
		$( "#div-test" ).addClass( "fix3" );
	}

	// increase or decrease quanity to minicart
	  $(".detail-quantity a").click(function() {
		var id = $(this).closest(".minicart-item").attr("data-item-id");
		var qty = $(this).parent().find("input.qty").val();
		var rem = $(this).closest(".minicart-item").find("a.btn-remove").attr("data-remove-item");

      if ($(this).hasClass("quan-inc")) {
			qty++;

			quantityMax(id, qty);
		} else

      if($(this).hasClass("quan-dec")){
  		if ( 1 >= qty ) return ;
			qty--;
			quantityMin(id, qty);
		}

	});

	function quantityMax(id, qty) {
		//$('.woocommerce').css({opacity: .24});
		$.ajax({
        type: "POST",
        url: '/wp-admin/admin-ajax.php',
        data: {action : 'remove_item_from_cart','product_id' : id, "qty": qty},
        dataType: 'json',
        beforeSend: function(){
        	//$('.minicart-ajax').after('<div style="position: absolute; top: 8px; width: 20px; height: 20px;" class="loading"><img src="/wp-content/uploads/spinner.gif" /></div>');
   		},
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
          refreshCart(); refreshCart();
        }
	    });
	}
	function quantityMin(id, qty) {
		//$('.woocommerce').css({opacity: .24});
		$.ajax({
        type: "POST",
        url: '/wp-admin/admin-ajax.php',
        data: {action : 'remove_item_from_cart','product_id' : id, "qty": qty},
        dataType: 'json',
        beforeSend: function(){
        	//$('.minicart-ajax').after('<div style="position: absolute; top: 8px; width: 20px; height: 20px;" class="loading"><img src="/wp-content/uploads/spinner.gif" /></div>');
   		},
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
          refreshCart(); //refreshCart();
        }
    });  		
  		//$(string1).parent().find('.product-subtotal').html($('#div-test .price-total .price').html());
	}
	// remove from minicart
	$(".detail-remove a").click(function() {
		var it = $(this).closest(".minicart-item");
		var rem = $(this).closest(".minicart-item").find("a.btn-remove").attr("data-remove-item");		
		$.get(rem);
		$(it).slideToggle("fast");
		setTimeout(refreshCart, 100);
		$("#my-cart").load("/cart/ #my-cart > div");
	});
	// clear minicart
	$(".deletea a").click(function() {
		$.get("/?empty-cart");
		setTimeout(refreshCart, 100);
		$("#my-cart").load("/cart/ #my-cart > div");
	});
	function refreshCart() {
		$(".minicart-ajax").load("/wp-content/themes/the_theme/woocommerce/minicart-ajax.php?showcart=true");
	}});
    </script>
    <style>
    #div-test{
	display:none;
	width:420px;
	border:1px solid #dcdcdc;
	padding:10px;
	position: absolute;
	top: 30px;
	right: -10px;
	background: #fff;
	z-index: 10;
	overflow-y: scroll;
	max-height: 540px;
	}

	#div-test.fix3{
	position: fixed;
	top: 42px;
	right: 10px;
	z-index: 999999999;
	}
    </style>

	</div>
	<?php if( count($woocommerce->cart->cart_contents) > 0 ){?>
	<div id="div-test" class="wrapp-minicart">
		<div class="minicart-padding">
			<ul class="minicart-content">
			<?php foreach($woocommerce->cart->cart_contents as $cart_item_key => $cart_item): ?>
				<li class="minicart-item" data-item-id="<?php echo esc_attr( $cart_item['product_id'] ); ?>">
					<a href="<?php echo get_permalink($cart_item['product_id']); ?>" class="product-image">
						<?php $thumbnail_id = ($cart_item['variation_id']) ? $cart_item['variation_id'] : $cart_item['product_id']; ?>
						<?php echo get_the_post_thumbnail($thumbnail_id, 'shop_thumbnail'); ?>
					</a>
	<div class="detail-item">
    <div class="product-details">
        <a class="btn-edit" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php esc_html_e('Посмотреть корзину', 'shoppystore'); ?>"><span></span></a>
        <p class="product-name">
							<a href="<?php echo get_permalink($cart_item['product_id']); ?>"><?php echo esc_html( $cart_item['data']->post->post_title ); ?></a>
        </p>
	</div>

	</div>
    <div class="detail-quantity cr-quantity" data-step="1">
    	<a href="javascript:void(0)" class="quan-inc" style="height: 27px; padding-top: 5.5px; float:left; color: #ce5e70; font-weight: bold; margin-right: 5px;">+</a>
        <input type="text" name="quantity" value="<?php echo esc_html( $cart_item['quantity'] ); ?>" min="1" title="Колличество" class="input-text qty text qit" size="4" style="width: 25px; border: 1px solid #ce5e70!important; box-shadow: 0 0 5px rgba(0,0,0,0.5);">
        <a href="javascript:void(0)" class="quan-dec" style="height: 27px; margin-top: -3px; float:left; color: #ce5e70; font-weight: bold;">_</a>
    </div>
	<div class="detail-price">
		 <span class="price"><?php echo $woocommerce->cart->get_product_subtotal($cart_item['data'], 1); ?></span>
    </div>
    <div class="detail-remove">
    	<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="javascript:void(0)" data-remove-item="%s" class="btn-remove red-button" title="%s"><span class="glyphicon glyphicon-remove"></span></a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __( 'Удалить', 'shoppystore' ) ), $cart_item_key ); ?>
    </div>

				</li>
			<?php
			endforeach;
			?>
			</ul>
			<div class="cart-checkout">
				<div class="minicart-bottom">
					<div class="minicart-left-column">
						<div class="checkout-link"><a class="cart-in-button" href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>" title="Check Out"><?php esc_html_e('Заказать', 'shoppystore'); ?></a></div>
        				<div class="cart-link "><a class="cart-in-button" href="http://myspacestyle.ru/cart/"><?php _e( 'Перейти в корзину', 'woocommerce' ); ?></a></div>
        				<div class="cart-link deletea"><a class="cart-in-button" href="javascript:void(0)"><?php _e( 'Очистить', 'woocommerce' ); ?></a></div>
					</div>
					<div class="minicart-right-column">
					    <div class="price-total">
						   <span class="label-price-total"><?php esc_html_e('Итого:', 'shoppystore'); ?></span>
						   <span class="price-total-w"><span class="price"><?php echo WC()->cart->get_cart_subtotal(); ?></span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }else{ ?>
  <div id="div-test" class=""><?php esc_html_e('Ваша корзина пуста'); ?></div>
  <?php } ?>
</div>
