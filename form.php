<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="form.php" oninput="x.value = parseInt(a.value)+parseInt(b.value)">
      <input type="range" name="a" id="a" value="50" oninput="showValueofA()" />
      <span id="a_value"></span> + 
      <input type="number" name="b" id="b" value="50">
      <output name= 'x' for ="a b"></output>
      <br /><br />
      <input type="submit" name="submit" />
    </form>
  </body>
  <script>
    function showValueofA(){
      var a_element = document.getElementById('a_value');
      a_element.innerHTML = document.getElementById('a').value
    }
  </script>
</html>
