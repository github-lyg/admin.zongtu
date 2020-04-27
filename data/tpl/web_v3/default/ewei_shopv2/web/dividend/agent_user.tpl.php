<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<style type='text/css'>
    .moresearch { padding:0px 10px;}
    .moresearch .col-sm-2 {
        padding:0 5px
    }
    .popover{
        width:170px;
        font-size:12px;
        line-height: 21px;
        color: #0d0706;
    }
    .popover span{
        color: #b9b9b9;
    }
    .nickname{
        display: inline-block;
        max-width:200px;
        overflow: hidden;
        text-overflow:ellipsis;
        white-space: nowrap;
        vertical-align: middle;
    }

    .tooltip-inner{
        border:none;
    }
    .info{
        height: 100%;
        width:370px;
        float:left;
        border-right:1px solid #efefef;
        padding: 40px 20px;
        line-height: 25px;
    }
    .info i{
        display: inline-block;
        width:80px;
        text-align: right;
        color: #999;
    }
</style>
<div class="page-header">
    当前位置：<span class="text-primary">推广下线 <small>总数: <span class='text-danger'><?php  echo $total;?></span></small></span>
</div>
<div class="page-content">
    <div class="page-sub-toolbar">
        <span class=''>
            <a class="btn btn-default  btn-sm" href="<?php  echo referer()?>">返回列表</a>
        </span>
    </div>
<div style="height: 180px;border: 1px solid #efefef;margin-bottom: 30px">
        <div class="info">
            <img class="pull-left" src='<?php  echo $member['avatar'];?>' style='width:100px;height:100px;border:1px solid #ccc;padding:1px'  onerror="this.src='../addons/ewei_shopv2/static/images/noface.png'"/>
           <div class="pull-left">
              <i> 昵称：</i><?php  echo $member['nickname'];?><br/>
              <i> 姓名：</i><?php  echo $member['realname'];?> <br/>
               <i>手机号：</i><?php  echo $member['mobile'];?> <br/>
               <i>微信号：</i> <?php  echo $member['weixin'];?><br/>
           </div>
        </div>
        <div class="info" style="text-align: center">
            <p class="pull-left" style="color: #999;width: 120px;"> 团员：</p>
            <div  class="pull-left">
                总共：<span class="text-danger"><?php  echo $member['groupscount'];?></span> 人<br/>
            </div>
        </div>
        <div style="clear: both"></div>
</div>

