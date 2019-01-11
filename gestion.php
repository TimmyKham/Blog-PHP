<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Gestion Utilisateur</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/gestion.css">
 </head>
 <body background="images/blurblogtimmy.jpg">
  <div class="container"><br/>
    <h1 align="center">Utilisateurs Blog Timmy</h1><br />
      <div class="form-group">
        <div class="input-group">
            <input type="text" name="search_text" id="search_text" placeholder="Effectuez une recherche" class="form-control" />
        </div>
      </div><br />
      <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"js/fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
