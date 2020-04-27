<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<script>document.title = "<?php  echo $page_title;?>";</script>
<link rel="stylesheet" type="text/css" href="../addons/ewei_shopv2/plugin/dividend/template/mobile/default/static/css/common.css">
<div class="fui-page fui-page-current">
    <div class="fui-header">
        <div class="fui-header-left">
            <a class="back"></a>
        </div>
        <div class="title"><?php  echo $this->set['texts']['dividend']?>订单</div>
        <div class="fui-header-right"></div>
    </div>
    <div class="fui-content footbar" >
        <div class='moneytop'><?php  echo $this->set['texts']['dividend_total']?>：+<?php  echo $member['dividend_total'];?><?php  echo $this->set['texts']['yuan']?></div>
        <div class='flex topnav' id="tab">
            <a class='active' data-tab='status'>所有</a>
            <a href="javascript:void(0)" data-tab='status0'>待付款</a>
            <a href="javascript:void(0)" data-tab='status1'>已付款</a>
            <a href="javascript:void(0)" data-tab='status3'>已完成</a>
        </div>

        <div class='content-empty' style='display:none;'>
            <i class='icon icon-list'></i><br/>暂时没有任何订单
        </div>
        <div id="container"></div>
    </div>

    <!-- 订单 -->
    <script id='tpl_dividend_order_list' type='text/html'>
        <%each list as order %>
        <div class='orderitem'>
            <!-- 用户 -->
            <div class='umsg'>
                <img src="<% order.buyer.avatar %>"/>
                <span><% order.buyer.nickname %></span>
                <div><% order.statusstr %></div>
            </div>
            <!-- 商品 -->
            <%each order.order_goods as goods%>
            <div class='goodsitem flex'>
                <img src="<% goods.thumb %>"/>
                <div class='goodsdetail'>
                    <div class='goodstit'><% goods.title %></div>
                    <div class='goodsinfo'><% goods.optionname %></div>
                </div>
                <!--<div class='price'>-->
                <!--<div>预计</div>-->
                <!--<div class='pricenum'>+994657,20</div>-->
                <!--</div>-->
            </div>
            <%/each%>

            <!-- 订单信息 -->
            <div class='ordermsg'>
                <div>订单编号：<% order.ordersn %></div>
                <div>下单时间：<% order.createtime %></div>
            </div>
            <div class='moneytotal'>预计<?php  echo $this->set['texts']['dividend']?>：<span>+<% order.dividend_price %></span></div>
        </div>
        <%/each%>
    </script>

    <div class="share-footbar">
        <a  href="<?php  echo mobileUrl('dividend')?>"  class='item external'>
            <i class="icon icon-dividendhome"></i>
            <span class='text'><?php  echo $this->set['texts']['dividend']?>中心</span>
        </a>
        <a href="<?php  echo mobileUrl('dividend/withdraw')?>" class='item'>
            <i class="icon icon-fenxiaoyongjin1"></i>
            <span class='text'><?php  echo $this->set['texts']['dividend']?>佣金</span>
        </a>
        <a href="#" class='item active'>
            <i class="icon icon-fenxiaodingdan1"></i>
            <span class='text'><?php  echo $this->set['texts']['dividend']?>订单</span>
        </a>
        <a href="<?php  echo mobileUrl('dividend/down')?>" class='item'>
            <i class="icon icon-wodetuandui2"></i>
            <span class='text'>我的团队</span>
        </a>
    </div>
</div>
<script language='javascript'>
    require(['../addons/ewei_shopv2/plugin/dividend/static/js/order.js'], function (modal) {
        modal.init({fromDetail:false});
    });
    $(function () {
        setTimeout(function () {
            var width = window.screen.width *  window.devicePixelRatio;
            var height = window.screen.height *  window.devicePixelRatio;
            var h = document.body.offsetHeight *  window.devicePixelRatio;
            //  微信版本6.6.7
            if(h == 1923){
                $(".share-footbar").removeClass('iphonex');
                $(".fui-content").removeClass('iphonex');
                return;
            }

            if(height==2436 && width==1125){
                $(".share-footbar").addClass('iphonex')
                $(".fui-content").addClass('iphonex')
            }
        },600)
    })
</script>