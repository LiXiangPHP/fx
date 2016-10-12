<?php if ($this->_var['related_goods']): ?>
 
     <h3 class="h3_4">
       
        <span>相关产品</span>
 
         
   </h3>
      <div class="boxCenterList clearfix">
      <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
        <div class="goodsItem" style="padding:0; height:300px; width:21%; padding-right:2%; padding-left:2%">
          <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" style="width:160px; height:160px;" class="goodsimg" /></a> 
           
       <p class="name"> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a> </p>
        <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
        <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font>
        <?php else: ?>
        <?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font>
        <?php endif; ?>
         
     </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    
<div class="blank5"></div>
<?php endif; ?>
