<?php
$ord_array = array('desc','asc'); // 정렬 방법 (내림차순, 오름차순)
$ord_arrow = array('▼','▲'); // 정렬 구분용
$ord = isset($_REQUEST['ord']) && in_array($_REQUEST['ord'],$ord_array) ? $_REQUEST['ord'] : $ord_array[0]; // 지정된 정렬이면 그 값, 아니면 기본 정렬(내림차순)
$ord_key = array_search($ord,$ord_array); // 해당 키 찾기 (0, 1)
$ord_rev = $ord_array[($ord_key+1)%2]; // 내림차순→오름차순, 오름차순→내림차순
?><a href="?ord=<?php echo $ord_rev; ?>">등록일<?php echo $ord_arrow[$ord_key]; ?></a>
