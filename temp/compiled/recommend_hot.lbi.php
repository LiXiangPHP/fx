 
  
  <?php if ($this->_var['hot_goods']): ?>
  <div class="proArae hotArea" >
  <dl>
  <dt>
<?php 
$k = array (
  'name' => 'ads',
  'id' => '29',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

</dt>
<dd>
<div class="proItemMain">
  <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_83920000_1479798180');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_83920000_1479798180']):
        $this->_foreach['hot_goods']['iteration']++;
?>
   <?php if ($this->_foreach['hot_goods']['iteration'] < 5): ?>
  
 <div class="goodsItem">    
           <a href="<?php echo $this->_var['goods_0_83920000_1479798180']['url']; ?>"><img src="<?php echo $this->_var['goods_0_83920000_1479798180']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_83920000_1479798180']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_83920000_1479798180']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_83920000_1479798180']['name']); ?>"><?php echo $this->_var['goods_0_83920000_1479798180']['short_style_name']; ?></a></p>
           
          <em class="snPrice">
         
           <?php if ($this->_var['goods_0_83920000_1479798180']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_83920000_1479798180']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_83920000_1479798180']['shop_price']; ?>
          <?php endif; ?>
         </em>
        </div>
		<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  <div class="proAreaimg">

<?php 
$k = array (
  'name' => 'ads',
  'id' => '30',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

<?php 
$k = array (
  'name' => 'ads',
  'id' => '31',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

</div>
  </dd>
  </dl>
 </div>


<?php endif; ?>
