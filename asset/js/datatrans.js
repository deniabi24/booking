 $(document).ready(function(){

    $('#datatables-example').DataTable();
    $('.datetime').bootstrapMaterialDatePicker({ weekStart:0,time:false,animation:true});
    $(".select2-A").select2({
      placeholder: "Pilih Paket",
      allowClear: true
    });
  });