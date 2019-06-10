<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Over de klas</title>
    </head>
    <body>
        <h1>Zo ziet mijn <?=str_replace("+", " ", $_GET['v1'])?> klas eruit</h1>
        <img src="<?=$_GET['imgpath']?>/img/mijnklas.jpg" alt="mijn klas" style="width:600px; height: auto;"/>
        
        <p>
            Kies één van de volgende pagina's om naartoe te gaan:<br/>
            <ul>
                <li><a href='<?=$_GET['basepath']?>/'>Home</a></li>
                <li><a href='<?=$_GET['basepath']?>/docent/Edwin+de+Vries'>Over mij</a></li>
                <li>Over de klas</li>
            </ul>
        </p>
    </body>
</html>
