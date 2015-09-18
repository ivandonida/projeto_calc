<<<<<<< HEAD
<html>
<CENTER>
<FORM NAME="Calc">
<TABLE BORDER=4 WIDTH="155" bgcolor="green">
	<TR>
		<TD ALIGN="CENTER">
			<INPUT TYPE="text"  NAME="Input" SIZE="16">
		</TD>
	</TR>
	<TR>
		<TD ALIGN="CENTER">
			<INPUT TYPE="button" NAME="one"
			VALUE="  1  " onClick="Calc.Input.value += '1'">
			<INPUT TYPE="button" NAME="two"
			VALUE="  2  " onClick="Calc.Input.value += '2'">
			<INPUT TYPE="button" NAME="three"
			VALUE="  3  " onClick="Calc.Input.value += '3'">
			<INPUT TYPE="button" NAME="plus"
			VALUE="  +  " onClick="Calc.Input.value += ' + '">
			<BR>
		</TD>
	</TR>
</TABLE>
</FORM>
</CENTER>
=======
<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">  
      <input type="submit" name="operacao" value="-"> 
         
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
   else if($op == '-')
         $c = $a - $b;
      
      echo "O resultado da operação é: $c";
   }

?>   
</body>
>>>>>>> teste
</html>
