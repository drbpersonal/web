<table border=1 cellspacing=0 cellpadding='10'>
<tbody>
<?php
$sum=0;
$bill=[1=>["P_name"=>"laptop","Price"=>100000.9,"Qty"=>10],
2=>["P_name"=>"Mobile","Price"=>10000.1,"Qty"=>100],
3=>["P_name"=>"Tablet","Price"=>75000,"Qty"=>1000]];
echo"<th>S.NO</th>";
echo"<th>P_name</th>";
echo"<th>Price</th>";
echo"<th>Qty</th>";
echo"<th>Total</th>";

foreach($bill as $key=>$value){
$total=$value['Qty']*$value['Price'];
echo"<tr>";
echo"<td>".$key."</td>";
echo"<td>".$value['P_name']."</td>";
echo"<td>".$value['Price']."</td>";
echo"<td>".$value['Qty']."</td>";
echo"<td>".$total."</td>";
$sum+=$total;
echo"</tr>";
}
echo"<tr>";
echo "<td colspan='4' align='right'>Sum</td>";
echo "<td>$sum</td>";
echo "</tr>";
?>
</tbody>
</table>