<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "root", "blogTimmy");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM Account 
  WHERE Nom LIKE '%".$search."%'
  OR Prenom LIKE '%".$search."%' 
  OR DateNaissance LIKE '%".$search."%' 
  OR Email LIKE '%".$search."%' 
  OR MotDePasse LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM Account ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Nom</th>
     <th>Prenom</th>
     <th>Date de naissance</th>
     <th>E-mail</th>
     <th>Mot de passe</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Nom"].'</td>
    <td>'.$row["Prenom"].'</td>
    <td>'.$row["DateNaissance"].'</td>
    <td>'.$row["Email"].'</td>
    <td>'.$row["MotDePasse"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Utilisateur introuvable !';
}

?>