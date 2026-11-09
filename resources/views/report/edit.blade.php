<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование заявления</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>Нарушений нет</header>
    <main>
        <h1>Редактирование заявления</h1>
        <form method="POST" action="{{ route('reports.update', $report->id) }}">
            @csrf
            @method('PUT')
            <p>
                <label for="number">Номер автомобиля</label><br>
                <input type="text" id="number" name="number" value="{{ old('number', $report->number) }}" maxlength="255" required>
                @error('number')
                    <span class="error">{{ $message }}</span>
                @enderror
            </p>
            <p>
                <label for="description">Описание нарушения</label><br>
                <textarea id="description" name="description" rows="6" required>{{ old('description', $report->description) }}</textarea>
                @error('description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </p>
            <button type="submit">Обновить</button>
        </form>
        <p><a href="{{ route('reports.index') }}">К списку заявлений</a></p>
    </main>
</body>
</html>
