<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./template/pc/rainbow/order/order_detail.html";i:1524561559;s:38:"./template/pc/rainbow/user/header.html";i:1524561560;s:38:"./template/pc/rainbow/user/footer.html";i:1524561560;s:40:"./template/pc/rainbow/public/footer.html";i:1524561559;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的账户-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
		<meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
		<meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
		<link rel="shortcut  icon" type="image/x-icon" href="__STATIC__/images/favicon.ico" media="screen"  />
		<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bg-f5">
		<script src="__PUBLIC__/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="__PUBLIC__/static/js/layer/layer.js" type="text/javascript"></script>
<style>
	.list1 li{float:left;}
</style>
<div class="top-hander home-index-top p">
	<div class="w1224 pr">
		<div class="fl">
			<?php if(!(empty($user) || (($user instanceof \think\Collection || $user instanceof \think\Paginator ) && $user->isEmpty()))): ?>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/index'); ?>"><?php echo $user['nickname']; ?></a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/message_notice'); ?>">
					消息<?php if($user_message_count > 0): ?>（<span class="red"> <?php echo $user_message_count; ?> </span>）<?php endif; ?>
				</a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/logout'); ?>">退出</a>
			</div>
			<?php else: ?>
			<div class="fl ler">
		        <a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
		        <span class="spacer"></span>
		        <a href="<?php echo U('Home/user/reg'); ?>">注册</a>
		    </div>
			<?php endif; ?>
			<div class="fl spc"></div>
			<div class="sendaddress pr fl">
				<!-- 收货地址，物流运费 -start-->
				<ul class="list1">
					<li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
					<li class="summary-stock though-line" style="margin-top:2px">
						<div class="dd" style="border-right:0px;">
							<div class="store-selector add_cj_p">
								<div class="text" style="width: 150px;margin-top:2px;"><div></div><b></b></div>
								<div onclick="$(this).parent().removeClass('hover')" class="close"></div>
							</div>
						</div>
					</li>
				</ul>
				<!--<i class="jt-x"></i>-->
				<!-- 收货地址，物流运费 -end-->
				<!--<span>深圳<i class="jt-x"></i></span>-->
			</div>
		</div>
		<div class="top-ri-header fr">
			<ul>
				<li><a href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li>客户服务</li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="jt-x"></i>
						<div class="conta-hv-nav">
							<ul>
								<li>
									<a href="<?php echo U('/Home/Activity/group_list'); ?>">团购</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo">
			<a href="/" class="logo">
                <img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>" style="max-width: 240px;max-height: 70px;">
            </a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"  />
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="shopingcar-index fr">
			<div class="u-g-cart fr fixed" id="hd-my-cart">
				<a href="<?php echo U('Home/Cart/index'); ?>">
					<p class="c-n fl">我的购物车</p>

					<p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity">0</span>)
						<i class="i-c oh"></i>
					</p>
				</a>

				<div class="u-fn-cart u-mn-cart" id="show_minicart">
					<div class="minicartContent" id="minicart">
					</div>
					<!--有商品时-e-->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="__PUBLIC__/js/locationJson.js"></script>
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->

		<div class="home-index-middle">
			<div class="w1224">
				<div class="g-crumbs">
			       	<a href="<?php echo U('User/index'); ?>">我的商城</a><i class="litt-xyb"></i>
			       	<a href="<?php echo U('Order/order_list'); ?>">订单中心</a><i class="litt-xyb"></i>
			       	<span><b>订单：<?php echo $order_info['order_sn']; ?></b></span>
			    </div>
			    <div class="home-main">
			    	<div class="com-topyue">
			    		<div class="wacheng fl">
			    			<p class="ddn1"><span>订单号：</span><span><?php echo $order_info['order_sn']; ?></span></p>
			    			<?php if($order_info['order_button'][pay_btn] == 1): ?>
			    				<h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">等待付款</h3>
			    				<a class="ddn3" style="margin-top:20px;" href="<?php echo U('Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>">付款</a>
			    			<?php else: ?>
			    				<h1 class="ddn2"><?php echo $order_info['order_status_detail']; ?></h1>
                                <?php if($order_info['order_button'][comment_btn] == 1): ?>
                                    <a class="ddn3" href="<?php echo U('Home/Order/comment_list',array('order_id'=>$order_info[order_id],'store_id'=>$order_info[store_id])); ?>">评价</a>
                                <?php endif; endif; if($order_info['order_button'][receive_btn] == 1): ?>
			    				<a class="ddn3" style="margin-top:20px;" data-href="<?php echo U('Home/Order/order_confirm',array('id'=>$order_info['order_id'])); ?>" href="javascript:;" onclick="order_confirm(<?php echo $order_info['order_id']; ?>);">确认收货</a>
			    			<?php endif; if($order_info['order_button'][cancel_btn] == 1): if($order_info['pay_status'] == 1): ?>
                                    <a class="ddn3" style="margin-top:10px;color:#666;" href="javascript:;" onclick="refund_order(<?php echo $order_info['order_id']; ?>)">取消订单</a>
                                <?php else: ?>
                                    <a class="ddn3" style="margin-top:10px;color:#666;" href="javascript:;" onclick="cancel_order(<?php echo $order_info['order_id']; ?>)">取消订单</a>
                                <?php endif; endif; ?>
			    			<p class="ddn4"></p>
			    		</div>
			    		<div class="wacheng2 fr">
			    			<p class="dd2n">订单下单成功，感谢您在商城购物，欢迎您对本次交易及所购商品进行评价。</p>
			    			<div class="liuchaar p">
			    				<ul>
			    					<li>
			    						<div class="aloinfe">
			    							<i class="y-comp"></i>
			    							<div class="ddfon">
			    								<p>提交订单</p>
			    								<p><?php echo date('Y-m-d',$order_info['add_time']); ?></p>
			    								<p><?php echo date('H:i:s',$order_info['add_time']); ?></p>
			    							</div>
			    						</div>
			    					</li>
			    					<li><i class="y-comp91 <?php if($order_info[pay_status] == 0): ?>top322<?php endif; ?>"></i></li>
			    					<li>
			    						<div class="aloinfe fime1">
			    							<i class="y-comp2 <?php if($order_info[pay_status] == 0): ?>lef64<?php endif; ?>"></i>
			    							<div class="ddfon">
			    								<p>付款成功</p>
			    							</div>
			    						</div>
			    					</li>
			    					<li><i class="y-comp91 <?php if($order_info[shipping_status] == 0): ?>top322<?php endif; ?>"></i></li>
			    					<li>
			    						<div class="aloinfe fime2">
			    							<i class="y-comp3 <?php if($order_info[shipping_status] == 0): ?>lef64<?php endif; ?>"></i>
			    							<div class="ddfon">
			    								<p>待发货</p>
			    								<?php if($order_info[pay_status] == 1): ?>
			    									<p><?php echo date('Y-m-d',$order_info['pay_time']); ?></p>
			    									<p><?php echo date('H:i:s',$order_info['pay_time']); ?></p>
			    								<?php endif; ?>
			    							</div>
			    						</div>
			    					</li>
			    					<li><i class="y-comp91 <?php if($order_info[order_status] < 2): ?>top322<?php endif; ?>"></i></li>
			    					<li>
			    						<div class="aloinfe fime3">
			    							<i class="y-comp4 <?php if($order_info[order_status] < 2): ?>lef64<?php endif; ?>"></i>
			    							<div class="ddfon">
			    								<p>等待收货</p>
			    								<?php if($order_info[shipping_status] == 1): ?><p><?php echo date('Y-m-d',$order_info['shipping_time']); ?></p><?php endif; ?>
			    							</div>
			    						</div>
			    					</li>
			    					<li><i class="y-comp91 <?php if($order_info[order_status] != 4): ?>top322<?php endif; ?>"></i></li>
			    					<li>
			    						<div class="aloinfe fime4">
			    							<i class="y-comp5 <?php if($order_info[order_status] != 4): ?>lef64<?php endif; ?>"></i>
			    							<div class="ddfon">
			    								<p>完成</p>
			    								<?php if($order_info[order_status] == 4 or $order_info[order_status] == 2): ?><p><?php echo date('Y-m-d H:i:s',$order_info['confirm_time']); ?></p><?php endif; ?>
			    							</div>
			    						</div>
			    					</li>
			    				</ul>
			    			</div>
			    			<div class="grouupanjf">
			    				<?php if($order_info['pay_status'] == 0): ?>
			    				<a href="javascript:;">完成订单可能获得:<i class="y-comp7"></i>积分&nbsp;&nbsp;<i class="y-comp8"></i>会员成长值&nbsp;&nbsp;<i class="y-comp7"></i>优惠券</a>
			    				<?php else: ?>
			    				<!--<a href="javascript:;">-->
			    					<!--<i class="y-comp7"></i>积分<span class="red">+13</span>-->
			    				<!--</a>-->
			    				<!--<a href="javascript:;">-->
			    					<!--<i class="y-comp8"></i>会员成长值<span class="red">+<?php echo intval($order_info['order_amount']); ?></span>-->
			    				<!--</a>-->
			    				<?php endif; ?>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <?php if($order_info['shipping_status'] == 1): ?>
			    <div class="home-main reseting ma-to-20">
			    	<div class="com-topyue">
			    		<div class="wacheng fl">
			    			<div class="shioeboixe">
				    			<div class="sohstyle p">
					    			<div class="odjpyes">
					    				<img src="__PUBLIC__/images/icon_goods_thumb_empty_300.png"/>
					    			</div>
					    			<div class="osnhptek">
					    				<p><span>送货方式：</span><span><?php echo $order_info['shipping_name']; ?></span></p>
					    				<p><span>快递单号：</span><span><?php echo $order_info['invoice_no']; ?></span></p>
					    			</div>
				    			</div>
			    			</div>
			    		</div>
			    		<div class="wacheng2 fr">
			    			<div class="listchatu">
			    				<ul id="express_info">
			    				</ul>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <script>
		         queryExpress();
		         function queryExpress()
		         {
		           var shipping_code = "<?php echo $order_info['shipping_code']; ?>";
		           var invoice_no = "<?php echo $order_info['invoice_no']; ?>";
		           $.ajax({
		             type : "GET",
		             dataType: "json",
		             url:"/index.php?m=Home&c=Api&a=queryExpress&shipping_code="+shipping_code+"&invoice_no="+invoice_no,//+tab,
		             success: function(data){
		               var html = '';
		               if(data.status == 200){
		                 $.each(data.data, function(i,n){
		                   if(i == 0){
		                     html += "<li class='first'><i class='node-icon' style='margin-left:20px'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
		                   }else{
		                     html += "<li><i class='node-icon' style='margin-left:20px'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
		                   }
		                 });
		               }else{
		                 html += "<li class='first' style='margin-left:20px'><i class='node-icon'></i><span class='txt'>"+data.message+"</span></li>";
		               }
		               $("#express_info").html(html);
		             }
		           });
		         }
		       </script>
			    <?php endif; ?>
			    <div class="home-main ma-to-20">
			    	<div class="rshrinfmas">
			    		<div class="spff">
			    			<h2>收货人信息</h2>
			    			<div class="psbaowq">
				    			<p><span class="fircl">收货人：</span><span class="lascl"><?php echo $order_info['consignee']; ?></span></p>
				    			<p><span class="fircl">地址：</span><span class="lascl"> <?php echo $regionLits[$order_info['province']]; ?>,<?php echo $regionLits[$order_info['city']]; ?>,
                    			<?php echo $regionLits[$order_info['district']]; ?>,<?php echo $order_info['address']; ?></span></p>
			    				<p><span class="fircl">手机号码：</span><span class="lascl"><?php echo $order_info['mobile']; ?></span></p>
			    			</div>
			    		</div>
			    		<div class="spff">
			    			<h2>配送信息</h2>
			    			<div class="psbaowq">
					    		<p><span class="fircl">配送方式：</span><span class="lascl"><?php echo $order_info['shipping_name']; ?></span></p>
					    		<p><span class="fircl">运费：</span><span class="lascl"><em>￥</em><?php echo $order_info['shipping_price']; ?></span></p>
				    		</div>
			    		</div>
			    		<div class="spff">
			    			<h2>付款信息</h2>
			    			<div class="psbaowq">
					    		<p><span class="fircl">付款方式：</span><span class="lascl">
                                   <?php if($order_info[pay_status] == 1 and empty($order_info['pay_name'])): ?>
                                       其他支付
                                       <?php else: ?>
                                       <?php echo $order_info['pay_name']; endif; ?>
                                </span></p>
					    		<p><span class="fircl">付款时间：</span><span class="lascl"><?php if($order_info[pay_status] == 1): ?><?php echo date('Y-m-d H:i:s',$order_info['pay_time']); else: ?>未支付<?php endif; ?></span></p>
					    		<p><span class="fircl">订单总价：</span><span class="lascl"><em>￥</em><?php echo $order_info['total_amount']; ?></span></p>
					    		<p><span class="fircl">应支付金额：</span><span class="lascl"><em>￥</em><?php echo $order_info['order_amount']; ?></span></p>
					    		<p><span class="fircl">运费金额：</span><span class="lascl"><em>￥</em><?php echo $order_info['shipping_price']; ?></span></p>
					    		<p><span class="fircl">优惠券：</span><span class="lascl"><em>￥</em><?php echo $order_info['coupon_price']; ?></span></p>
					    		<p><span class="fircl">余额支付：</span><span class="lascl"><em>￥</em><?php echo $order_info['user_money']; ?></span></p>
					    		<p><span class="fircl">积分抵扣：</span><span class="lascl"><em>￥</em><?php echo $order_info['integral_money']; ?></span></p>
					    		<p><span class="fircl">订单优惠：</span><span class="lascl"><em>￥</em><?php echo $order_info['order_prom_amount']; ?></span></p>
				    		</div>
			    		</div>
			    		<div class="spff mar0">
			    			<h2>发票信息</h2>
			    			<div class="psbaowq">
				    			<p><span class="fircl">发票类型：</span><span class="lascl">普通发票</span></p>
				    			<p><span class="fircl">发票抬头：</span><span class="lascl"><?php echo $order_info['invoice_title']; ?></span></p>
				    		</div>
			    		</div>
			    	</div>
			    </div>
			    <div class="beenovercom">
			    	<div class="shoptist">
			    		<span><?php echo (isset($store['store_name']) && ($store['store_name'] !== '')?$store['store_name']:'TPshop官方自营'); ?><a href="tencent://message/?uin=<?php echo $store['store_qq']; ?>&Site=TPshop商城&Menu=yes" target="_blank"><i class="y-comp9"></i></a></span>
			    	</div>
				    <div class="orderbook-list">
		    			<div class="book-tit">
		    				<ul>
		    					<li class="sx1">商品</li>
		    					<li class="sx2">商品编号</li>
		    					<li class="sx3">最新实价</li>
		    					<li class="sx4">赠送积分</li>
		    					<li class="sx5">商品数量</li>
		    					<li class="sx6">操作</li>
		    				</ul>
		    			</div>
		    		</div>
		    		<div class="order-alone-li">
		    			<?php if(is_array($order_info[order_goods]) || $order_info[order_goods] instanceof \think\Collection || $order_info[order_goods] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_info[order_goods];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?>
		    			<table width="100%" border="" cellspacing="" cellpadding="">
		    				<tr class="conten_or">
		    					<td class="sx1">
		    						<div class="shop-if-dif">
		    							<div class="shop-difimg">
		    								<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$good['goods_id'])); ?>"><img src="<?php echo goods_thum_images($good['goods_id'],78,78); ?>"></a>
		    							</div>
		    							<div class="cebigeze">
		    								<div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$good['goods_id'])); ?>"><?php echo $good['goods_name']; ?></a></div>
		    								<p class="mayxl"><?php echo $good['spec_key_name']; ?></p>
		    							</div>
		    						</div>
		    					</td>
		    					<td class="sx2"><?php echo $good['goods_sn']; ?></td>
		    					<td class="sx3"><span>￥</span><span><?php echo $good['member_goods_price']; ?></span></td>
		    					<td class="sx4">
		    						<span><?php echo $good['give_integral']; ?></span>
		    					</td>
		    					<td class="sx5">
		    						<span><?php echo $good['goods_num']; ?></span>
		    					</td>
		    					<td class="sx6">
		    						<div class="twrbac">
		    							<?php if(($good[is_send] < 2) and ($order_info[order_status] == 2) and (time()-$order_info['add_time'] < 7776000)): ?>
                                            <p>
                                                <a href="<?php echo U('Home/Order/return_goods',array('rec_id'=>$good['rec_id'])); ?>">申请售后</a>
                                            </p>
                                        <?php endif; ?>
		    							<p>
		    								<a class="songobuy" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$good['goods_id'])); ?>">再次购买</a>
		    							</p>
		    						</div>
		    					</td>
		    				</tr>
		    			</table>
		    			<?php endforeach; endif; else: echo "" ;endif; ?>	
		    		</div>
	    		</div>
	    		<div class="numzjsehe">
	    			<p><span class="sp_tutt">商品总额：</span><span class="smprice"><em>￥</em><?php echo $order_info['goods_price']; ?></span></p>
	    			<p><span class="sp_tutt">返&nbsp;&nbsp;&nbsp;&nbsp;现：</span><span class="smprice"><em>￥</em>0.00</span></p>
	    			<p><span class="sp_tutt">运&nbsp;&nbsp;&nbsp;&nbsp;费：</span><span class="smprice"><em>￥</em><?php echo $order_info['shipping_price']; ?></span></p>
	    			<p><span class="sp_tutt">应付总额：</span><span class="smprice red"><em>￥</em><?php echo $order_info['order_amount']; ?></span></p>
	    		</div>
			</div>
		</div>
		<!--footer-s-->
