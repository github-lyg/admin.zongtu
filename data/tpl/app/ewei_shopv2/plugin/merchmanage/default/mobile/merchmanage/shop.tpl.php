<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('merchmanage/common', TEMPLATE_INCLUDEPATH)) : (include template('merchmanage/common', TEMPLATE_INCLUDEPATH));?>

<div class='fui-page fui-page-current'>
    <div class="fui-header fui-header-success">
        <div class="fui-header-left">
            <a class="back"></a>
        </div>
        <div class="title">店铺设置</div>
        <div class="fui-header-right"></div>
    </div>
    <div class='fui-content navbar'>

        <div class="fui-list-group">
            <div class="fui-list">
                <input type="file"  name="file-shoplogo" id="file-shoplogo" />
                <input type="hidden" id="shoplogo" value="<?php  echo $shopset['logo'];?>" />
                <div class="fui-list-inner">
                    <div class="title">商户logo</div>
                </div>
                <div class="fui-list-media">
                    <img src="<?php  echo tomedia($shopset['logo'])?>" class="round" id="showlogo" />
                </div>
            </div>
        </div>

        <div class="fui-cell-group">
            <div class="fui-cell">
                <div class="fui-cell-label">商户名称</div>
                <div class="fui-cell-info">
                    <input type="text" placeholder="请输入商户名称" class="fui-input" value="<?php  echo $shopset['merchname'];?>" id="shopname" />
                </div>
            </div>
            <div class="fui-cell fui-cell-textarea">
                <div class="fui-cell-label ">商户简介</div>
                <div class="fui-cell-info">
                    <textarea rows="3" placeholder="请输入商户简介" id="shopdesc"><?php  echo $shopset['desc'];?></textarea>
                </div>
            </div>
            <div class="fui-cell">
                <div class="fui-cell-label">联系人</div>
                <div class="fui-cell-info">
                    <input type="text" placeholder="请输入联系人" class="fui-input" value="<?php  echo $shopset['realname'];?>" id="realname" />
                </div>
            </div>
            <div class="fui-cell">
                <div class="fui-cell-label">联系电话</div>
                <div class="fui-cell-info">
                    <input type="text" placeholder="请输入联系电话" class="fui-input" value="<?php  echo $shopset['mobile'];?>" id="mobile" />
                </div>
            </div>
        </div>


       
        <div class="btn btn-success block" id="btn-submit">保存设置</div>
        <div class="btn btn-danger block" id="btn-logout">退出登录</div>
    </div>

    <script language="javascript">
        require(['../addons/ewei_shopv2/plugin/merchmanage/static/js/base.js'],function(modal){
            modal.initShop();
        });
    </script>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('merchmanage/_menu', TEMPLATE_INCLUDEPATH)) : (include template('merchmanage/_menu', TEMPLATE_INCLUDEPATH));?>