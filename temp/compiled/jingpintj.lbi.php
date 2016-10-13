<div class="jingpintj">
<ul>
 <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_39920000_1476350756');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_39920000_1476350756']):
        $this->_foreach['best_goods']['iteration']++;
?>
<li>
<div><a href="<?php echo $this->_var['goods_0_39920000_1476350756']['url']; ?>"><img src="<?php echo $this->_var['goods_0_39920000_1476350756']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_39920000_1476350756']['name']); ?>"  style="width:80px; height:80px;"/></a></div>
<p> <a href="<?php echo $this->_var['goods_0_39920000_1476350756']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_39920000_1476350756']['name']); ?>"><?php echo $this->_var['goods_0_39920000_1476350756']['short_style_name']; ?></a></p>

</li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>