<div class="footer p">
    <div class="mod_service_inner">
        <div class="w1224">
            <ul>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_duo">多</h5>
                        <p>品类齐全，轻松购物</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_kuai">快</h5>
                        <p>多仓直发，极速配送</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_hao">好</h5>
                        <p>正品行货，精致服务</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_sheng">省</h5>
                        <p>天天低价，畅选无忧</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="w1224">
        <div class="footer-ewmcode">
		    <div class="foot-list-fl">
		        <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2 and show_in_nav = 1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2 and show_in_nav = 1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
		            <ul>
		                <li class="foot-th">
		                    <?php echo $v[cat_name]; ?>
		                </li>
		                <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,31104000);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
		                    <li>
		                        <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>
		                    </li>
		                <?php endforeach; ?>
		            </ul>
		        <?php endforeach; ?>
		    </div>
			<div class="right-contact-us">
				<h3 class="title">联系我们</h3>
				<span class="phone">400-8888-988</span>
				<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
				<div class="qr-code-list clearfix">
					<a class="qr-code" href="javascript:;"><img src="__STATIC__/images/qrcode.png" alt="" /></a>
					<a class="qr-code qr-code-tpshop" href="javascript:;"><img src="__STATIC__/images/qrcode.png" alt="" /></a>
				</div>
			</div>
		    <!--<div class="QRcode-fr">
		        <ul>
		            <li class="foot-th">客户端</li>
		            <li><img src="__STATIC__/images/qrcode.png"/></li>
		        </ul>
		        <ul>
		            <li class="foot-th">微信</li>
		            <li><img src="__STATIC__/images/qrcode.png"/></li>
		        </ul>
		    </div>-->
		</div>
		<div class="mod_copyright p">
		    <div class="grid-top">
		        <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
		            <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
		            <span>|</span>
		        <?php endforeach; ?>
		        <a href="javascript:void (0);">客服热线:<?php echo $tpshop_config['shop_info_phone']; ?></a>
		    </div>
		    <p>Copyright © 2016-2025 TPshop商城 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>
		
		    <p class="mod_copyright_auth">
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
		        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
		    </p>
		</div>
    </div>
