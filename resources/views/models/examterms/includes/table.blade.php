<table id="example" class="display" cellspacing="0" width="100%">
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

        <a class="btn navbar-btn btn-warning" href="{{ route('examterm.edit', $exam_term->id) }}">{{ trans('forms.edit') }}</a>
        {{ Form::model($exam_term, array('route' => ['examterm.destroy', $exam_term], 'method' => 'delete', 'class' => 'delete_exam_form')) }}
        <p>
          {{ Form::submit(trans('forms.delete'), array('class' => 'btn navbar-btn btn-danger delete_exam', 'id' => 'delete_exam_button')) }}
        </p>
        {{ Form::close() }}
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
