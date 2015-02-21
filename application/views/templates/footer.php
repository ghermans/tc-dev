</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<script src="<?php echo base_url("js/jquery-listnav.min.js");?>"></script>
<script src="<?php echo base_url("js/bootstrap-switch.js");?>"></script>
<script src="<?php echo base_url("js/formToWizard.js");?>"></script>
<script src="<?php echo base_url("js/jBox.js");?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	new jBox('Confirm', {
    confirmButton: 'Yes',
    cancelButton: 'No'
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
	});
</script>
</html>