</div>
<!--footer-e-->
<!--侧边栏-s-->
<div class="slidebar_alo">
	<ul>
		<li class="re_cuso"><a target="_blank" href="" >客服服务</a></li>
		<li class="re_wechat">
			<a target="_blank" href="" >微信关注</a>
			<div class="rtipscont" style=""> 
				<span class="arrowr-bg"></span> 
				<span class="arrowr"></span> 
				<img src="__STATIC__/images/qrcode.png" /> 
				<p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
			</div>
		</li>
		<li class="re_phone">
			<a target="_blank" href="" >手机商城</a>
			<div class="rtipscont rstoretips" style=""> 
				<span class="arrowr-bg"></span> 
				<span class="arrowr"></span> 
				<img src="__STATIC__/images/qrcode.png" /> 
				<p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
			</div>
		</li>
		<li class="re_top"><a target="_blank" href="javascript:void(0);" >回到顶部</a></li>
	</ul>
</div>
<!--侧边栏-e-->
<script>
    //用户中心统一确认提示框
    function verConfirm(msg , callback){
        layer.confirm(msg, {
                btn: ['确定','取消'] //按钮
            }, function(){
                location.href=callback;
            }
        );
    }
    //显示密码安全等级
    function securityLevel(sValue) {
        var modes = 0;
        //正则表达式验证符合要求的
        if (sValue.length < 6 ) return modes;
        if (/\d/.test(sValue)) modes++; //数字
        if (/[a-z]/.test(sValue)) modes++; //小写
        if (/[A-Z]/.test(sValue)) modes++; //大写
        if (/\W/.test(sValue)) modes++; //特殊字符
        $('.lowzg').eq(modes-1).addClass('red').siblings('.lowzg').removeClass('red');
    };
