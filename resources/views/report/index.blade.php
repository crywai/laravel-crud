<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список заявлений</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>Нарушений нет</header>
    <main>
        <h1>Список заявлений</h1>
        @foreach ($reports as $report)
            <div class="report">
                <h2>{{ $report->number }}</h2>
                <p>{{ $report->description }}</p>
                <p>Дата создания: {{ $report->created_at }}</p>
            </div>
        @endforeach
    </main>
    <footer>Грибунова Виктория Евгеньевна, {{ date('Y') }}</footer>
</body>
</html>
