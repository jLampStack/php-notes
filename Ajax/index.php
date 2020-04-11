<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-C++cugH8+Uf86JbNOnQoBweHHAe/wVKN/mb0lTybu/NZ9sEYbd+BbbYtNpWYAsNP" crossorigin="anonymous">
  <title>Search User</title>
</head>
<body>
  <div class="container">
    <h2>Search Users</h2>
      <form>
      <div>
        <input type="text" id="text" name="search" onkeyup="showSuggestions(this.value)">

      </div>
    </form>
    <BR>
    <p>Suggestions: <span id="output" style="font-weight:bold"> </span></p>
  </div>

  <script>

  function showSuggestions( string ) {
    if( string.length == 0) {
      document.getElementById('output').innerHTML = '';
    } else {
      // AJAX REQ
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      }
      xhr.open( 'GET', 'suggest.php?q='+string, true);
      xhr.send();
  }
}  


  </script>
</body>
</html>