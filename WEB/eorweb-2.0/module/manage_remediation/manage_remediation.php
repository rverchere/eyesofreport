<?php
/*
#########################################
#
# Copyright (C) 2018 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# VERSION : 2.0
# APPLICATION : eorweb for eyesofreport project
#
# LICENCE :
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
#########################################
*/
?>

<!-- DataTables JavaScript -->
<script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="/js/datatable.js"></script>

<!-- DateRangePicker JavaScript -->
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">
	// on page load
    $(document).ready(function() {

		var start = moment().format('YYYY-MM-DD HH:mm:ss');
		var end = moment().add(2, 'hours').format('YYYY-MM-DD HH:mm:ss');

		if($("#datepickerStart").val() != ""){
			start = $("#datepickerStart").val();
		}
		
		if($("#datepickerEnd").val() != ""){
			end = $("#datepickerEnd").val();
		}

		var locale = 
		{
			format: 'YYYY-MM-DD HH:mm:ss',
			applyLabel: dictionnary['action.apply'],
			cancelLabel: dictionnary['action.clear'],
			customRangeLabel: dictionnary['label.custom'],
			applyClass: "btn-primary",
			daysOfWeek: [
				dictionnary["calendar.sunday"],
				dictionnary["calendar.monday"],
				dictionnary["calendar.tuesday"],
				dictionnary["calendar.wednesday"],
				dictionnary["calendar.thursday"],
				dictionnary["calendar.friday"],
				dictionnary["calendar.saturday"]
			],
			monthNames: [
				dictionnary["calendar.january"],
				dictionnary["calendar.february"],
				dictionnary["calendar.march"],
				dictionnary["calendar.april"],
				dictionnary["calendar.may"],
				dictionnary["calendar.june"],
				dictionnary["calendar.july"],
				dictionnary["calendar.august"],
				dictionnary["calendar.september"],
				dictionnary["calendar.october"],
				dictionnary["calendar.november"],
				dictionnary["calendar.december"]
			]
		};
		
		$('.datepicker_start').daterangepicker({
			locale: locale,
			startDate: start,
			timePicker: true,
			timePicker24Hour: true,
			singleDatePicker: true,
			showDropdowns: true
		})
		
		$('.datepicker_end').daterangepicker({
			locale: locale,
			startDate: end,
			timePicker: true,
			timePicker24Hour: true,
			singleDatePicker: true,
			showDropdowns: true
		})
		
		$("#datepickerStart").on('focusin',function () {
			$(this).datepicker('setDate', $(this).val());
		});
    });
</script>
