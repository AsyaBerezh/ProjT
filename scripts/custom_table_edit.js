$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: true,
		editButton: true,   		
		columns: {
		  identifier: [0, 'ID_stk'],  
		  editable: [[1, 'Fullname'], [2, 'Position'], [3, 'Description'], [4, 'Success_criteria'], 
		  [5, 'Key_stakeholder'], [6, 'Deadline'], [7, 'Result'], [8, 'Final']]
		},
		hideIdentifier: true,
		url: 'scripts/live_edit.php'		
	});
});