
 

<?php if ($this->_var['cat_rec_sign'] != 1): ?>
 
 <div class=" cat_box_r  "  >

  <h3><span><ul id="itemCat<?php echo $this->_var['goods_cat']['id']; ?>">  
  <li style="  border-left:none"><a style="" href="<?php echo $this->_var['goods_cat']['url']; ?>" onmouseover="change_tab_style('itemCat<?php echo $this->_var['goods_cat']['id']; ?>', 'li', this);get_cat_recommend(4, <?php echo $this->_var['goods_cat']['id']; ?>,<?php echo $this->_var['goods_cat']['id']; ?>);">特价热卖</a></li>
  <?php $_from = $this->_var['goods_cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'children');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['children']):
        $this->_foreach['no']['iteration']++;
?>
   <?php if ($this->_foreach['no']['iteration'] < 6): ?>
  <li class="h2bg"><a href="category.php?id=<?php echo $this->_var['children']['cat_id']; ?>" onmouseover="change_tab_style('itemCat<?php echo $this->_var['goods_cat']['id']; ?>', 'li', this);get_cat_recommend(4, <?php echo $this->_var['children']['cat_id']; ?>,<?php echo $this->_var['goods_cat']['id']; ?>)"><?php echo $this->_var['children']['cat_name']; ?></a></li>
   <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  </span>
  </h3>

    <div class="centerPadd">
    <div class="clearfix  " style="border:none;" id="show_cat_area<?php echo $this->_var['goods_cat']['id']; ?>">
    <?php endif; ?>
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_88500000_1479090660');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_88500000_1479090660']):
        $this->_foreach['cat_goods']['iteration']++;
?>
        <?php if ($this->_foreach['cat_goods']['iteration'] < 9): ?>
      <div class="goodsItem">
           <a href="<?php echo $this->_var['goods_0_88500000_1479090660']['url']; ?>"><img src="<?php echo $this->_var['goods_0_88500000_1479090660']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_88500000_1479090660']['name']); ?>" class="goodsimg" /></a>
           <div>
           <p class="name"><a href="<?php echo $this->_var['goods_0_88500000_1479090660']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_88500000_1479090660']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_88500000_1479090660']['short_name']); ?></a></p>
            <p><?php if ($this->_var['goods_0_88500000_1479090660']['promote_price'] != ""): ?><font class="snPrice "><?php echo $this->_var['goods_0_88500000_1479090660']['promote_price']; ?></font><?php else: ?><font class="snPrice "><?php echo $this->_var['goods_0_88500000_1479090660']['shop_price']; ?></font>
          <?php endif; ?></p>
           </div>
        </div>
         <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    </div>
 </div>
 
 
