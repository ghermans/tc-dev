</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<script src="http://dev.timecontrol.be/js/jquery.bootgrid.min.js"></script>
<script src="<?php echo base_url("js/jquery-ui.min.js");?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>
<script src="<?php echo base_url("js/jquery-listnav.min.js");?>"></script>
<script src="<?php echo base_url("js/highcharts.js");?>"></script>
<script src="<?php echo base_url("js/bootstrap-switch.js");?>"></script>
<script src="<?php echo base_url("js/formToWizard.js");?>"></script>
<script src="<?php echo base_url("js/jBox.js");?>"></script>
<script src="<?php echo base_url("js/jquery.timeago.js");?>"></script>
<script src="<?php echo base_url("js/modules/data.js");?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>
<script src="<?php echo base_url("js/bootstrapValidator.js");?>"></script>
<script src="<?php echo base_url("js/bootstrap-formhelpers.js");?>"></script>


<script>
	$(function() {
		$( ".column" ).sortable({
			connectWith: ".column",
			handle: ".panel-heading",
			cancel: ".portlet-toggle"			
		});


		$( ".portlet-toggle" ).click(function() {
			var icon = $( this );
			icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
			icon.closest( ".panel" ).find( ".panel-content" ).toggle();
		});
	});
	</script>
<script type="text/javascript">
$(document).ready(function() {
	
 jQuery("abbr.timeago").timeago();

//toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('#username').editable();
    
    //make status editable
    $('#status').editable({
        type: 'select',
        title: 'Select status',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'status 1'},
            {value: 2, text: 'status 2'},
            {value: 3, text: 'status 3'}
        ],
        pk: 1,
        url: 'planning/agentplanning/'
    });
	
	new jBox('Confirm', {
    confirmButton: 'Yes',
    cancelButton: 'No'
});

var colorsN2 = ['red', 'green', 'blue', 'yellow'];
	var currentColorN2 = 0;
	jQuery('#demoN2').click(function() {
		new jBox('Notice', {
			animation: 'flip',
			position: {
				x: 15,
				y: 65
			},
			content: 'Oooh! They also come in colors!',
			onInit: function() {
				this.options.color = colorsN2[currentColorN2];
				currentColorN2++;
				(currentColorN2 >= colorsN2.length) && (currentColorN2 = 0);
			},
			zIndex: 12000
		});
	});
	

    $('[data-toggle=tooltip]').jBox('Tooltip', {
    position: {
        x: 'left',
        y: 'top'
    },
    outside: 'x'
});
    $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })    

    $('#myStat').circliful();
    $('#myStat2').circliful();
    $('#myStat3').circliful();
    $('#myStat4').circliful(); 
    $('#BreakStatus').circliful();  
   
    $('#departments').dataTable();
    $('table.display').dataTable();
    $('.countUsers').text($('#user_list > li').length);
    $('#user_list').listnav({
                includeNums: false,
                showCounts: true,
                onClick: function(letter) {
                    $('.countUsers').text($(".listNavShow").length);
                }});
                
    $("[name='config-site']").bootstrapSwitch();    
    $("[name='config-break']").bootstrapSwitch();
    $("[name='config-lunch']").bootstrapSwitch();
    $("[name='config-planning']").bootstrapSwitch();
    $("[name='config-vacation']").bootstrapSwitch(); 	
 	$('#calendar').fullCalendar({
        		 firstDay:1,
			   header: {
				left: 'prev,next',
				center: 'title',
				right: 'month, agendaDay'
			},
			defaultView: 'month',
			events: [
				{
					title: 'Hermans Glenn',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'																				
				},
				{
					title: 'Michiel Bellen',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'															
				},
            {
					title: 'Karen Langendries',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'															
				},	
				
				{
					title: 'Sabrina Geerkens',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'															
				},
				{
					title: 'Tessa Swinnen',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'															
				},
            {
					title: 'Bert Briels',
					start: '2014-10-06',
					end: '2014-10-06',
					backgroundColor: '#378006'										
				},			

			
				{
					title: 'Saskia Taverniers',
					start: '2014-10-06T12:00:00',
					end:   '2014-10-06T23:00:00',
					backgroundColor: '#378006'										
				},
				{
					title: 'Sam Vanderlinden',
					start: '2014-10-06T12:00:00',
					end:   '2014-10-06T23:00:00',
					backgroundColor: '#378006'					
				},
				
{
					title: 'Carolien Schuurmans',
					start: '2014-10-06T12:00:00',
					end:   '2014-10-06T23:00:00',
					backgroundColor: '#378006'										
				},
				{
					title: 'Sam Vanderlinden',
					start: '2014-10-06T12:00:00',
					end:   '2014-10-06T23:00:00',
					backgroundColor: '#378006'					
				}
				

				
							
			],
			editable: true,
			minTime:    '08:00:00',
			maxTime:    '22:30:00',			
			scrollTime: '08:00:00'

		});
		
$('#plan-agent').fullCalendar({
         		 firstDay:1,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'month',
			editable: true,
			});		
		
	});

 $('#loginForm').bootstrapValidator();


$("#table-plus").bootgrid({
formatters: {
"link": function(column, row)
{
return "<a href=\"#\">Edit</a>";
}
}
});

$(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'column'
        },
        title: {
            text: ' '
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: ''
            }
        },
 tooltip: {
            enabled: true
        }
    });
    
    $('#speedometer').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'bar'
        },
        title: {
            text: ' '
        },
        yAxis: {
            allowDecimals: true,
            title: {
                text: 'Monthly statics'
            }
        },
        series: [{
     showInLegend: false
}],
 tooltip: {
            enabled: true
        }
    });
        });
  

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});	 

  
</script>
</html>
