<a href="http://php-ajax-code.blogspot.com/"><img src="images/php_ajax_code.gif" border=0></a><br><br>
<?     
     echo "<form name=sel>\n";
     echo "จังหวัด : <font id=province><select>\n";
     echo "<option value='0'>============</option> \n" ;
     echo "</select></font>\n";
     
     echo "อำเภอ : <font id=amper><select>\n";
     echo "<option value='0'>==== ไม่มี ====</option> \n" ;
     echo "</select></font>\n";
     
     echo "ตำบล : <font id=tumbon><select>\n";
     echo "<option value='0'>==== ไม่มี ====</option> \n" ;
     echo "</select></font>\n";
?>

<script language=Javascript>
function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
};

function dochange(src, val) {
     var req = Inint_AJAX();
     req.onreadystatechange = function () { 
          if (req.readyState==4) {
               if (req.status==200) {
                    document.getElementById(src).innerHTML=req.responseText; //รับค่ากลับมา
               } 
          }
     };
     req.open("GET", "locale.php?data="+src+"&val="+val); //สร้าง connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
     req.send(null); //ส่งค่า
}

window.onLoad=dochange('province', -1);     
</script>
