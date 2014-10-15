<?php

$cachesize = getRealSize(getDirSize(VV_CACHE));

if ($cachesize>$delcache){ // 大于$delcache MB 将自动删除缓存

@removedir(VV_CACHE);

}

?>