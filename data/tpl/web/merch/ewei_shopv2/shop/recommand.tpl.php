<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-header">
    当前位置：<span class="text-primary">商品推荐</span>
    <div class="pull-right">
        <?php if(mcv('shop.recommand.setstyle')) { ?>
	    <span>
	    	<strong>开启列表样式</strong>
	    	<input class="js-switch small" id="goodsstyle" type="checkbox" <?php  if(!empty($goodsstyle)) { ?>checked<?php  } ?>
	    		data-toggle='ajaxSwitch'
                data-switch-value='<?php  echo $goodsstyle;?>'
                data-switch-value0='0|0|0|<?php  echo webUrl('shop/recommand/setstyle',array('goodsstyle'=>1))?>'
                data-switch-value1='1|0|0|<?php  echo webUrl('shop/recommand/setstyle',array('goodsstyle'=>0))?>'  />
	    </span>
        <?php  } ?>
    </div>
</div>

<div class="page-content">
    <form action="" method="post" class="form-validate">
        <?php if(mcv('shop.recommand.main')) { ?>
            <div class="alert alert-primary">提示: 请在下方选择要显示的商品; 不选择则将不显示; 右上角开启列表显示则使用列表样式，不开启则使用默认方块样式显示。</div>
        <?php  } ?>
        <div class="form-group" style="height: auto; overflow:hidden;">
            <div class="col-sm-9 col-xs-12">
                <?php if(mcv('shop.recommand.main')) { ?>
                    <?php  echo tpl_selector('goodsid',
                        array(
                            'preview'=>true,
                            'readonly'=>true,
                            'multi'=>1,
                            'value'=>$item['title'],
                            'url'=>webUrl('goods/query'),
                            'items'=>$goods,
                            'nokeywords'=>1,
                            'autosearch'=>1,
                            'buttontext'=>'选择商品',
                            'placeholder'=>'请选择商品')
                        )?>
                <?php  } else { ?>
                    <div class="input-group multi-img-details container ui-sortable">
                        <?php  if(is_array($goods)) { foreach($goods as $item) { ?>
                            <div data-name="goodsid" data-id="426" class="multi-item">
                                <img src="<?php  echo tomedia($item['thumb'])?>" class="img-responsive img-thumbnail">
                                <div class="img-nickname"><?php  echo $item['title'];?></div>
                            </div>
                        <?php  } } ?>
                    </div>
                <?php  } ?>
            </div>
        </div>
        <div class="form-group" style="height: auto; overflow: hidden;">
            <div class="col-sm-9 col-xs-12">
                <?php if(mcv('shop.recommand.main')) { ?>
                    <input type="submit" class="btn btn-primary" value="保存">
                <?php  } ?>
            </div>
        </div>
</form>
</div>
<script language="javascript">
    require(['jquery.ui'],function(){
        $('.multi-img-details').sortable();
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>


<!--NDAwMDA5NzgyNw==-->