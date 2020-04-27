<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>

<div class='page-header'>当前位置：<span class="text-primary">数据复制转移</span></div>
<div class="page-content">
	<div class='alert alert-danger'>
		<b>此工具会将目标公众选择的项目的相关数据清空，请谨慎操作！</b>
	</div>
	<form id="dataform" action="" method="post" class="form-horizontal form-validate">

		<div class="form-group">
			<label class="col-lg control-label must">源公众号</label>
			<div class="col-sm-9">
				<select id='wechatid' name='wechatid' class='form-control select2' >
					<option value=''></option>
					<?php  if(is_array($wechats)) { foreach($wechats as $we) { ?>
					<option value='<?php  echo $we['uniacid'];?>'><?php  echo $we['name'] ?></option>
					<?php  } } ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg control-label must">目标公众号</label>
			<div class="col-sm-9">
				<select id='wechatid1' name='wechatid1' class='form-control select2' >
					<option value=''></option>
					<?php  if(is_array($wechats)) { foreach($wechats as $we) { ?>
					<option value='<?php  echo $we['uniacid'];?>'><?php  echo $we['name'] ?></option>
					<?php  } } ?>
				</select>
				<span class='help-block'><b>此公众号的数据会被清空，请慎重选择 ！</b></span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg control-label">删除源公众号数据</label>
			<div class="col-sm-9">
				<label class="radio-inline">
					<input type='radio' value="0" name="transtype" /> 保留
				</label>
				<label class="checkbox-inline">
					<input type='radio' value="1" name="transtype" /> 删除
				</label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg control-label">
				商城数据
			</label>
			<div class="col-sm-9">
				<div>
					<label class="checkbox-inline">
						<input type='checkbox' class="checkline-all" value="shop"  /><strong>全选</strong>
					</label>
				</div>
				<label class="checkbox-inline">
					<input type='checkbox' value="goods" name="shop[]" id="goods"/> 商品
				</label>

				<label class="checkbox-inline">
					<input type='checkbox' value="dispatch" name="shop[]" /> 配送方式
				</label>
				<label class="checkbox-inline">
					<input type='checkbox' value="adv" name="shop[]" /> 幻灯片
				</label>
				<label class="checkbox-inline">
					<input type='checkbox' value="notice" name="shop[]" /> 公告
				</label>

				<label class="checkbox-inline">
					<input type='checkbox' value="level" name="shop[]" /> 会员等级
				</label>
				<label class="checkbox-inline">
					<input type='checkbox' value="group" name="shop[]" /> 会员分组
				</label>
				<div class=" category" style="display: none;margin-top: 7px">
					<div class="input-group-select">
                    <select name="cate" class='form-control select2' style="width:200px;" data-placeholder="商品分类" id="cate">
                        <option value="0">商品分类</option>
                    </select>
						<span class="help-block" style="margin-bottom:0px ">当不选择分类时默认为全部产品转移,请在使用时确认待转移商品在选中分类下</span>
                </div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg control-label">
				人人分销
			</label>
			<div class="col-sm-9">
				<div>
					<label class="checkbox-inline">
						<input type='checkbox'  class="checkline-all" value="commission" /><strong>全选</strong>
					</label>
				</div>
				<label class="checkbox-inline">
					<input type='checkbox' value="level" name="commission[]" /> 分销商等级
				</label>
				<label class="checkbox-inline">
					<input type='checkbox' value="set" name="commission[]" /> 基础设置
				</label>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg control-label">
				超级海报
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label  class="checkbox-inline">-->
						<!--<input type='checkbox'  class="checkline-all" value="poster" /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="poster" name="poster[]" /> 海报数据
				</label>
			</div>
		</div>


		<div class="form-group">
			<label class="col-lg control-label">
				O2O核销
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label class="checkbox-inline">-->
						<!--<input type='checkbox'  class="checkline-all" value="verify" /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="store" name="verify[]" /> 门店
				</label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg control-label">
				分权系统
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label class="checkbox-inline">-->
						<!--<input type='checkbox'  class="checkline-all" value="perm"  /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="role" name="perm[]" /> 角色
				</label>
			</div>
		</div>

		<div class="form-group">
			<label class="col-lg control-label">
				积分商城
			</label>
			<div class="col-sm-9">
				<div>
					<label class="checkbox-inline">
						<input type='checkbox'  class="checkline-all" value="creditshop" /><strong>全选</strong>
					</label>
				</div>
				<label class="checkbox-inline">
					<input type='checkbox' value="goods" name="creditshop[]" /> 商品
				</label>

				<label class="checkbox-inline">
					<input type='checkbox' value="adv" name="creditshop[]" /> 幻灯片
				</label>

				<label class="checkbox-inline">
					<input type='checkbox' value="set" name="creditshop[]" /> 基础设置
				</label>

			</div>
		</div>
		<div class="form-group">
			<label class="col-lg control-label">
				虚拟物品
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label class="checkbox-inline">-->
						<!--<input type='checkbox'  class="checkline-all" value="virtual" /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="template" name="virtual[]" /> 模板
				</label>
			</div>
		</div>


		<?php  if(p('article')) { ?>

		<div class="form-group">
			<label class="col-lg control-label">
				文章营销
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label class="checkbox-inline">-->
						<!--<input type='checkbox'  class="checkline-all" value="article"  /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="article" name="article[]" /> 文章(关键词无法复制)
				</label>
			</div>
		</div>

		<?php  } ?>
		<?php  if(com('coupon')) { ?>
		<div class="form-group">
			<label class="col-lg control-label">
				超级券
			</label>
			<div class="col-sm-9">
				<div>
					<label class="checkbox-inline">
						<input type='checkbox'  class="checkline-all" value="coupon"  /><strong>全选</strong>
					</label>
				</div>
				<label class="checkbox-inline">
					<input type='checkbox' value="coupon" name="coupon[]" /> 优惠券
				</label>
				<label class="checkbox-inline">
					<input type='checkbox' value="set" name="coupon[]" /> 基础设置
				</label>
			</div>
		</div>
		<?php  } ?>

		<div class="form-group">
			<label class="col-lg control-label">
				活动海报
			</label>
			<div class="col-sm-9">
				<!--<div>-->
					<!--<label>-->
						<!--<input type='checkbox'  class="checkline-all" value="postera" /><strong>全选</strong>-->
					<!--</label>-->
				<!--</div>-->
				<label class="checkbox-inline">
					<input type='checkbox' value="poster" name="postera[]" /> 海报海报
				</label>

			</div>
		</div>

		<div class="form-group">
			<label class="col-lg control-label"></label>
			<div class="col-sm-9">
				<input id="btn_submit" type="submit" value="确认操作" class="btn btn-primary" data-confirm='操作后不可撤销，是否继续？'  />

			</div>
		</div>



	</form>
