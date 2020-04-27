<?php defined('IN_IA') or exit('Access Denied');?><style type='text/css'>
    body { width:100%;}
 
    .img-thumbnail { width:100px; height:100px;}
    .img-nickname { height:25px;line-height:25px;width:90px;margin-left:5px;margin-right:5px;position: absolute;bottom:55px;color:#fff;text-align: center;background:rgba(0,0,0,0.7)}
</style>

<div class="region-goods-details row">
    <div class="region-goods-left col-sm-2">
        促销方式
    </div>
    <div class="region-goods-right col-sm-10">
        <div class="form-group">
            <label class="col-lg control-label">支持线下核销</label>
            <div class="col-sm-6 col-xs-6">
                <?php if( mce('goods' ,$item) ) { ?>
                <label class="radio-inline"><input type="radio" name="isverify" value="1" <?php  if(empty($item['isverify']) || $item['isverify'] == 1) { ?>checked="true"<?php  } ?>  /> 不支持</label>
                <label class="radio-inline"><input type="radio" name="isverify" value="2" <?php  if($item['isverify'] == 2) { ?>checked="true"<?php  } ?>   /> 支持</label>
                <?php  } else { ?>
                <div class='form-control-static'>
                    <?php  if(empty($item['isverify']) || $item['isverify'] == 1) { ?>不支持<?php  } else { ?>支持<?php  } ?>
                </div>
                <?php  } ?>

            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label">核销类型</label>
            <div class="col-sm-6 col-xs-6">
                <?php if( mce('goods' ,$item) ) { ?>
                <label class="radio-inline"><input type="radio" name="verifytype" value="0" <?php  if(empty($item['verifytype'])) { ?>checked="true"<?php  } ?>  /> 按订单核销</label>
                <label class="radio-inline"><input type="radio" name="verifytype" value="1" <?php  if($item['verifytype'] == 1) { ?>checked="true"<?php  } ?>   /> 按次核销</label>
                <label class="radio-inline"><input type="radio" name="verifytype" value="2" <?php  if($item['verifytype'] == 2) { ?>checked="true"<?php  } ?>   /> 按消费码核销</label>
                <?php  } else { ?>
                <div class='form-control-static'>
                    <?php  if(empty($item['isverify'])) { ?>按订单核销<?php  } else if($item['verifytype'] == 1) { ?>按消费码核销<?php  } else if($item['verifytype'] == 2) { ?>按次核销<?php  } ?>
                </div>
                <?php  } ?>
                <p class="help-block">
                    按订单核销： 不管购买多少 一次核销完成<br>
                    按次核销：  一个消费码使用多次（购买的数量）<br>
                    按消费码核销： 多个消费码  一次核销一个
                </p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label">核销门店选择</label>
            <div class="col-sm-9 col-xs-12 chks">
                <?php if( mce('goods' ,$item) ) { ?>

                <?php  echo tpl_selector('storeids',
        array('text'=>'storename',
                'multi'=>1,
                'type'=>'text',
                'placeholder'=>'门店名称',
                'buttontext'=>'选择门店 ',
                'items'=>$stores,
                'url'=>merchUrl('shop/verify/store/query')))?>
                <?php  } else { ?>
                <div class='form-control-static'>
                    <?php  if(is_array($stores)) { foreach($stores as $store) { ?>
                    <?php  echo $store['storename'];?>;
                    <?php  } } ?>
                </div>
                <?php  } ?>
            </div>

        </div>
    </div>
</div>

<!--6Z2S5bKb5piT6IGU5LqS5Yqo572R57uc56eR5oqA5pyJ6ZmQ5YWs5Y+454mI5p2D5omA5pyJ-->