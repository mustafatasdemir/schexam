<script type="text/javascript">
$(function () {
  $('#s_date').datetimepicker({
    format: 'DD/MM/YYYY'
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'startDate');
  });
  $('#e_date').datetimepicker({
    format: 'DD/MM/YYYY'
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'endDate');
  });



});

</script>

@if (strpos(Route::current()->getName(), 'edit') !== false)
<script type="text/javascript">
$(function () {
  document.getElementById("exam_term_code").value="{{ $exam_term->code }}";
  document.getElementById("exam_term_name").value="{{ $exam_term->name }}";
  document.getElementById("exam_term_start_date").value="{{ $exam_term->start_date }}";
  document.getElementById("exam_term_end_date").value="{{ $exam_term->end_date }}";
  document.getElementById("exam_term_description").value="{{ $exam_term->description }}";
});

</script>
@endif
