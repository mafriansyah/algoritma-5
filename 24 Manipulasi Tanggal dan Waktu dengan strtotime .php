<?php
$tomorrow = strtotime("tomorrow");
echo date('Y-m-d', $tomorrow);

$nextWeek = strtotime("+1 week");
echo date('Y-m-d', $nextWeek);
echo "<p><i><strong>By:M.Afriansyah</strong>";

?>