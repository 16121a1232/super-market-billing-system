<?php
  session_start();
  if(!(isset($_SESSION["uname"])&&isset($_SESSION["pass"])))
  {
	  header('Location: login.html');
  }
?>
<html>
<head>
<title>SUPERMARKET BILLING SYSTEM</title>
<script>
  function study(){
    if(document.getElementById('std').value=='pen'){
	 f.cost1.value=10;
	}
	else if(document.getElementById('std').value=='pencil'){
	 f.cost1.value=5;
	}
	else if(document.getElementById('std').value=='paper'){
	 f.cost1.value=2;
	}
	else if(document.getElementById('std').value=='book'){
	 f.cost1.value=30;
	}
	else if(document.getElementById('std').value=='eraser'){
	 f.cost1.value=4;
	}
	f.quant1.value=0;
	f.total1.value=0;
	var a2=f.total2.value;
    var a3=parseInt(a2);
    var b2=f.total3.value;
    var b3=parseInt(b2);
    var d=a3+b3;
    f.total.value=d;
  }
  function studytot(){
   var a=f.cost1.value;
   var a1=parseInt(a);
   var b=f.quant1.value;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total1.value=c;
   var a2=f.total2.value;
   var a3=parseInt(a2);
   var b2=f.total3.value;
   var b3=parseInt(b2);
   var d=c+a3+b3;
   f.total.value=d;
  }
  function food(){
   if(document.getElementById('fd').value=='fruits'){
	f.cost2.value=10;
   }
   else if(document.getElementById('fd').value=='vegetables'){
	f.cost2.value=5;
   }
   else if(document.getElementById('fd').value=='pulses'){
	f.cost2.value=2;
   }
   else if(document.getElementById('fd').value=='spices'){
	f.cost2.value=30;
   }
   else if(document.getElementById('fd').value=='rice'){
	f.cost2.value=4;
   }
   f.quant2.value=0;
   f.total2.value=0;
   var a2=f.total1.value;
   var a3=parseInt(a2);
   var b2=f.total3.value;
   var b3=parseInt(b2);
   var d=a3+b3;
   f.total.value=d;
  }
  function foodtot(){
   var a=f.cost2.value;
   var a1=parseInt(a);
   var b=f.quant2.value;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total2.value=c;
   var a2=f.total1.value;
   var a3=parseInt(a2);
   var b2=f.total3.value;
   var b3=parseInt(b2);
   var d=c+a3+b3;
   f.total.value=d;
  }
  function fashion(){
    if(document.getElementById('fn').value=='clothes'){
	 f.cost3.value=100;
	}
	else if(document.getElementById('fn').value=='cosmetics'){
	 f.cost3.value=50;
	}
	else if(document.getElementById('fn').value=='choclates'){
	 f.cost3.value=40;
	}
	else if(document.getElementById('fn').value=='biscuits'){
	 f.cost3.value=20;
	}
	else if(document.getElementById('fn').value=='noodles'){
	 f.cost3.value=10;
	}
	f.quant3.value=0;
	f.total3.value=0;
	var a2=f.total1.value;
    var a3=parseInt(a2);
    var b2=f.total2.value;
    var b3=parseInt(b2);
    var d=a3+b3;
    f.total.value=d;
  }
  function fashiontot(){
   var a=f.cost3.value;
   var a1=parseInt(a);
   var b=f.quant3.value;
   var b1=parseInt(b);
   var c=a1*b1;
   f.total3.value=c;
   var a2=f.total1.value;
   var a3=parseInt(a2);
   var b2=f.total2.value;
   var b3=parseInt(b2);
   var d=c+a3+b3;
   f.total.value=d;
  }  
  function display(){
   if(document.getElementById('t1').value != 0){
   document.getElementById('i11').innerHTML=document.getElementById('std').value;
   document.getElementById('i12').innerHTML=document.getElementById('c1').value;
   document.getElementById('i13').innerHTML=document.getElementById('q1').value;
   document.getElementById('i14').innerHTML=document.getElementById('t1').value;
   }else{
    document.getElementById('tr1').style.display= 'none';
   }
   if(document.getElementById('t2').value != 0){
   document.getElementById('i21').innerHTML=document.getElementById('fd').value;
   document.getElementById('i22').innerHTML=document.getElementById('c2').value;
   document.getElementById('i23').innerHTML=document.getElementById('q2').value;
   document.getElementById('i24').innerHTML=document.getElementById('t2').value;
   }else{
    document.getElementById('tr2').style.display= 'none';
   }
   if(document.getElementById('t3').value != 0){
   document.getElementById('i31').innerHTML=document.getElementById('fn').value;
   document.getElementById('i32').innerHTML=document.getElementById('c3').value;
   document.getElementById('i33').innerHTML=document.getElementById('q3').value;
   document.getElementById('i34').innerHTML=document.getElementById('t3').value;
   }else{
    document.getElementById('tr3').style.display= 'none';
   }
   document.getElementById('i41').innerHTML=document.getElementById('t').value;
   /*var x = document.getElementById("d");
    if (x.style.display === "none") {
        x.style.display = "block";
    } */
  }
