@extends('layout')

@section('title', 'Task Manager')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Task Manager</h1>
            <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                + Add Task
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        @if ($tasks->count() === 0)
            <div class="bg-gray-100 border border-gray-300 rounded p-6 text-center">
                <p class="text-gray-600">No tasks yet. Create one to get started!</p>
            </div>
        @else
            <div class="space-y-3">
                @foreach ($tasks as $task)
                    <div class="flex items-center justify-between bg-white border border-gray-200 rounded p-4 hover:shadow-md transition">
                        <div class="flex-1">
                            <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="completed" value="{{ !$task->completed ? 1 : 0 }}">
                                <button type="submit" class="mr-3">
                                    <input type="checkbox" {{ $task->completed ? 'checked' : '' }} class="w-5 h-5 cursor-pointer">
                                </button>
                            </form>
                            <div class="inline-block">
                                <h3 class="text-lg font-semibold {{ $task->completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
                                    {{ $task->title }}
                                </h3>
                                @if ($task->description)
                                    <p class="text-gray-600 text-sm {{ $task->completed ? 'line-through' : '' }}">
                                        {{ $task->description }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                                Edit
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
