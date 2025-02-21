@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold mb-4 text-violet-900">All Tasks</h1>
{{-- search and sort form --}}
<form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
<!-- Search Field -->
<input
type="text"
name="search"
value="{{ request('search') }}"
placeholder="Search tasks..."
class="bg-violet-300 m-auto text-white rounded border border-white px-2.5 py-0.5 placeholder-white hover:bg-sky-200 hover:border-blue-400"
>
<!-- Sort Options -->
<select name="sort" class="bg-violet-300 m-auto text-white rounded border border-white px-2.5 py-1 placeholder-white hover:bg-sky-200 hover:border-blue-400">
<option class="text-white" value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
Alphabetical
</option>
<option class="text-white" value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
Deadline
</option>
<option class="text-white" value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
Category
</option>
</select>
<button type="submit" class="bg-violet-500 text-white px-4 py-2 ml-2 rounded hover:bg-fuchsia-400">
Search & Sort
</button>
</form>
<ul>
@forelse($tasks as $task)
<li class="mb-2">
{{ $task->task_name }}
<!-- Link to the show page -->
<a href="{{ route('tasks.show', $task->id) }}" class="text-violet-400 underline ml-2 hover:text-fuchsia-500">
View
</a>
</li>
@empty
<li class="text-violet-700">No tasks yet.</li>
@endforelse
</ul>
<div class="mt-4">
<a href="{{ route('tasks.create') }}"
class="bg-violet-500 text-white px-4 py-2 rounded hover:bg-fuchsia-400">
Create a New Task
</a>
</div>
@endsection