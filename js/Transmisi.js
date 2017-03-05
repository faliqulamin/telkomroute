function removeoption(d)
{
	d.find('option')
    .remove()
    .end()
    .append('<option data-hidden="true" value="0">None</option>')
    .val('none');
	d.selectpicker("refresh");
}





$(document).ready(function() {
	
	  
    var tblTransmisi=$('#tblTransmisi').DataTable( {
		
        "ajax": "php/tabelTra.php",
		"ordering": false,
		"scrollX": true,
        "columns": [
		
            { "data": "no" },
            { "data": "TName" },
            { "data": "TDescription" },
            { "data": "vName" },
            { "data": "username" },
			{
                "className":      'route-edit',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<p style="text-align:center;"><img src="img/icons/edit.png"></p>'
            },{
                "className":      'route-hapus',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<p style="text-align:center;"><img style="text-align:center;" src="img/icons/delete.png"></p>'
            },
			
        ],
		"columnDefs": [
		  { className: "text-center", "targets": [0,1,2,3,4,5] }
		],
    });
	
	tblTransmisi.on( 'order.dt search.dt', function () {
        tblTransmisi.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
	
	var detil={};
	var table = $('#example').DataTable();
	var state=false;
	//for deatail row
	
	$("#AddTrans").click(function(){
		console.log('xxx');
		$("#modal_basic").modal({backdrop: 'static'});
		$.getJSON("php/slcVend.php", function(result){
			removeoption($("#slcVend"));
            $.each(result, function(i, field){
				$("#slcVend").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				$("#slcVend").selectpicker("refresh");
            });
			$("#slcVend").append('<option data-hidden="true">None</option>');
			$('#slcVend').val('None');
			$("#slcVend").selectpicker("refresh");
			
        });
		
    });
	
	
});