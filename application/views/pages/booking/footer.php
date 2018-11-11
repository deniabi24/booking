<!-- end: Content -->
<!-- start: Javascript -->
<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.ui.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="<?php echo base_url() ?>asset/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/plugins/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="<?php echo base_url() ?>asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	$('#calendar').fullCalendar({
      // defaultView: 'agendaWeek',
      header: {
        left: 'prev,next',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      	events: '<?php echo base_url() ?>booking/dataBooking',
	    navLinks: true, // can click day/week names to navigate views
	    editable: true,
	    eventLimit: true, // allow "more" link when too many events
	    selectable: true,
		selectHelper: true,
		select: function(start, end){
	        $('#eModal #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
	  		$('#eModal #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
	        $('#eModal').modal('show');
          
        }
      	
    });
  });
</script>
<!-- end: Javascript -->

</body>
</html>