<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
    <input type="hidden" name="c" value="site" />
    <input type="hidden" name="a" value="entry" />
    <input type="hidden" name="m" value="ewei_shopv2" />
    <input type="hidden" name="do" value="web" />
    <input type="hidden" name="r" value="dividend.agent.user" />
    <input type="hidden" name="id" value="<?php  echo $headsid;?>" />
    <div class="page-toolbar m-b-sm m-t-sm ">
        <div class="col-sm-12 pull-right">

            <div class="input-group">
                <span class="input-group-select">
                     <select name='followed' class='form-control  input-sm'>
                         <option value=''>关注</option>
                         <option value='0' <?php  if($_GPC['followed']=='0') { ?>selected<?php  } ?>>未关注</option>
                         <option value='1' <?php  if($_GPC['followed']=='1') { ?>selected<?php  } ?>>已关注</option>
                         <option value='2' <?php  if($_GPC['followed']=='2') { ?>selected<?php  } ?>>取消关注</option>
                     </select>
                </span>
                <input type="text" class="form-control input-sm"  name="keyword" value="<?php  echo $_GPC['keyword'];?>" placeholder="昵称/姓名/手机号"/>
				 <span class="input-group-btn">
                     <button class="btn  btn-primary" type="submit"> 搜索</button>
                     <button type="submit" name="export" value="1" class="btn btn-success ">导出</button>

				</span>
            </div>

        </div>
    </div>
    <?php  if(count($list)>0) { ?>

    <table class="table table-hover table-responsive">
        <thead class="navbar-inner" >
        <tr>
            <th>粉丝</th>
            <th>姓名<br/>手机号码</th>
            <th>注册时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php  if(is_array($list)) { foreach($list as $row) { ?>
        <tr>
            <td style="overflow: visible">
                <div rel="pop" data-content="
                <span>ID: </span><?php  echo $row['id'];?> </br>
					   <span>是否关注：</span>
                         <?php  if(empty($row['followed'])) { ?>
                                <?php  if(empty($row['uid'])) { ?>
                               未关注
                                <?php  } else { ?>
                               取消关注
                                <?php  } ?>
                                <?php  } else { ?>
                               已关注
                                <?php  } ?> </br>
                            <span>状态:</span>  <?php  if($row['isblack']==1) { ?>黑名单<?php  } else { ?>正常<?php  } ?>

					   ">
                    <?php if(cv('member.list.view')) { ?>
                    <a href="<?php  echo webUrl('member/list/detail',array('id' => $row['id']));?>" title='会员信息' target='_blank' style="display: flex">
                        <span data-toggle='tooltip' title='<?php  echo $row['nickname'];?>'>
                        <?php  if(!empty($row['avatar'])) { ?>
                        <img class="radius50" src='<?php  echo tomedia($row['avatar'])?>' style='width:30px;height:30px;padding1px;border:1px solid #ccc' onerror="this.src='../addons/ewei_shopv2/static/images/noface.png'"/>
                        <?php  if(strexists($row['openid'],'sns_wa')) { ?><i class="icow icow-xiaochengxu" style="color: #7586db;vertical-align: middle;" data-toggle="tooltip" data-placement="top" title="" data-original-title="来源: 小程序"></i><?php  } ?>
                        <?php  } ?>
                        <?php  if(empty($row['nickname'])) { ?>未更新<?php  } else { ?><?php  echo $row['nickname'];?><?php  } ?>
                        </span>
                    </a>
                    <?php  } else { ?>
                        <span data-toggle='tooltip' title='<?php  echo $row['nickname'];?>'>
                        <?php  if(!empty($row['avatar'])) { ?>
                        <img class="radius50" src='<?php  echo tomedia($row['avatar'])?>' style='width:30px;height:30px;padding1px;border:1px solid #ccc' onerror="this.src='../addons/ewei_shopv2/static/images/noface.png'"/>
                        <?php  } ?>
                        <?php  if(empty($row['nickname'])) { ?>未更新<?php  } else { ?><?php  echo $row['nickname'];?><?php  } ?>
                        </span>
                    <?php  } ?>
                </div>
            </td>

            <td><?php  echo $row['realname'];?> <br/> <?php  echo $row['mobile'];?></td>

            <td><?php  echo date('Y-m-d',$row['createtime'])?><br/><?php  echo date('H:i',$row['createtime'])?></td>


            <td  style="overflow:visible;">

                <div class="btn-group btn-group-sm">
                    <?php if(cv('order')) { ?>
                    <a class="btn  btn-op btn-operation" href="<?php  echo webUrl('order/list', array('searchfield'=>'member', 'keyword'=>$row['nickname'],'isprecise'=>1))?>" title='会员订单'  target='_blank'>
                                     <span data-toggle="tooltip" data-placement="top" title="" data-original-title="会员订单">
                                        <i class='icow icow-dingdan2'></i>
                                    </span>
                    </a>
                    <?php  } ?>
                    <?php if(cv('finance.recharge.credit1|finance.recharge.credit2')) { ?>
                    <a class="btn  btn-op btn-operation" data-toggle="ajaxModal" href="<?php  echo webUrl('finance/recharge', array('type'=>'credit1','id'=>$row['id']))?>" title='充值积分'>
                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="充值">
                                       <i class='icow icow-31'></i>
                                    </span>
                    </a>
                    <?php  } ?>


                    </ul>
                </div>


            </td>
        </tr>
        <?php  } } ?>
        </tbody>
    </table>
    <?php  echo $pager;?>

    <?php  } else { ?>
    <div class='panel panel-default'>
        <div class='panel-body' style='text-align: center;padding:30px;'>
            暂时没有任何分销商!
        </div>
    </div>
    <?php  } ?>
    </form>
    </div>
    <script language="javascript">



        require(['bootstrap'],function(){
            $("[rel=pop]").popover({
                trigger:'manual',
                placement : 'right',
                title : $(this).data('title'),
                html: 'true',
                content : $(this).data('content'),
                animation: false
            }).on("mouseenter", function () {
                var _this = this;
                $(this).popover("show");
                $(this).siblings(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
            }).on("mouseleave", function () {
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide")
                    }
                }, 100);
            });


        });


    </script>


    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>