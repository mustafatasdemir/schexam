<table id="students-table" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>School ID</th>
      <th>Name</th>
      <th>Surname</th>
      <th>StateID</th>
      <th>Department</th>
      <th>Class Year</th>
      <th></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>School ID</th>
      <th>Name</th>
      <th>Surname</th>
      <th>StateID</th>
      <th>Department</th>
      <th>Class Year</th>
      <th></th>
    </tr>
  </tfoot>
  <tbody>
    @foreach ( $students as $student)
    <tr>
      <td>{{$student->schoolID}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->surname}}</td>
      <td>{{$student->stateID}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->name}}</td>
      <td>
        <div class="edit-delete-buttons">
          {{ Form::model($student, array('route' => ['students.edit', $student->id], 'method' => 'get', 'class' => 'edit_student_form')) }}
            {{ Form::submit(trans('forms.edit'), array('class' => 'btn navbar-btn btn-warning')) }}
          {{ Form::close() }}

          {{ Form::model($student, array('route' => ['students.destroy', $student], 'method' => 'delete', 'class' => 'delete_student_form')) }}
            {{ Form::submit(trans('forms.delete'), array('class' => 'btn navbar-btn btn-danger')) }}
          {{ Form::close() }}
      </div>


      </td>

    </tr>
    @endforeach
  </tbody>
</table>
