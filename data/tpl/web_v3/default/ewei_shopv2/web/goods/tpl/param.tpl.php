<?php defined('IN_IA') or exit('Access Denied');?><tr>
    
    <td>
        <input name="param_title[]" type="text" class="form-control param_title" value=""/>
        <input name="param_id[]" type="hidden" class="form-control" value="<?php  echo $tag1;?>"/>
    </td>
    <td><input name="param_value[]" type="text" class="form-control param_value" value=""/></td>
    <td>
        
        <a href="javascript:;" class='btn btn-default btn-sm' onclick="deleteParam(this)"  title="删除"><i class='fa fa-times'></i></a>
    </td>
    <td>
        <a href="javascript:;" class='btn btn-default btn-sm'  title="拖动排序"><i class='icow icow-tuodong' style="margin-right: 5px;font-size:12px;"></i>拖动排序</a>
    </td>
</tr>
<!--913702023503242914-->