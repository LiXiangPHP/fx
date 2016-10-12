<?php if ($this->_var['pictures']): ?>
<div class="goods_gallery">
                            	<div id="gleft" class="up"><img  src="themes/suning/images/up.gif" onmouseover="this.src='themes/suning/images/up_on.gif'" onmouseout="this.src='themes/suning/images/up.gif'" /></div>
                                <div class="gcontent" id="goods_gallery">
                                	<ul>
                                    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                                    <li>
                                   <div><a href="javascript:;" onMouseOver="sw_goodsimg(this)"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></div>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                </div>
                                <div class="down" id="gright"><img  src="themes/suning/images/down.gif" onmouseover="this.src='themes/suning/images/down_on.gif'" onmouseout="this.src='themes/suning/images/down.gif'" /></div>
                            </div>
                               <script type="text/javascript">								
								var goods_gallery=new Marquee("goods_gallery");
								goods_gallery.Direction="up";
								goods_gallery.Step=0;
								goods_gallery.Width=100;
								goods_gallery.Height=412;
								goods_gallery.Timer=20;


								var turnleft = document.getElementById("gleft");
								var turnright = document.getElementById("gright");
								goods_gallery.Start();
								turnleft.onmouseover=function(){goods_gallery.Direction=0}
								turnleft.onmouseout=turnleft.onmouseup=function(){goods_gallery.Step=goods_gallery.BakStep}
								turnleft.onmousedown=turnright.onmousedown=function(){goods_gallery.Step=goods_gallery.BakStep+10}
								turnright.onmouseover=function(){goods_gallery.Direction=1}
								turnright.onmouseout=turnright.onmouseup=function(){goods_gallery.Step=goods_gallery.BakStep}
							    </script> 
                                
	  <?php endif; ?>
