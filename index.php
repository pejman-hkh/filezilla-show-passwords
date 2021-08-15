<style type="text/css">
	table {
		border-right: 1px solid #efefef;
	}

	table td {
		border-top: 1px solid #efefef;
		border-left: 1px solid #efefef;
		padding: 10px;
	}
</style>
<?
$xmlstr = file_get_contents('sitemanager.xml');

$a = simplexml_load_string($xmlstr);
?>
<table>
	
<?
foreach( $a->Servers->Server as $k => $s ) {
	
	echo "<tr>";
	echo '<td>'.$s->Host.'</td>';
	echo '<td>'.$s->Host.'</td>';
	echo '<td>'.$s->Port.'</td>';
	echo '<td>'.base64_decode($s->Pass).'</td>';

	echo "</tr>";
}

?>
</table>