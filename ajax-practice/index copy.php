<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax Practice</title>
  <style>
    .content {
      padding: 20px;
      background-color: #EEE;
    }
  </style>
</head>
<body>
  <h1>Load Text File</h1>
  <button id="btn1">Ajax Button</button><BR><BR>
  <div class="content" id="output1"></div>

  <h1>Load HTML</h1>
  <button id="btn2">Ajax Button</button><BR><BR>
  <div class="content" id="output2"></div>

  <h1>Load PHP</h1>
  <button id="btn3">Ajax Button</button><BR><BR>
  <input id="colorInput" type="text" placeholder="Background Color"><BR><BR>
  <div class="content" id="output3"></div>


  <script>
    // btn1 loads text
    document.getElementById('btn1').addEventListener( 'click', () => {
      // AJAX REQ
      var xmlhttp = new XMLHttpRequest();
      var method = 'GET';
      var url = 'text.txt';

      xmlhttp.open(method, url, true);
      xmlhttp.onload = function () {
        if( this.status == 200 ) {
          document.getElementById('output1').innerHTML = this.responseText;
        }
      };
      xmlhttp.send();
    });

    // btn2 loads HTML
    document.getElementById('btn2').addEventListener( 'click', () => {
      // AJAX REQ
      var xmlhttp = new XMLHttpRequest();
      var method = 'GET';
      var url = 'page.html';

      xmlhttp.open(method, url, true);
      xmlhttp.onload = function () {
        if( this.status == 200 ) {
          document.getElementById('output2').innerHTML = this.responseText;
        }
      };
      xmlhttp.send();
    });

    // btn3 loads PHP
    // PHP file loads colors of the rainbow
    document.getElementById('btn3').addEventListener( 'click', () => {
      // AJAX REQ
      var xmlhttp = new XMLHttpRequest();
      var method = 'GET';
      var url = 'page2.php';

      xmlhttp.open(method, url, true);
      xmlhttp.onload = function () {
        if( this.status == 200 ) {
          document.getElementById('output3').innerHTML = this.responseText;
        }
      };
      xmlhttp.send();
    });

    // Change background color of list 
    const listBackground = document.getElementById();;
    const colorInput = document.getElementById('colorInput');
    const colorValue = document.getElementById('colorInput').value;
    
    colorInput.addEventListener( 'keyup', (e) => {
      listBackground.style.backgroundColor = listBackground;
    });

  </script>
</body>
</html>