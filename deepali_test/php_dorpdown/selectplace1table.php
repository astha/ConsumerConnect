<?
$bnblink = mysql_connect('localhost', 'root', '1234') ;
mysql_select_db('mydb');
?>
<html>
<head>
<title>Selecting yaarr...</title>

<script language="javascript">
function change()
{
 if(document.form1.state.value=="")
 {
 alert("Please Select State");
 document.form1.state.focus();
 return false;
 }
  else if(document.form1.city.value=="")
 {
 alert("Please Select City");
 document.form1.city.focus();
 return false;
 }
 window.location='selectplace1table.php?stateid='+document.form1.state.value+'&cityid='+document.form1.city.value;
}
</script>

</head>

<body>
<?
$res_c=mysql_query("select * from onetable");

echo "<script language=javascript>\n";
echo "function chgitems1()\n";
echo "{\n";
echo "var d=document.form1;\n";
echo "if(d.state.value==0)\n";
echo "{\n";
echo "d.city.options.length = 0;\n";
echo "d.city.options[0]=new Option(\"Select City\",\"\")\n";
echo "}\n";
while($row_c=mysql_fetch_array($res_c,MYSQL_BOTH))
{
echo "if(d.state.value==".$row_c['id'].")\n";
echo "{\n";
echo "d.city.length=0;\n";
$sub_res=mysql_query("SELECT * from onetable where pid=".$row_c['id']." order by name");  
$i=1;
echo "d.city.options[0]=new Option(\"Select City\",\"\")\n";
while($sub_row=mysql_fetch_array($sub_res,MYSQL_BOTH))
{
echo "d.city.options[".$i."]=new Option('".$sub_row['name']."','".$sub_row['id']."');\n";
$i=$i+1;
}
echo "}\n";
}
echo "}";

echo "function chgitems2()\n";
echo "{\n";
echo "var p=document.form1;\n";
echo "if(p.city.value==0)\n";
echo "{\n";
echo "p.place.options.length = 0;\n";
echo "p.place.options[0]=new Option(\"Select Place\",\"\")\n";
echo "}\n";
$res_c=mysql_query("select * from onetable");
while($row_p=mysql_fetch_array($res_c,MYSQL_BOTH)){
echo "if(p.city.value==".$row_p['id'].")\n";
echo "{\n";
echo "p.place.length=0;\n";
$sub_res=mysql_query("SELECT * from onetable where pid=".$row_p['id']." order by name");  
$i=1;
echo "p.place.options[0]=new Option(\"Select Place\",\"\")\n";
while($sub_row=mysql_fetch_array($sub_res,MYSQL_BOTH)){
echo "p.place.options[".$i."]=new Option('".$sub_row['name']."','".$sub_row['id']."');\n";
$i=$i+1;
}
echo "}\n";
}
echo "}";
echo "</script>\n";
?>
<tr><td>
<table width="90%"  border="0" align="center" cellpadding="1" cellspacing="0">
      <tr>
        <td valign="top" bgcolor="#010E33"><table width="100%"  border="0" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
          <tr align="center">
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr align="center">
            <td colspan="3"><form action="" method="post" name="form1">
                <table width="70%"  border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td width="46%" align="right"><span class="mtext5">Select State</span> </td>
                    <td width="2%" align="center" class="mtext5">:</td>
                    <td width="52%"><select name="state" class="input_form" style="width:150"  onChange="chgitems1();">
                      <option value="" selected>Select State</option>
                      <?
/*$state=$_POST['state1']; */


$query1=mysql_query("SELECT * FROM onetable where pid='0'");
$cnt=mysql_num_rows($query1);
if($cnt>0)
{ 
while($list1=mysql_fetch_array($query1))
{
echo "<option value='$list1[id]' >$list1[name]</option>";
}
}
?>
                    </select></td>
                  </tr>
                  <tr>
                    <td width="46%" align="right" class="mtext5"><span class="mtext5">Select City</span> </td>
                    <td width="2%" align="center" class="mtext5">:</td>
                    <td width="52%"><select name="city" class="input_form" style="width:150" onChange="chgitems2();">
                        <option value="" selected>Select City</option>
                        <? if(!empty($_GET['stateid'])  )
						 {
						  /*?>getcity($_GET['stateid'],$_GET['cityid'])
						  {<?php */
					
						  $query1=mysql_query("SELECT * FROM onetable where pid='".$_GET['stateid']."'");
$cnt=mysql_num_rows($query1);
if($cnt>0)
{ 
while($list1=mysql_fetch_array($query1))
{
echo "<option value='$list1[id]' >$list1[name]</option>";
}
}
						  }
						   ?>
                      </select>                    </td>
                  </tr>
	  
				  
				  <tr><td width="46" align="center">
				  
				  </td></tr>
				  <tr>
                    <td width="46%" align="right" class="mtext5"><span class="mtext5">Select Place</span> </td>
                    <td width="2%" align="center" class="mtext5">:</td>
                    <td width="52%"><select name="place" class="input_form" style="width:150" onChange="return change(this)">
                      <option value="" selected>Select Place</option>
                      <? if(!empty($_GET['stateid']) && !empty($_GET['cityid']))
						 {
						  /*?>getcity($_GET['stateid'],$_GET['cityid'])
						  {<?php */
					
						  $query1=mysql_query("SELECT * FROM onetable where pid='".$_GET['cityid']."'");
$cnt=mysql_num_rows($query1);
if($cnt>0)
{ 
while($list1=mysql_fetch_array($query1))
{
echo "<option value='$list1[id]' >$list1[name]</option>";
}
}
						  }
						   ?>
                    </select></td>
                  </tr>
	  <tr><td width="46" align="center">
				  
				  </td></tr>
                </table>
				
            </form></td></tr>
			</table>
			</td></tr>
</body>
</html>