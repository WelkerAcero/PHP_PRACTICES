<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function mostrar(id) {
          obj = document.getElementById(id);
          obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
        }
    </script>
</head>
<body>
    <a href="#" onclick="mostrar('divTexto1'); return false" /><b>Haz click aquí amor</b></a>
<div id="divTexto1" style="visibility:hidden">
TE AMO!!
</div>

</body>
</html>