<div class="shoufa">
<ul>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_84120000_1479798180');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_84120000_1479798180']):
        $this->_foreach['new_goods']['iteration']++;
?>
     
 <li >
 <div class="goodsItem">
  <a href="<?php echo $this->_var['goods_0_84120000_1479798180']['url']; ?>"><img src="<?php echo $this->_var['goods_0_84120000_1479798180']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_84120000_1479798180']['name']); ?>" class="goodsimg" /></a> 
  </div>  
   <div class="tit"><a href="<?php echo $this->_var['goods_0_84120000_1479798180']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_84120000_1479798180']['name']); ?>"><?php echo sub_str($this->_var['goods_0_84120000_1479798180']['short_style_name'],12); ?> </a> </div>
   
   <p> <?php echo $this->_var['goods_0_84120000_1479798180']['brief']; ?></p>
	
        </li>
         
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</ul>
</div>