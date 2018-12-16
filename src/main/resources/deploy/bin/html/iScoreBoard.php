<html>
<script src="JQuery/jquery-1.9.1.js"></script><script src="JQuery/jquery-ui.js"></script>
<link href="table_sorter/css/theme.default.css" rel="stylesheet">
<script type="text/javascript" src="table_sorter/js/jquery.tablesorter.min.js"></script><script type="text/javascript" src="table_sorter/js/jquery.tablesorter.widgets.min.js"></script><script type="text/javascript">
$(function() {
	$( "#tabs" ).tabs();
	$('table').tablesorter({
			sortList: [[0,0]],
			widgets        : ['zebra', 'columns'],
			usNumberFormat : true,
			sortRestart    : true
	});
});
</script>
<body>
<table style="empty-cells:show;" id="veiwStandingTable" class="tablesorter" border="1px">
<thead>
<tr>
<th>Rank</th><th>Team Name</th><th>Solved</th><th>Time</th><th>Problem A</th><th>Problem B</th><th>Problem C</th><th>Problem D</th><th>Problem E</th><th>Problem F</th><th>Problem G</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td><td>team5</td><td>1</td><td>18</td><td style="text-align:center;background:#58FA58;border-color:white;">1/18</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>2</td><td>team10</td><td>1</td><td>83</td><td style="text-align:center;background:#58FA58;border-color:white;">3/63</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td>
</tr>
<tr>
<td>3</td><td>team8</td><td>1</td><td>157</td><td style="text-align:center;background:#58FA58;border-color:white;">5/77</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team1</td><td>0</td><td>0</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td>
</tr>
<tr>
<td>4</td><td>team2</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team3</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team4</td><td>0</td><td>0</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team6</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td>
</tr>
<tr>
<td>4</td><td>team7</td><td>0</td><td>0</td><td class="pending">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team9</td><td>0</td><td>0</td><td class="pending">1/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team11</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">4/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;background:#FF6666; border-color:white;">1/--</td>
</tr>
<tr>
<td>4</td><td>team12</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">4/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
<tr>
<td>4</td><td>team13</td><td>0</td><td>0</td><td style="text-align:center;background:#FF6666; border-color:white;">2/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td><td style="text-align:center;border-color:white;">0/--</td>
</tr>
</tbody>
</table>
</body>
</html>
