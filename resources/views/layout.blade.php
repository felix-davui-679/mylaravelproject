<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-blue-600">
                    <a href="{{ route('tasks.index') }}">Task Manager</a>
                </h2>
                <div class="flex gap-4">
                    <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-800">Tasks</a>
                    <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>
