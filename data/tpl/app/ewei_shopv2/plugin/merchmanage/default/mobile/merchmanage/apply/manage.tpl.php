<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('commission/common', TEMPLATE_INCLUDEPATH)) : (include template('commission/common', TEMPLATE_INCLUDEPATH));?>
<div class="fui-page fui-page-current page-commission-log">
    <div class="fui-header">
        <div class="fui-header-left">
            <a class="back"></a>
        </div>
        <div class="title">结算记录</div>
        <div class="fui-header-right">
            <a href="<?php  echo mobileUrl('merchmanage/apply')?>">申请结算</a>
        </div>
    </div>
    <div class="fui-content navbar">
       
        <div class="fui-tab fui-tab-warning" id="tab">
            
            <a href="javascript:void(0)" data-tab='status1' class="active">待审核</a>
            <a href="javascript:void(0)" data-tab='status2'>待结算</a>
            <a href="javascript:void(0)" data-tab='status3'>已结算</a>
            <a href="javascript:void(0)" data-tab='status_1'>无效</a>
        </div>
        <div class='content-empty' style='display:none;'>
            <i class='icon icon-manageorder'></i><br/>暂时没有任何数据
        </div>
        <div class="fui-list-group" id="container"></div>
        <div class='infinite-loading'><span class='fui-preloader'></span><span class='text'> 正在加载...</span></div>

 

    <script id='tpl_apply_log_list' type='text/html'>
        <%each list as log%>
        <a href="#" class="fui-list">
            <div class="fui-list-inner">
                <div class="row">
                    <div class="row-text">编号: <%log.applyno%></div>
                </div>
                <div class="subtitle">申请金额: <%log.realprice%>
                    实际金额:<%log.realpricerate%>
                    <br>
                    <%if log.status==1%>申请时间:<%log.applytime%><%/if%>
                    <%if log.status==2%>审核时间:<%log.checktime%><%/if%>
                    <%if log.status==3%>打款时间:<%log.paytime%><%/if%>
                    <%if log.status==-1%>无效时间:<%log.invalidtime%><%/if%>
                    
                </div>
            </div>
            <div class="row-remark">
                <p><%log.statusstr%></p>
            </div>
        </a>
        <%/each%>
    </script>
   </div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('merchmanage/_menu', TEMPLATE_INCLUDEPATH)) : (include template('merchmanage/_menu', TEMPLATE_INCLUDEPATH));?>
    <script language='javascript'>
        require(['../addons/ewei_shopv2/plugin/merchmanage/static/js/managelist.js'], function (modal) {
        modal.init();
    });
    </script>
</div>