//侧边栏 (单首页)
$(function(){
	//鼠标滑过二维码显示隐藏
	$('.slidebar_alo li').hover(function(){
		$(this).find('.rtipscont').animate({
			opacity:"1",
			left:"-182px"
		})
	},function(){
		$(this).find('.rtipscont').animate({
			opacity:"0",
			left:"0px"
		})
	})
	$(".slidebar_alo .re_top").click(function () {
		//回到顶部
	    var speed=300;//滑动的速度
	    $('body,html').animate({ scrollTop: 0 }, speed);
	    return false;
	});
	//回到顶部显示隐藏
	$(window).scroll(function ()
	{
		var st = $(this).scrollTop();
		if(st == 0){
			$('.re_top').hide(300)
		}else{
			$('.re_top').show(300)
		}
	});
});
</script>
		<script>
        /**
         * 取消订单
         * */
        function cancel_order(orderId){
            layer.confirm('确定取消订单？', {
                        btn: ['是','否']
                    }, function(){
                        $.ajax({
                            url:"<?php echo U('Order/cancel_order'); ?>",
                            type:'POST',
                            dataType:'JSON',
                            data:{id:orderId},
                            success:function(data){
                                if(data.status == 1){
                                    layer.alert(data.msg, {icon: 1});
                                    location.href ='/index.php?m=home&c=Order&a=order_list&type=<?php echo \think\Request::instance()->param('type'); ?>&p=<?php echo \think\Request::instance()->param('p'); ?>';
                                }else{
                                    layer.alert(data.msg, {icon: 2});
                                }
                            },
                            error : function() {
                                layer.alert('网络失败，请刷新页面后重试', {icon: 2});
                            }
                        })
                    }, function(tmp){
                        layer.close(tmp);
                    }
            );
        }

			function order_confirm(orderId)
			{
				layer.confirm('你确定收到货了吗?', {
							btn: ['是','否']
						}, function(){
                            $.ajax({
                                url:"<?php echo U('Order/order_confirm'); ?>",
                                type:'POST',
                                dataType:'JSON',
                                data:{order_id:orderId},
                                success:function(data){
                                    if(data.status == 1){
                                        layer.alert(data.msg, {icon: 1});
                                        location.href ='/index.php?m=home&c=Order&a=order_detail&id='+orderId;
                                    }else{
                                        layer.alert(data.msg, {icon: 2});
                                        location.href ='/index.php?m=home&c=Order&a=order_list&type=<?php echo \think\Request::instance()->param('type'); ?>&p=<?php echo \think\Request::instance()->param('p'); ?>';
                                    }
                                },
                                error : function() {
                                    layer.alert('网络失败，请刷新页面后重试', {icon: 2});
                                }
                            })
						}, function(tmp){
							layer.close(tmp);
						});
			}
            function refund_order(order_id) {
                layer.open({
                    type: 2,
                    title: '<b>订单取消申请</b>',
                    skin: 'layui-layer-rim',
                    shadeClose: true,
                    shade: 0.5,
                    area: ['600px', '500px'],
                    content: "<?php echo U('Home/Order/refund_order'); ?>?order_id=" + order_id,
                });
            }
		</script>
	</body>
</html>