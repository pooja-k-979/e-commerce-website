<html>
    <head>
        <title>contact us </title>
        <!--minifies bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="ec_style.css" type="text/css" rel="stylesheet"/>
        
    </head>
    <body>
        
        <div class="container">
        <button onclick="document.getElementById('id01').style.display='block'"
class="w3-button">Open Modal</button>
        </div>   
        
        <div id="id01" class="w3-modal modal">
  <div class="w3-modal-content modalcontent">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div>
        
        
        
    </body>

