<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/suning/style.css" rel="stylesheet" type="text/css" />
 

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(function(){
	var count = $(".shuxin_tab").length;
	for(i=0; i<count; i++)
	{
		$(".shuxin_tab:eq("+i+") .tr_bg:odd").css('background','#eff3ff');
	}
	//$("#shuxin tr:not(.tr_bg):odd").css;
})


function $id(element) {
  return document.getElementById(element);
}

//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
 <SCRIPT type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</SCRIPT>
</head>

<body>

 
<?php echo $this->fetch('library/page_header.lbi'); ?>
 
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/script.js" ></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.jqzoom.js"></script>
 
<script type="text/javascript" language="javascript">
var GB_ANIMATION = true;
$(document).ready(function(){
	$(".jqzoom").jqzoom();
	$("a.greybox").click(function(){
          var t = this.title || $(this).text() || this.href;
          GB_show(t,this.href,600,800);
          return false;
        });
});
</script>

<div class="block950 clearfix">
<div id="goodsInfo" class="clearfix">

<div class="goods_info">
                    	<div class="polo_gallery f_l">
                            <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
                        </div>
                    	<div class="goods_pics_polo ">
                        	<div class="goods_big_img" style="position:relative;">
                              <a href="<?php echo $this->_var['goods']['original_img']; ?>" class="jqzoom" id="picbox" title="<?php echo $this->_var['goods']['goods_name']; ?>">                        	
                              <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" class="goodsimg" id="goods_bimg"  /></a>
                              </div>
							  <div class="more_view fix">
<p class="view_big_img"><a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">查看大图<s></s></a></p>

</div>
                              
                              
                           
                         </div>
                    	 
                    </div>
                 
     <div class="textInfo">
       <div class="product_detail ">
          <h1><span><?php echo $this->_var['goods']['goods_style_name']; ?> <em><?php echo $this->_var['goods']['goods_brief']; ?></em></span></h1>
       
      
      </div>  
  
     <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		 
      
   
      <ul class="ul1">
      
      
      
            <?php if ($this->_var['cfg']['show_goodssn']): ?>
               <li class="clearfix"  > 
            编 号：
          <?php echo $this->_var['goods']['goods_sn']; ?> 
       </li>  
          <?php endif; ?>
      
      
      
      <li class="main_price clearfix"  > 
           <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
     
     <span class="attr">抢购价：</span>  <span class="sell_price" style="font-size:16px"> <em><?php echo $this->_var['goods']['promote_price']; ?></span>   
      <?php else: ?>
  <span class="attr"> 本店价：</span> <span class="sell_price" id="ECS_SHOPPRICE"  style="font-size:16px"><?php echo $this->_var['goods']['shop_price_formated']; ?></span>

      <?php endif; ?>
      
     </li>  
	 
        <?php if ($this->_var['cfg']['show_marketprice']): ?>
        <li class="clearfix">

      <span class="attr"> 市场价：</span>< span class="sell_price" ><em><?php echo $this->_var['goods']['market_price']; ?></em></span>  

       </li>  
       <?php endif; ?>
       
     <li class="clearfix">
     
        <span class="attr"><?php echo $this->_var['lang']['goods_rank']; ?></span>
		
		<div class="comments_star">
