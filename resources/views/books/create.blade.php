<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos knjige</title>
</head>
<body>
    
<form   action="{{route('books.store')}}" method="post">

@csrf

  <label for="naslov">Naslov knjige:</label><br>
  <input type="text" id="naslov" name="naslov"><br>
  <label for="autor">Autor knjige:</label><br>
  <input type="text" id="autor" name="autor"><br>
  <label for="autor">ISBN:</label><br>
  <input type="text" id="isbn" name="isbn"><br>
  <label for="opis">Opis:</label><br>
  <input type="text" id="opis" name="opis"><br>

  <input type="submit" value="Unesi">

</form>






</body>
</html>