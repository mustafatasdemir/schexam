<script type="text/javascript">
$(function () {
  $('#s_date').datetimepicker({
    format: 'YYYY-MM-DD',
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'startDate');
    console.log('Deneme')
  });
  $('#e_date').datetimepicker({
    format: 'YYYY-MM-DD',
  })
  .on('dp.change', function(e) {
    //$('#examTermForm').formValidation('revalidateField', 'endDate');
  });

$('#example').DataTable({"columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ]});

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
