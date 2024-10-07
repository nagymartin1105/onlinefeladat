<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>{{ $foo }}</div> 
    <ul> 
    <?php foreach($tasks as $task) : ?> 
    <li><?= $task; ?></li> 
    <?php endforeach; ?> 
    </ul> 
</body>
</html>