<span class="star"><img src="themes/suning/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /> </span>
</div>
		 
     
      </li>  
       
       
       
       
       
     
       <?php if ($this->_var['promotion']): ?>
      <li class="padd">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php echo $this->_var['lang']['activity']; ?>
      <?php if ($this->_var['item']['type'] == "snatch"): ?>
      <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
      <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "auction"): ?>
      <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
      <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
      <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#005aa0; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
      <?php endif; ?>
      <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#005aa0;"><?php echo $this->_var['item']['act_name']; ?></a><br />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </li>
      <?php endif; ?> 

       <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
       <li class="clearfix">

      
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <span class="attr"><?php echo $this->_var['lang']['goods_number']; ?></span>
          <span  style="color:red"><?php echo $this->_var['lang']['stock_up']; ?></span>
        <?php else: ?>
          <span class="attr"><?php echo $this->_var['lang']['goods_number']; ?></span>
          <span  style="color:#000"><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></span>
        <?php endif; ?>
     

       </li>  
       <?php endif; ?>
       <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
      <li class="clearfix">
      
       <span class="attr"><?php echo $this->_var['lang']['goods_brand']; ?></span><a  style="color:#000"href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>

       </li>  
        <?php endif; ?>
        <?php if ($this->_var['cfg']['show_goodsweight']): ?>
       <li class="clearfix">
     
       <span class="attr"><?php echo $this->_var['lang']['goods_weight']; ?></span><?php echo $this->_var['goods']['goods_weight']; ?>
       
      </li>
      <?php endif; ?>  
       <?php if ($this->_var['cfg']['show_addtime']): ?>
      <li class="clearfix">

    
    <span class="attr"><?php echo $this->_var['lang']['add_time']; ?></span><?php echo $this->_var['goods']['add_time']; ?>
      

       </li>
       <?php endif; ?>
       
     
   
     
     
         
  
      </ul>
      
       <div class="pro_chooseBox clearfix ">
      
       <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
         <!--<li class="clearfix">
       <span class="attr"><?php echo $this->_var['rank_price']['rank_name']; ?>：</span><font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font>
    
       </li>-->
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      

      <?php if ($this->_var['volume_price_list']): ?>
      <li class="padd" style=" height:auto">
       <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
			 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
				<tr>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
					<td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
				</tr>
				<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
				<tr>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
					<td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	     </table>
      </li>
      <?php endif; ?>
	  
	  
	   <?php if ($this->_var['goods']['bonus_money']): ?>
      <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
      <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
      </li>
      <?php endif; ?>
    
      
   
       
      <?php if ($this->_var['goods']['is_shipping']): ?>
      <li style="height:30px;padding-top:4px;">
      <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
      </li>
      
      
 



      
      
      

     
	  
      <?php endif; ?>
      
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
	 <li class="" style="  padding-top:5px; height:auto">
      <dd>
      <strong style="float:left; width:72px; padding-top:10px; color:#816957; font-weight:normal;"><?php echo $this->_var['spec']['name']; ?></strong>
      
      <div class="catt_r"  >
         
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
<div class="catt">
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
  <a style="color:#000; text-decoration:none" <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?><input id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                    <?php else: ?>
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
  </div>
  
   </dd>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      
      
      <dl>
    
     
      <dt> <?php echo $this->_var['lang']['number']; ?>：</dt>
	     <dd  > 
		 
		 
		 
		  <a onclick="buyNumber.minus()" href="javascript:;"><img src="themes/suning/images/jian.gif"onmouseover="this.src='themes/suning/images/jian_on.gif'"onmouseout="this.src='themes/suning/images/jian.gif'" /></a> 
		<input name="number" type="text"   value="1" defaultnumber="1" onblur="changePrice()" id="product_num" style="border:1px solid #ccc; vertical-align:top; width:30px; height:15px; text-align:center" />
         <a onclick="buyNumber.plus()" href="javascript:;"><img src="themes/suning/images/jia.gif"onmouseover="this.src='themes/suning/images/jia_on.gif'"onmouseout="this.src='themes/suning/images/jia.gif'" /></a></li>
       
      
       </dd>
    
	    </dl>
		<script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 20,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return document.getElementById('product_num').value = num;
                                        }else{
                                            return parseInt(document.getElementById('product_num').value);
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){ 
var num = buyNumber.goodNumber() + buyNumber.defaultNumber(); 
if(num <= buyNumber.maxNumber){ 

buyNumber.goodNumber(num); 
} 
changePrice(); 
}, 
minus : function(){ 
var num = buyNumber.goodNumber() - buyNumber.defaultNumber(); 
if(num >= buyNumber.minNumber){ 
buyNumber.goodNumber(num); 
} 
changePrice(); 
}
                                                                                                                                    
                                }
                            </script>
							<div class="blank5"></div>
      	
	<div style=" position:relative">  
<a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)"><img style=" margin-right:8px;" src="themes/suning/images/bnt_cat.gif" /></a>
<script language="javascript" type="text/javascript"> 
function showDiv(){ 
document.getElementById('popDiv').style.display='block'; 
} 
function closeDiv(){ 
document.getElementById('popDiv').style.display='none'; 
} 
</script> 
<a href="javascript:showDiv();addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/suning/images/bnt_cat2.gif" /></a>  
<div id="popDiv" class="mydiv" style="display:none;">

<div style="float:left">
 <img src="themes/suning/images/gou.gif" style=" vertical-align:middle; padding-right:10px;" /> 商品已经添加到购物车