</script>
</head>
<body bgcolor="pink">
<br><br>
<h1 align=center color=blue><i>SUPERMARKET BILLING SYSTEM</i></h1>
<p align='right'><a href='login.html'>logout</a></p>
<hr><br><br>
<form name=f method="post" action="sm.php">
<table name="list" align="center">
<tr>
<td width="250" align="center"><h2>Item</h2></td>
<td width="250" align="center"><h2>Cost</h2></td>
<td width="250" align="center"><h2>Quantity</h2></td>
<td width="250" align="center"><h2>Total Cost</h2></td>
</tr>

<tr>
<td width="250" align="center">
<select style="width:100;" name="ast" id="std" onclick="study()">
<option align=center value="">Study</option>
<option id="s1" value="pen">pen</option>
<option id="s2" value="pencil">pencil</option>
<option id="s3" value="paper">paper</option>
<option id="s4" value="book">book</option>
<option id="s5" value="eraser">eraser</option>
</select></td>
<td width="250" align="center">
	<input type="text" id='c1' name="cost1" value="0" readonly >
</td>
<td width="250" align="center">
	<input type="text" id='q1' name="quant1" value="0" onblur="studytot()">
</td>
<td width="250" align="center">
	<input type="text" id='t1' name="total1" value="0" readonly>
</td>
</tr>

<tr>
<td width="250" align="center">

<select style="width:100;" name="arr" id="fd" onclick="food()">
<option align=center value="">Food</option>
<option id="v1"  value="fruits">fruits</option>
<option id="v2"  value="vegetables">vegetables</option>
<option id="v3"  value="pulses">pulses</option>
<option id="v4"  value="spices">spices</option>
<option id="v5"  value="rice">rice</option>
</select></td>
<td width="250" align="center">
<input type="text" id='c2' name="cost2" value="0" readonly>
</td>
<td width="250" align="center">
<input type="text" id='q2' name="quant2" value="0" onblur="foodtot()">
</td>
<td width="250" align="center">
<input type="text" id='t2' name="total2" value="0" readonly>
</td>
</tr>

<tr>
<td width="250" align="center">
<select style="width:100;" name="arth" id="fn" onclick="fashion()">
<option value="" >Fashions</option>
<option id="f1" value="clothes">clothes</option>
<option id="f2" value="cosmetics">cosmetics</option>
<option id="f3" value="choclates">choclates</option>
<option id="f4" value="biscuits">biscuits</option>
<option id="f5" value="noodles">noodles</option>
</select></td>
<td width="250" align="center">
<input type="text" id='c3' name="cost3" value="0" readonly>
</td>
<td width="250" align="center">
<input type="text" id='q3' name="quant3" value="0" onblur="fashiontot()">
</td>
<td width="250" align="center">
<input type="text" id='t3' name="total3" value="0" readonly>
</td>
</tr>

<tr align="center"><td></td><td></td>
<td>Total Amount:</td>
<td><input type="text" name="total" id='t' value="0" readonly></td></tr>

</table>

<center>
<input style="width:100;height:30;background-color:#00ff00;" type="submit" name="buy" value="Buy"></button>
</center>

<br><hr>
</form>

</body>
</html>