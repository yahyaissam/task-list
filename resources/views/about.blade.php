<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>hello <?php echo "$name" ?></h1>
    <form action="store" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <button type="submit">Send</button>
    </form>
    </center>
    
</body>
</html>