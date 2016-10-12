<?php if ($this->_var['bought_goods']): ?>
 
    
        
   <div class="goumaig box_1" >
     <h3 style=" padding-left:10px; "><span class="text">购买了此商品的还购买了</span></h3>
      <ul class=" clearfix">
       <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
       
       <li class="goodsimg">
	   <div class="goumai_img">
         <a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"  class="B_blue"  /></a>
		 </div> 
         <div  class="name"><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a></div> 
		 <div class="price" style="height:20px; font-family: arial;">
         <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
    <span> </span><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?>
        <?php else: ?>
       <span> </span><?php echo $this->_var['bought_goods_data']['shop_price']; ?>
        <?php endif; ?> 
		</div>
       </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </ul>
     </div>
    <div class="blank "></div>
    <?php endif; ?>