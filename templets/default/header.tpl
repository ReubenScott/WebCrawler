<a name=top></a>
<center>
<div id="header">
<div class="t">
				<div class="top">
				<div class="t_r">
<a href="<?=VV_URL?>ico.php">把本站放到桌面</a>
<a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage(this.href);return(false);" >设为主页</a>
<a href="javascript:window.external.AddFavorite('http://<?=$_SERVER ['HTTP_HOST']?>','<?=$webtitle?>')" >收藏本站</a>
					</div>
					<div class="t_l"></div>
					<div class="t_c"><script src="<?=VV_URL?>js/top.js" type="text/javascript"></script></div>
				</div>
			</div>
<div id="navbar">
<ul class="nav">
<li class="cur">
<a<?php if( $_GET['id']=='') echo ' class="cur"' ?> href="<?=VV_URL?>"><strong>首页</strong> </a>
</li>
<li><a<?php if( $_GET['id']=='zuixingangju') echo ' class="cur"' ?> href="<?=$lpath.'zuixingangju'.$hzm?>"><strong>香港电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='dianshiju') echo ' class="cur"' ?> href="<?=$lpath.'dianshiju'.$hzm?>"><strong>大陆电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='ouxiangju') echo ' class="cur"' ?> href="<?=$lpath.'ouxiangju'.$hzm?>"><strong>台湾电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='zuixinmeiju') echo ' class="cur"' ?> href="<?=$lpath.'zuixinmeiju'.$hzm?>"><strong>美国电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='zuixinhanju') echo ' class="cur"' ?> href="<?=$lpath.'zuixinhanju'.$hzm?>"><strong>韩国电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='zuixinriju') echo ' class="cur"' ?> href="<?=$lpath.'zuixinriju'.$hzm?>"><strong>日本电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='Anime') echo ' class="cur"' ?> href="<?=$lpath.'Anime'.$hzm?>"><strong>动漫天堂</strong></a></li>
<li><a<?php if( $_GET['id']=='taiguodianshiju') echo ' class="cur"' ?> href="<?=$lpath.'taiguodianshiju'.$hzm?>"><strong>东南亚电视剧</strong></a></li>
<li><a<?php if( $_GET['id']=='zongyijiemu') echo ' class="cur"' ?> href="<?=$lpath.'zongyijiemu'.$hzm?>"><strong>综艺娱乐</strong></a></li>

</ul>
</div>
<div id="search">
<div class="sform">
<ul>
<a href="<?=$lpath.'xijudianying'.$hzm?>">喜剧片</a> | 
<a href="<?=$lpath.'dongzuodianying'.$hzm?>">动作片</a> | 
<a href="<?=$lpath.'aiqingdianying'.$hzm?>">爱情片</a> | 
<a href="<?=$lpath.'juqingdianying'.$hzm?>">剧情片</a> | 
<a href="<?=$lpath.'kehuandianying'.$hzm?>">科幻片</a> | 
<a href="<?=$lpath.'kongbudianying'.$hzm?>">恐怖片</a> | 
<a href="<?=$lpath.'zhanzhengdianying'.$hzm?>">战争片</a>
</ul>
</div>
<div class="s_hot">
<form method="post" class="fm" action="<?=VV_URL?>search.php">
<input class="i" maxlength="80" name="key" />
<input type="submit"  value="搜索影片" class="btn" />
</form>
</div>
</div>
</div>
<div style="width:960px;">
<p>
<script src="<?=VV_URL?>js/dh.js" type="text/javascript"></script>
</p>
</div>