<div id='plan-agent' style="margin-top: -40px;">

</div>

<script type="text/javascript">

$(document).ready(function() {

    $('#plan-agent').fullCalendar({
    	  firstDay:1,
    	  minTime:    '08:00:00',
		  maxTime:    '22:00:00',			
		  scrollTime: '08:00:00',
		  timezone:   'Europe/Brussels',
        events:<?php echo $json ?>,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			editable: false         
    });

});
</script>