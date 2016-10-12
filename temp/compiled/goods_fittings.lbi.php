 
<script>

function qq (id) {
	var str=document.getElementsByName("box[]");
	if(document.getElementById("goods_id_"+id).checked ==false)
	{
		document.getElementById("goods_id_"+id).checked=true;
	}
	else
	{
		document.getElementById("goods_id_"+id).checked=false;
	}
	var start_price = <?php echo $this->_var['goods']['shop_price']; ?>;
   for(i=0;i<str.length;i++) {
		   if(str[i].type=="checkbox" && str[i].checked) {
                 start_price = parseFloat(start_price)+parseFloat(str[i].value);
                }
	}
	document.getElementById("show_all_price").innerHTML="￥"+start_price+"元";
}
</script>
 
<?php if ($this->_var['fittings']): ?>
  <h3 class="h3_4" style="margin-left:10px;">
       
        <span style="font-weight:normal">优惠套装</span>
 
     
   </h3>
 
  <div class="boxCenterList clearfix taozhuang" >
  
  <div class="f_l">
 
 <form action="flow.php" method="post" name="ECS_ALL_addcart" >
      <ul class="clearfix" style=" float:left; width:130px; border:none" >
      <li class="goodsimg">
     <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"> <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" class="B_blue"   />   <input name="goods_id[]" type="hidden"id="goods_id_<?php echo $this->_var['goods']['goods_id']; ?>" value="<?php echo $this->_var['goods']['goods_id']; ?>" > 
     </a>
   </li>
      <li>
       <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="name">  <?php echo $this->_var['goods']['goods_style_name']; ?> </a> 
      <font class="f1"><?php echo $this->_var['goods']['shop_price_formated']; ?></font>
   </li>
    </ul>
  
  
  
  
  <img style="float:left; padding-top:40px;" src="themes/suning/images/jia.gif">
  <div class="taozhuang_r"  >
  <table cellpadding="0" cellspacing="0">
  <tr>
    <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_73000000_1473833284');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_73000000_1473833284']):
?>
    <td>
    <div class="div_ul">
      <li class="goodsimg">
      <a href="<?php echo $this->_var['goods_0_73000000_1473833284']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_73000000_1473833284']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_73000000_1473833284']['name']); ?>" class="B_blue" /></a>
      </li>
      <li>
      <a href="<?php echo $this->_var['goods_0_73000000_1473833284']['url']; ?>" class="name" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_73000000_1473833284']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_73000000_1473833284']['short_name']); ?></a> 
     <font class="f1"><?php echo $this->_var['goods_0_73000000_1473833284']['fittings_price']; ?></font> <input name="box[]" type="checkbox" id="goods_ids" value="<?php echo $this->_var['goods_0_73000000_1473833284']['fittings_price_nformat']; ?>"  onClick="qq(<?php echo $this->_var['goods_0_73000000_1473833284']['goods_id']; ?>);"> 
	 
	 <input name="goods_id[]" style="display:none;"  type="checkbox" id="goods_id_<?php echo $this->_var['goods_0_73000000_1473833284']['goods_id']; ?>" value="<?php echo $this->_var['goods_0_73000000_1473833284']['goods_id']; ?>" > 
	
<input name="step"  value="all_addcart" type="hidden" />
      </li>
    </div>
    </td> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    </tr>
     </table> 
    </div>
 </div>
    
    
  <div class="f_r">
  
  <div>优惠套装</div>
  
  <dl>套装价：   <font class="f1" id="show_all_price"><?php echo $this->_var['goods']['shop_price_formated']; ?></font></dl>
   <input  name="submit" type="image" value="优惠套装" src="themes/suning/images/sub.gif" >
    
    
  </div> 
    
    </form>
    
  </div>
 
<div class="blank5"></div>
<?php endif; ?>




