<a href="http://php-ajax-code.blogspot.com/"><img src="images/php_ajax_code.gif" border=0></a><br><br>
<?     
     echo "<form name=sel>\n";
     echo "�ѧ��Ѵ : <font id=province><select>\n";
     echo "<option value='0'>============</option> \n" ;
     echo "</select></font>\n";
     
     echo "����� : <font id=amper><select>\n";
     echo "<option value='0'>==== ����� ====</option> \n" ;
     echo "</select></font>\n";
     
     echo "�Ӻ� : <font id=tumbon><select>\n";
     echo "<option value='0'>==== ����� ====</option> \n" ;
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
                    document.getElementById(src).innerHTML=req.responseText; //�Ѻ��ҡ�Ѻ��
               } 
          }
     };
     req.open("GET", "locale.php?data="+src+"&val="+val); //���ҧ connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
     req.send(null); //�觤��
}

window.onLoad=dochange('province', -1);     
</script>
