<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>@csrf
        <?php foreach($tasks as $key => $task): ?>
        <li><a href="{{ 'show/' . $key }}"><?php echo $task; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
{{-- ctrl+shift+t --}}
