<?php
session_start();
if (!isset($_SESSION['username'])) {
    include("header.php");
} else {
    include("header1.php");
}
?>
<br><br>
<html>
<body>
<table width=100%>
    <tr>
        <td>
            <?php
            $cn = mysqli_connect("localhost", "root", "", "online");

            $id = $_GET['id'];

            $q = mysqli_query($cn, "select * from dryfruit where id='$id' or nm like'%" . $id . "%'");
            while ($r = mysqli_fetch_array($q)) {
                echo "<table border=1 width=70% align='center'>";
                echo "<tr><td align=center><img src='image/" . $r[6] . "' width=200px height=200px></td>
				<td align=center>
				<li type='none'><font size='+3' color='maroon'> Name: <font size='+3' color='black'>" . $r[1] . "</li> </font>
				<li type='none'><font size='+3' color='maroon'> Price For 100GM: <font size='+3' color='black'> Rs." . $r[4] . "</li>
				<li type='none'> <font size='+3' color='maroon'>Category :<font size='+3' color='black'>" . $r[5] . "</font></li>";

                echo "<form action='orderplace.php' method='POST'>
				<input type='hidden' name='id' value='" . $r[0] . "'>
				<label>Unit</label>
				<select name='unit' id='unitSelect' onchange='updateQtyValue(this.value)' style='width: 75px; height: 35px;'>
					<option value='100 GM'>100 GM</option>
					<option value='200 GM'>200 GM</option>
					<option value='500 GM'>500 GM</option>
					<option value='1 KG'>1 KG</option>
					<option value='2 KG'>2 KG</option>
				</select>
				<input type='text' name='qty' id='qtyInput' value='1' size='3' style='width: 75px; height: 35px;' readonly>
				<input type='submit' name='ordsubmit' value='OrderNow' size='3' style=font-size:13px;border-color:#6faaff;color:white;background:#6faaff;border-radius:10px;margin:1px;padding:8px;border-width:10px>
				</form>";
                echo "</td></tr></table>";
            }
            ?>
        </td>
    </tr>
</table>
</body>
<script>
    function updateQtyValue(selectedValue) {
        var qtyInput = document.getElementById('qtyInput');
        if (selectedValue === '200 GM') {
            qtyInput.value = '2';
        } else if (selectedValue === '500 GM') {
            qtyInput.value = '5';
		}else if (selectedValue === '2 KG') {
            qtyInput.value = '20';
        } else if (selectedValue === '1 KG') {
            qtyInput.value = '10';
        } else {
            qtyInput.value = '1';
        }
    }
</script>
</html>
<br><br><br><br>
<?php include("footer.php");?>