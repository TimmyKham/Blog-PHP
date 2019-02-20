<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "root", "blogTimmy");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM Article INNER JOIN Category ON Article.id_cat = Category.idCategory
  WHERE titre LIKE '%".$search."%'
  OR date_article LIKE '%".$search."%'
  OR typeCat LIKE '%".$search."%'
   ";
}
else
{
 $query = "SELECT * FROM Article INNER JOIN Category ON Article.id_cat = Category.idCategory";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 
    <tr>
     <th>Articles</th>
     <th>Publication</th>
     <th>Categories</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["titre"].'</td>
    <td>'.$row["date_article"].'</td>
    <td>'.$row["typeCat"].'</td>
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