<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Welkom op mijn homepage</h1>
        <p>
            Kies één van de volgende pagina's om naartoe te gaan:<br/>
            <ul>
                <li>Home</li>
                <li><a href='<?=$_GET['basepath']?>/docent/Edwin+de+Vries'>Over mij</a></li>
                <li><a href='<?=$_GET['basepath']?>/klassen/Veilig+Programmeren'>Over de klas</a></li>
            </ul>
        </p>
    </body>
</html>
