<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularz</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">-->
	<!--<script src="js/jquery-1.11.1.min.js"><script>-->
	<!--<script src="js/jquery-1.11.1.min.js"><script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
     
      
     <div class="row">
  <div class="col-sm-12">

         
<?php
require_once 'controllers/Index.php';



$i=0;
?><table class="table table-sm table-dark" bordercolor="green" style="width: 100%; height: 5em" >
<tr><td style="width: 5%;">Id: </td>
<td style="width:12%;" >Imie: </td>
<td style="width:12%;" >Nazwisko: </td>
<td style="width:15%;"  >Zawód:</td>
<td style="width:15%;" >Numer telefonu: </td>
<td style="width:15%;" >Data urodzenia: </td>
<td style="width:15%;" >Email:</td>
<td style="width:11%;" >Edycja:</td>
</tr><?php
While(isset($User[$i]))
  {
 ?>
  

<table class="table table-hover" bordercolor="green"  style="width: 100%; height: 5em">
<tr>
<td style="width:5%;" ><?= $User[$i] -> id?></td>
<td style="width:12%;"  > <?= $User[$i] -> imie ?></td>
<td style="width:12%;"  > <?= $User[$i] -> nazwisko ?></td>
<td style="width:15%;"  > <?= $User[$i] -> zawod ?></td>
<td style="width:15%;" > <?= $User[$i] -> nr_telefonu ?></td>
<td style="width:15%;"  > <?= $User[$i] -> data_ur ?></td>
<td style="width:15%;" > <?= $User[$i] -> email ?></td>
<td style="width:11%;" ><form action="edit" method="post">
	       <input type="hidden" name="id" value=<?php echo $User[$i] -> id ; ?> />

	   <input type="submit" class="btn btn-success" name="edytuj" value= "Edytuj"/>
        </form></td></tr>


</table>
<!--<form action="edit" method="post">
	       <input type="hidden" name="id" value=<1?php echo $User[$i] -> id ; ?> />

	   <input type="submit" class="btn btn-success" name="edytuj" value= "Edytuj"/>
        </form>-->
<?php

$i++;}?>
               <!-- <br><i>Imie: <1?= $this -> User[0] -> imie ?></i></br>
                <br><i>Nazwisko: <1?= $this -> User[0] -> nazwisko ?></i></br>
                <br><i>Zawód: <1?= $this -> User[0] -> zawod ?></i></br>
                <br><i>Numer telefonu: <1?= $this -> User[0] -> nr_telefonu ?></i></br>
                <br><i>Data urodzenia: <1?= $this -> User[0] -> data_ur ?></i></br>
                <br><i>Email: <1?= $this -> User[0] -> email ?></i></br>-->

                <form action="/mvc/Index/news" method="post">

<input type="submit" class="btn btn-success" value="powrót do formularza" />
    </form>
</div>
 </div>
    </div>
</body>

</html>