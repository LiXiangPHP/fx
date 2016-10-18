<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META content=IE=EmulateIE7 http-equiv=X-UA-Compatible>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />


<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/SlideTrans.js"></script>
 <SCRIPT type=text/javascript>
window.pageConfig={
	compatible:true,
	navId:"home"
};
</SCRIPT>
<script type="text/javascript">
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
    bt[i].onmousemove=function(){
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
</head>
<body >
<?php echo $this->fetch('library/page_header_index.lbi'); ?>

<div class="block " style="overflow:hidden">
<?php echo $this->fetch('library/index_ad.lbi'); ?>

<div class="blank"></div>
<div class="index_l">

</div>
 <script type="text/javascript">
    <!--
    reg("com1");
    //-->
    </script>
<div class="index_r">


  <script type="text/javascript">
    <!--
    reg("com2");
    //-->
    </script>



<div class="blank"></div>
<script type="text/javascript">
//<![CDATA[

  var cycleList = ['ECS_tree1','ECS_tree2','ECS_tree3'];
  var tabFront = 'tabFront';
  var tabBack = 'tabBack';
  function cycleShow(obj)
  {
    var curObj;
    var curBody;
    for (i=0; i < cycleList.length; i++)
    {
      curObj = document.getElementById(cycleList[i]);
      curBody = document.getElementById(cycleList[i] + '_BODY');
      if (obj.id == curObj.id)
      {
        curObj.className = tabFront;
        curBody.style.display = "";
      }
      else
      {
        curObj.className = tabBack;
        curBody.style.display = "none";
      }
    }
  }

  // 添加事件
  for (i=0; i< cycleList.length; i++)
  {
    document.getElementById(cycleList[i]).onmousemove = function()
    {
      cycleShow(this);
    };
  }

//]]>
</script>


 

</div>
 
<div class="blank"></div>


<div class="index_l">


<div class="proGroup">
<div class="ff_1">
<h2 id="ECS_treea1" class="tabFront" >热销</h2>
<h2 id="ECS_treea2" class="tabBack"> 新品</h2>
<h2 id="ECS_treea3" class="tabBack">推荐商品</h2>
</div>
<div id="ECS_treea1_BODY">

<?php echo $this->fetch('library/recommend_best.lbi'); ?>

</div>
<div id="ECS_treea2_BODY" style="display:none;">

<?php echo $this->fetch('library/recommend_new.lbi'); ?>

</div>
<div id="ECS_treea3_BODY" style="display:none;">

<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

</div>



 

</div>

 
 <script type="text/javascript">
//<![CDATA[

  var cycleLista = ['ECS_treea1','ECS_treea2','ECS_treea3','ECS_treea4'];
  var tabFronta = 'tabFront';
  var tabBacka = 'tabBack';
  function cycleShowa(obj)
  {
    var curObja;
    var curBodya;
    for (i=0; i < cycleLista.length; i++)
    {
      curObja = document.getElementById(cycleLista[i]);
      curBodya = document.getElementById(cycleLista[i] + '_BODY');
      if (obj.id == curObja.id)
      {
        curObja.className = tabFront;
        curBodya.style.display = "";
      }
      else
      {
        curObja.className = tabBack;
        curBodya.style.display = "none";
      }
    }
  }

  // 添加事件
  for (i=0; i< cycleLista.length; i++)
  {
    document.getElementById(cycleLista[i]).onmousemove = function()
    {
      cycleShowa(this);
    };
  }

//]]>
</script>


 </div>


<div class="index_r">
<div class="snNoice snSub  f_r" style="height:290px;">
<div id="com3_b"  class="tit">
    <h2><a href="#">新品上市</a></h2>
    <h2 class=" h2bg"><a href="#">热卖商品</a></h2>
    <h2 class=" h2bg"><a href="#">精品推荐</a></h2>
 </div>   
<div id="com3_v" ></div>
<div id="com3_h">
<blockquote>

<?php echo $this->fetch('library/shoufa.lbi'); ?>

 </blockquote>

<blockquote>
<?php echo $this->fetch('library/remaisp.lbi'); ?>
<div style="margin: 5px 10px -1px;">


</div>
 </blockquote>
 
 <blockquote>
<?php echo $this->fetch('library/jingpintj.lbi'); ?>
 </blockquote>
</div>
</div>
  <script type="text/javascript">
    <!--
    reg("com3");
    //-->
    </script>

</div>


<div class="blank"></div>

<div class="index_l" style="width:1190px">

<div class="cat_box cat_box_1">
<?php echo $this->fetch('library/cat_1.lbi'); ?>

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>


 

</div>

</div>



<div class="blank"></div>






<div class="cat_box cat_box_2">
<?php echo $this->fetch('library/cat_2.lbi'); ?>

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

 

</div>









<div class="blank"></div>

<div class="cat_box cat_box_3">
<?php echo $this->fetch('library/cat_3.lbi'); ?>

<?php $this->assign('cat_goods',$this->_var['cat_goods_12']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_12']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>


 

</div>






<div class="blank"></div>





<div class="cat_box cat_box_4">
<?php echo $this->fetch('library/cat_4.lbi'); ?>



 

</div>




<div class="blank"></div>






<div class="cat_box  cat_box_5">
<?php echo $this->fetch('library/cat_5.lbi'); ?>



 

</div>


<div class="index_r zhai_no">



</div>


<div class="blank"></div>



<div class="index_r zhai_no">
<?php echo $this->fetch('library/cat_6.lbi'); ?>
</div>

<div class="blank"></div>


</div>

</div>


<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>

</body>
</html>
