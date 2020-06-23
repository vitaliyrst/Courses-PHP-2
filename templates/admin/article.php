<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/templates/css/style.css">
    <title><?php echo $this->article->title; ?></title>
</head>
<body>
<a href="/admin/index.php">Перейти на главную страницу админ-панели</a>

<div>
    <h2>Редактировать новость</h2>
    <form action="/admin/updateArticle.php" method="post">
        <input type="text" name="id" value="<?php echo $this->article->id; ?>" hidden size="120">
        Название:<br><input type="text" name="title" size="120"><br>
        Текст:<br><input type="text" name="content" size="120"><br>
        Автор:<br><select name="author_id">
            <option value="1">Станислав Иванейко</option>
            <option value="2">Никита Мелкозеров</option>
            <option value="3">Татьяна Ошуркевич</option>
            <option value="4">Андрей Рудь</option>
            <option value="5">Виталий Олехнович</option>
        </select><br><br>
        <button type="submit" value="<?php $this->article->id; ?>">Редактировать</button>
        <br><br><br>
    </form>
</div>

<div>
    <h2><?php echo $this->article->title; ?></h2>
    <?php echo $this->article->content; ?><br><br>
    Автор: <?php echo $this->article->author->name; ?>
</div>

</body>
</html>