</div>
<a href="javascript:closeDiv()"> <img style="float:right; padding-top:15px;" src="themes/suning/images/guanbi1.gif"  /></a>
<div class="blank"></div>
 
 
<a href="flow.php"><img src="themes/suning/images/qujiesuan1.gif" style=" vertical-align:middle; padding-right:10px;" /></a>  
<a href="javascript:closeDiv()" style=" text-decoration:none; color:#666">关闭宝贝页面</a>
<div class="blank"></div>

</div> 


      <?php if ($this->_var['affiliate']['on']): ?>
      <a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>"><img src='themes/suning/images/bnt_recommend.gif'></a>
      <?php endif; ?>
	  
	</div>  
	  
 		  
	  
      
       </div>
       
 
       
      </form>
	  
	  <div class="blank"></div>
	  <?php echo $this->fetch('library/fenxiang.lbi'); ?>
     </div>          
  </div>  
  
  
  
  
  
<div class="blank"></div>  
<div class="AreaL">

    
<?php echo $this->fetch('library/bought_goods.lbi'); ?>
<?php echo $this->fetch('library/history.lbi'); ?>
<?php echo $this->fetch('library/goods_related.lbi'); ?>

    
  </div>
  
  
<div class="AreaR">

   <div  id="inner" style=" width:960px; background:#FFFFFF; position:relative; z-index:999999999; ">
      <h3 class="h3_3">
        <div id="com_b" class="history clearfix">
        <h2>商品总览</h2>
        <h2 class="h2bg">商品参数</h2>
        <?php if ($this->_var['package_goods_list']): ?>
        <h2 class="h2bg" style="color:red; "><?php echo $this->_var['lang']['remark_package']; ?></h2>
        <?php endif; ?>
           <h2 class="h2bg">用户评价</h2>
           
             <h2 class="h2bg">售后服务</h2>
           
        </div>
      </h3>
	  </div>

	  
	  <script type="text/javascript">
var obj11 = document.getElementById("inner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
if (bodyScrollTop > top11){
obj11.style.position = (isIE6) ? "absolute" : "fixed";
obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
} else {
obj11.style.position = "static";
}
}
function getTop(e){
var offset = e.offsetTop;
if(e.offsetParent != null) offset += getTop(e.offsetParent);
return offset;
}
</script>
      <div id="com_v" style="   padding:12px;" ></div>
      <div id="com_h">
       <blockquote>
	   <div class="blank"></div>
        <?php echo $this->_var['goods']['goods_desc']; ?>
		
       </blockquote>

     <blockquote>
    <div style="padding:15px;">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
		 <table class="shuxin_tab" width="100%" border="0" cellpadding="0" cellspacing="0" >
        <tr >
        <th colspan="3" ><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr class="tr_bg">
        <td   width="19%"  style="border-right: 1px solid #dbe2f9;"><?php echo htmlspecialchars($this->_var['property']['name']); ?>:</td>
       <td   width="81%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </table>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
     </blockquote>

     <?php if ($this->_var['package_goods_list']): ?>
     <blockquote>
       <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
			  <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
				<tr>
					<td bgcolor="#FFFFFF">
					<?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
					<a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><font class="f1"><?php echo $this->_var['goods_list']['goods_name']; ?></font></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</td>
					<td bgcolor="#FFFFFF">
					<strong><?php echo $this->_var['lang']['old_price']; ?></strong><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <strong><?php echo $this->_var['lang']['package_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <strong><?php echo $this->_var['lang']['then_old_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
					</td>
					<td bgcolor="#FFFFFF">
					<a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" style="background:transparent"><img src="themes/suning/images/bnt_buy_1.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>" /></a>
					</td>
				</tr>
	    </table>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </blockquote>
     <?php endif; ?>
  <blockquote>
       
  </blockquote>
    <blockquote>
 <?php echo $this->fetch('library/goods_sh.lbi'); ?>
  </blockquote>

 </div>
      
      
        <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
 
      <div class="blank"></div>
      
      
      
 
      
      
      
      
<?php echo $this->fetch('library/goods_fittings.lbi'); ?>
<?php echo $this->fetch('library/comments.lbi'); ?>

      
      
  
  
  
  
  
  
  
  
  
    
</div>   
    
    
   </div> 
    
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_SHOPPRICE'))
      document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
  }
}

</script>
</html>

