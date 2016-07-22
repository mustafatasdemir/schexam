<table id="examterms-table" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Description</th>
      <th>Start Date</th>
      <th>End date</th>
      <th></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Description</th>
      <th>Start Date</th>
      <th>End date</th>
      <th></th>
    </tr>
  </tfoot>
  <tbody>
    @foreach ( $exam_terms as $exam_term)
    <tr>
      <td>{{$exam_term->code}}</td>
      <td>{{$exam_term->name}}</td>
      <td>{{$exam_term->description}}</td>
      <td>{{$exam_term->start_date}}</td>
      <td>{{$exam_term->end_date}}</td>
      <td>
        <div class="edit-delete-buttons">
          {{ Form::model($exam_term, array('route' => ['examterms.edit', $exam_term->id], 'method' => 'get', 'class' => 'edit_exam_form')) }}
            {{ Form::submit(trans('forms.edit'), array('class' => 'btn navbar-btn btn-warning')) }}
          {{ Form::close() }}

          {{ Form::model($exam_term, array('route' => ['examterms.destroy', $exam_term->id], 'method' => 'delete', 'class' => 'delete_exam_form')) }}
            {{ Form::submit(trans('forms.delete'), array('class' => 'btn navbar-btn btn-danger')) }}
          {{ Form::close() }}
      </div>


      </td>

    </tr>
    @endforeach
  </tbody>
</table>
