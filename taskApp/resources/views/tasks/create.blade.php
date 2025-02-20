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

- Indicate optional or required status.

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
{{-- Materials Required (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Create an <input type="text"> for name="materials_required".
- Add a placeholder like "e.g., Trash Bags, Broom".
-->
<label for="materials_required" id="materials_required">Materials Required</label>
<input type="text" >
</div>
{{-- Deadline (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Deadline" (<label for="deadline">Deadline</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="datetime-local"> for name="deadline".
-->
</div>
{{-- Priority (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Priority" (<label for="priority">Priority</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> for name="priority".
- Provide <option> items like "Low (1)", "Medium (2)", "High (3)".
-->
</div>
{{-- Category (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Category" (e.g., <label for="category">Category</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> for name="category".
- Add a placeholder like "e.g., chores, work, health".
-->
</div>
{{-- Submit and Cancel Buttons --}}
<div class="flex gap-4">
<!-- GUIDANCE:
- Add a button for "Submit" or "Create Task" (type="submit").
- Add a link or button for "Cancel" that routes back to the homepage or tasks list.
-->
</div>
</form>
</div>
@endsection