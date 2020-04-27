<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-header">  当前位置：<span class="text-primary">微信支付服务器证书验证</span></div>

<div class="page-content">
    <div class="alert alert-primary">
        <p>【重要】微信支付计划更换服务器证书，请开发人员验证以免影响交易 ! 详见 <a href="https://pay.weixin.qq.com/index.php/public/cms/content_detail?platformType=0&lang=zh&id=56602" target="_blank">微信商户平台公告</a></p>
        <p>注意：此根证书是服务器证书 , 并非微信支付API证书 , 此处只需要验证服务器证书 , 不需要更换API证书</p>
        <p>提示：如果验证证书失败 , 按指引进行自行安装证书! 方法见 <a href="https://pay.weixin.qq.com/wiki/doc/api/micropay.php?chapter=23_4" target="_blank">微信支付HTTPS服务器证书验证指引</a></p>
    </div>
    <form method="post" class="form-horizontal form-validate">
        <div class="form-group " >
            <label class="col-lg control-label must">微信商户号(Mch_Id)</label>
            <div class="col-sm-9">
                <input type="text" name="mch_id" class="form-control" value="<?php  echo $data['mch_id'];?>" data-rule-required='true'>
            </div>
        </div>
        <div class="form-group" >
            <label class="col-lg control-label must">支付秘钥(APIKEY)</label>
            <div class="col-sm-9">
                <input type="text" name="api_key" class="form-control" value="<?php  echo $data['api_key'];?>" data-rule-required='true'/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label "></label>
            <div class="col-sm-9">
                <input type="submit" value="提交验证" class="btn btn-primary"/>
            </div>
        </div>

    </form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>