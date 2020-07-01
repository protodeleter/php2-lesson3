<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <h1>Товары</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th> Заголовок </th>
            <th> Контент </th>
            <th> Автор </th>
        </tr>

        <?php foreach ($this->news as $news) : ?>
        <tr>
            <td><?php echo $news->id; ?></td>
            <td><?php echo $news->Title; ?></td>
            <td><?php echo $news->Content; ?></td>
            <td><?php echo $news->Content; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>
