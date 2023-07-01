<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Messaggio</title>
</head>
<body>

    <h1>Nuovo Messaggio per Admin</h1>

    <h3> Da: {{ lead.name }} {{ lead.lastname }}</h3>

    <h3>Messaggio:</h3>
    <p>{!! lead.message !!}</p>

</body>
</html>
