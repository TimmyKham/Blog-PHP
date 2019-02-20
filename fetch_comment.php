<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "root", "blogTimmy");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM Account INNER JOIN Comment ON Account.id = Comment.id_compte 
  WHERE commentaire LIKE '%".$search."%'
  OR date_commentaire LIKE '%".$search."%'
  OR Nom LIKE '%".$search."%'
  OR Prenom LIKE '%".$search."%'
   ";
}
else
{
 $query = "SELECT * FROM Account INNER JOIN Comment ON Account.id = Comment.id_compte ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 
    <tr>
     <th>Nom</th>
     <th>Prenom</th>
     <th>Commentaires</th>
     <th>Dates de publication</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Nom"].'</td>
    <td>'.$row["Prenom"].'</td>
    <td>'.$row["commentaire"].'</td>
    <td>'.$row["date_commentaire"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Commentaire introuvable !';
}

?>