</div>
 
<script type="text/javascript">

	$(function () {
		$('.checkline-all').click(function(){
			var checked  =$(this).get(0).checked;
			 
			var name = $(this).val();
			$(":checkbox[name='" + name+ "[]']").each(function(){
				$(this).get(0).checked = checked;
                if (this.checked) {
                    $(".category").show();
                }else{
                    $(".category").hide();
                }
			})
		});
        $("#wechatid").on("change",function(){
           var uniacid =  $("#wechatid  option:selected").val();
            $.post("<?php  echo Weburl('system/data/transfer/getFullCategory')?>",{aid: uniacid },function (data){
                var category = data.result.category;
                var str = '';
                str += "<option value='"+0+"'>"+"全部分类"+"</option>";
                if(category.length>0){
                    $.each(category,function (index,obj) {
                    str += "<option value='"+obj.id+"'>"+obj.name+"</option>";
                });}
                $("#cate").html(str);
                },'JSON');
		});
        $("#goods").on("click",function(){
            if (this.checked) {
               $(".category").show();
            }else{
                $(".category").hide();
			}
        })
	});

	$('form').submit(function(){

		if ($("#wechatid").val() == '') {
			tip.msgbox.err("请选择源公众号!");
			$('form').attr('stop',1);
			return false;
			
		}
		if ($("#wechatid1").val() == '') {
			tip.msgbox.err("请选择源公众号!");
			$('form').attr('stop',1);
			return false;
		}
		 if ($("#wechatid").val() == $("#wechatid1").val()) {
			 tip.msgbox.err("请选择两个不同的公众号!");
			 $('form').attr('stop',1);
			return false;
		 }
		 $('form').removeAttr('stop');
		return true;
	});
 
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>
