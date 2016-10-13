<div class="lipinhui">
<ul>
 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_0_39820000_1476350756');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_0_39820000_1476350756']):
        $this->_foreach['hot_goods']['iteration']++;
?>
   <?php if ($this->_var['key'] < 2): ?>
<li>
<p> <a href="<?php echo $this->_var['goods_0_39820000_1476350756']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_39820000_1476350756']['name']); ?>"><?php echo $this->_var['goods_0_39820000_1476350756']['short_style_name']; ?></a></p>
<em class="snPrice">
         
           <?php if ($this->_var['goods_0_39820000_1476350756']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_39820000_1476350756']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_39820000_1476350756']['shop_price']; ?>
          <?php endif; ?>
         </em>
<div><a href="<?php echo $this->_var['goods_0_39820000_1476350756']['url']; ?>"><img src="<?php echo $this->_var['goods_0_39820000_1476350756']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_39820000_1476350756']['name']); ?>"  style="width:100px; height:100px;"/></a></div>
</li>
<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>