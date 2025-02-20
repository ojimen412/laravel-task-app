@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-4">
<h1 class="text-2xl font-bold mb-4">Create New Task</h1>
<form action="" method="POST">
@csrf
{{-- Task Name --}}
<div class="mb-4">

<label for="task_name">Task Name</label>
<input require type="text" name="task_name" id="task_name" placeholder="Take out the TrASH">

</div>
{{-- Task Location --}}
<div class="mb-4">



<label for="task_location">Location</label>
<input type="text" name="task_location" id="task_location" placeholder="Kitchen">

</div>
{{-- Time Estimate (or Time Complexity) --}}
<div class="mb-4">

<label for="time_complexity">Time Estimate</label>
<select type="text" name="time_complexity" id="time_complexity" >
<option>10 min</option>
<option>30 min</option>
<option>1 hour</option>

</div>

<div class="mb-4">

<label for="materials_required">Materials Required</label>
<input type="text" name="materials_required" id="materials_required" placeholder="Broom">

</div>

<div class="mb-4">

<label for="deadline">Deadline</label>
<input type="datetime-local" name="deadline" id="deadline">

</div>
{{-- Priority (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Priority" (<label for="priority">Priority</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> for name="priority".
- Provide <option> items like "Low (1)", "Medium (2)", "High (3)".
-->
<label for="priority">Priority</label>
<select name="priority" id="priority">
    <option value="">Low (1)</option>
    <option value="">Medium (2)</option>
    <option value="">High (3)</option>
</select>
</div>
{{-- Category (Optional) --}}
<div class="mb-4">

<label for="category">Category</label>
<input type="text" name="category" id="category" placeholder="Work">
</div>
{{-- Submit and Cancel Buttons --}}
<div class="flex gap-4">
<!-- GUIDANCE:
- Add a button for "Submit" or "Create Task" (type="submit").
- Add a link or button for "Cancel" that routes back to the homepage or tasks list.
-->
<button type="submit"></button>
<link rel="stylesheet" href="localhost:8000">test</link>
<button>cancel</button>
</div>
</form>
</div>
@endsection