<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    @foreach($data as $data)
    <h4>USERS</h4>
    {{$data->Utilisateur}} - {{$data->MotDePasse}} - {{$data->Administrateur}}
    @endforeach
</body>

</html>