<script type="text/javascript">
$(window).load(function(){
  $('#loading-overlay').fadeOut().promise().done(function(){
    $('#examterms-table').fadeIn();
  });
});
$(function () {
  $('#s_date').datetimepicker({
    format: 'YYYY-MM-DD',
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'startDate');
  });
  $('#e_date').datetimepicker({
    format: 'YYYY-MM-DD',
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'endDate');
  });

  $('#examterms-table').DataTable({"columnDefs": [
    {"className": "dt-center", "targets": "_all"}
  ], "pageLength": 25});

});

$(".delete_exam_form").submit(function (event) {
  var form = this;
  event.preventDefault();
  swal({
    title: "{{ trans('forms.are_you_sure') }}",
    text: "{{ trans('forms.alert_text') }}",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "{{ trans('forms.confirmation_text') }}",
    cancelButtonText: "{{ trans('forms.cancel_text') }}",
    closeOnConfirm: false
  }, function(isConfirm){
    if (isConfirm) {
      form.submit();
    }
    else{
      return false;
    }
  });

});
</script>
@if(!empty($exam_term->id))
<script type="text/javascript">
$(function () {
  document.getElementById("start_date").value="{{ $exam_term->start_date }}";
  document.getElementById("end_date").value="{{ $exam_term->end_date }}";
});

</script>
@endif
