<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Over mij</title>
    </head>
    <body>
        <h1>Dit ben ik, en mijn naam is <?=str_replace("+", " ", $_GET['v1'])?> </h1>
        <img src="<?=$_GET['imgpath']?>/img/me.jpg" alt="mijn klas" style="width:400px; height: auto;"/>
                
        <p>
            Kies één van de volgende pagina's om naartoe te gaan:<br/>
            <ul>
                <li><a href='<?=$_GET['basepath']?>/'>Home</a></li>
                <li>Over mij</li>
                <li><a href='<?=$_GET['basepath']?>/klassen/Veilig+Programmeren'>Over de klas</a></li>
            </ul>
        </p>
    </body>
</html>
