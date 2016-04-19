<!--
@Author: Daven
@Date:   2016-04-19T11:50:12-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T13:32:43-07:00
-->



<!-- resources/views/tasks.blade.php -->

<!-- extends the layout in /layouts/ -->
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->
<div class="container">
  <div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
      {!! csrf_field() !!}

      <!-- Task Name -->
      <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Task</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="task-name" class="form-control">
        </div>
      </div>

      <!-- Add Task Button -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Add Task
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Current Tasks -->
  @if (count($tasks) > 0)
  <div class="panel panel-default">
    <div class="panel-heading">
      Current Tasks
    </div>

    <div class="panel-body">
      <table class="table table-striped task-table">
        <!-- Table Headings -->
        <thead>
          <th>Task</th>
          <th>&nbsp;</th>
        </thead>

        <!-- Table Body -->
        <tbody>

          @foreach ($tasks as $task)
          <tr>
            <!-- Task Name -->
            <td class="table-text">
              <div>{{ $task->name }}</div>
            </td>

            <td>
                <!-- Delete Button -->
                <td>
                  <form action="{{ url('task/'.$task->id) }}" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}

                    <button type="submit" class="btn btn-danger">
                      <i class="fa fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            </td>
          </tr>
          @endforeach

        </tbody>
        <!-- End Table Body -->

      </table>
    </div>
  </div>
  @endif
</div>
@endsection