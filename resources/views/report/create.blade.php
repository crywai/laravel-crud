<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>Нарушений нет</header>
    <main>
        <h1>Создание заявления</h1>
        <p>Форма создания будет добавлена на следующем этапе.</p>
        <a href="{{ route('reports.index') }}">К списку заявлений</a>
    </main>
</body>
</html>
