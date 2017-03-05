/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    var i=0;
	var header='<table id="exampleDetil"  class="table table-striped table-bordered" cellspacing="0" width="100%">'+
		'<tr><th>Transimisi</th><th>NE</th><th>Modul</th><th>Rack</th><th>Sub Rack</th><th>Slot</th><th>port</th><th>Desc</th></tr>';
	var isi="";
	//console.log(d);
		for(i=0;i<d.length;i++)
		{
			//Direction
			//console.log(d[i]);
			isi=isi+'<tr>'+
						'<td>'+d[i].Transimisi+'</td>'+
						'<td>'+d[i].NE+'</td>'+
						'<td>'+d[i].Modul+'</td>'+
						'<td>'+d[i].rack+'</td>'+
						'<td>'+d[i].subrack+'</td>'+
						'<td>'+d[i].slot+'</td>'+
						'<td>'+d[i].port+'</td>'+
						'<td>'+d[i].desc+'</td>'+
					'</tr>';
		}
    var end='</table>';
	//console.log(header+isi+end);
	return header+isi+end;
	
};
function getLatLong(d)
{
	var latLong=[];
	var one=[];
	for(i=0;i<d.length;i++)
	{
		latLong.push([d[i].Lat,d[i].long]);
	}
	return latLong;
}

function removeoption(d)
{
	d.find('option')
    .remove()
    .end()
    .append('<option data-hidden="true" value="0">None</option>')
    .val('none');
	d.selectpicker("refresh");
}

function disable(d)
{
	d.attr('disabled',true);
	d.selectpicker("refresh");
}

function enable(d)
{
	d.attr('disabled',false);
	d.selectpicker("refresh");
}

function loadnewMaps(map, d)
{
	
	var path=[];//getLatLong(d);
	var ltlng=[];
	var maxlt=d[0].Lat;
	var maxlong=d[0].long;
	var bounds=[];
	
	for(i=0;i<d.length;i++)
	{		
	    var latlng = new google.maps.LatLng(d[i].Lat,d[i].long);
        bounds.push(latlng);		
		map.addMarker({
        lat: d[i].Lat,
        lng: d[i].long,
        title: 'Lima',
		icon:'img/telmark.png',
        details: {
          database_id: 42,
          author: 'HPNeo'
        }
      });
	  
	  map.drawOverlay({
        lat: d[i].Lat,
        lng: d[i].long,
        content: '<div class="overlay">'+d[i].NE+'<div class="overlay_arrow above"></div></div>',
        verticalAlign: 'bottom',
        horizontalAlign: 'center'
      });
	  
	}
	
	map.drawPolyline({
        path: getLatLong(d),
        strokeColor: '#131540',
        strokeOpacity: 0.6,
        strokeWeight: 3
      });
	  map.fitLatLngBounds(bounds);
	  //fitBounds
}

function newRoute()
{
	$("#modal_large").modal({backdrop: 'static'});
		var $dropdown = $('.selectpicker').selectpicker();
		var traid=0;
		removeoption($("#slcTraA"));
		removeoption($("#slcTraZ"));
		removeoption($("#slcTraDetil"));
		$.getJSON("php/slctra.php", function(result){
			
            $.each(result, function(i, field){
				traid=result[0].value;
				
				$("#slcTraA").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				
				$("#slcTraZ").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				$("#slcTraZ").selectpicker("refresh");
				$("#slcTraDetil").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				$("#slcTraDetil").selectpicker("refresh");
            });
			$("#slcTraA").append('<option data-hidden="true">None</option>');
			$('#slcTraA').val('None');
			$("#slcTraA").selectpicker("refresh");
			$("#slcNeA").selectpicker("refresh");
			
			$("#slcTraZ").append('<option data-hidden="true">None</option>');
			$('#slcTraZ').val('None');
			$("#slcTraZ").selectpicker("refresh");
			$("#slcNeZ").selectpicker("refresh");
			
			$("#slcTraDetil").append('<option data-hidden="true">None</option>');
			$('#slcTraDetil').val('None');
			$("#slcTraDetil").selectpicker("refresh");
			$("#slcTraDetil").selectpicker("refresh");
			
			$("#slcNeA").attr('disabled',true);
			$("#slcNeZ").attr('disabled',true);
			$("#slcNeDetil").attr('disabled',true);
			$("#Direction").attr('disabled',true);
			
			
			
			disable($("#slcCard"));
			disable($("#slcRack"));
			disable($("#slcSubrack"));
			disable($("#slcSlot"));
			disable($("#slcPort"));
			
			
			removeoption($("#slcNeA"));
			removeoption($("#slcNeZ"));
			removeoption($("#Direction"));
			removeoption($("#slcNeDetil"));
			removeoption($("#slcCard"));
			removeoption($("#slcRack"));
			removeoption($("#slcSubrack"));
			removeoption($("#slcSlot"));
			removeoption($("#slcPort"));
			
			
        });
		
		$.getJSON("php/slcust.php", function(result){
			removeoption($("#slcCust"));
			$.each(result, function(i, field){
				$("#slcCust").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				$("#slcCust").selectpicker("refresh");
				
			});
			$("#slcCust").selectpicker("refresh");
			$("#slcCust").append('<option data-hidden="true" value=-1>None</option>');
			$('#slcCust').val('None');
			$("#slcCust").selectpicker("refresh");
		});
}


function newDetilRoute()
{
	$.getJSON("php/slctra.php", function(result){
			removeoption($("#slcTraDetil"));
            $.each(result, function(i, field){
				traid=result[0].value;
				
				$("#slcTraDetil").append('<option value="'+result[i].value+'" selected="">'+result[i].text+'</option>');
				$("#slcTraDetil").selectpicker("refresh");
            });
			
			
			$("#slcTraDetil").append('<option data-hidden="true">None</option>');
			$('#slcTraDetil').val('None');
			$("#slcTraDetil").selectpicker("refresh");
			
			$("#slcNeDetil").attr('disabled',true);
			$("#slcDir").attr('disabled',true);
			
			
			
			disable($("#slcCard"));
			disable($("#slcRack"));
			disable($("#slcSubrack"));
			disable($("#slcSlot"));
			disable($("#slcPort"));
					
			
			removeoption($("#slcDir"));
			removeoption($("#slcNeDetil"));
			removeoption($("#slcCard"));
			removeoption($("#slcRack"));
			removeoption($("#slcSubrack"));
			removeoption($("#slcSlot"));
			removeoption($("#slcPort"));
			$("#detilDesc").val("");
        });
}

$(document).ready(function() {
	var dtlCounter=0;
	var dtlRouteCrud=[];
	var dtlLastdata=[];
	var dtlLastChoice={};
	
	var map = new GMaps({
        div: '#map',
        lat: -2.600029,
        lng: 118.015776,
		zoom:5
      });
	  
	  
    $('#example').DataTable( {
        "ajax": "php/api/dummy.json",
		"ordering": false,
		"scrollX": true,
        "columns": [
		
            { "data": "NeA" },
            { "data": "NeZ" },
            { "data": "descA" },
            { "data": "descZ" },
            { "data": "Customer" },
            { "data": "kapasitas" },
			{
                "className":      'route-details',
                "orderable":      false,
                "data":           null,
                "defaultContent": '<p style="text-align:center;"><img src="img/icons/route2.png"></p>'
            },{
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
		"order": [[3, 'asc']]
    });
	var detil={};
	var table = $('#example').DataTable();
	var state=false;
	//for deatail row
	$('#example tbody').on('click', 'td.route-details', function () {
		var tr = $(this).closest('tr');
        var row = table.row( tr );
		
        if ( row.child.isShown() ) {
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
			table.rows().eq(0).each( function ( idx ) {
			  var row = table.row(idx);
			  var tr = $(this).closest('tr');
			  if ( row.child.isShown() ) {
				row.child.hide();
				tr.removeClass('shown');
			  }
			});
            row.child( format(row.data().detil) ).show();

            tr.addClass('shown');
			map.removeMarkers();
			map.removeOverlays();
			map.removePolylines();
			loadnewMaps(map,row.data().detil);
        }
    });
	//console.log(table);
	$("#panel-fullscreen").click(function (e) {
        e.preventDefault();
		if(state==false)
		{
			$("#map").height($("#mapPanel").height());
			state=true;
		}else
		{
			$("#map").height(400);
			state=false;
		}
		//console.log($("#mapPanel").height());
		if($("#mapPanel").height()>400)
		{
		}else
		{
			
			$("#map").height($("#mapPanel").height());
		}
		
    });
	var tblDetilCrud=$('#tblDetilCrud').DataTable( {
			"bFilter": false,
			"bLengthChange": false,
			
			fixedColumns: true,
			data:dtlRouteCrud,
			"columns": [
				{ "data": "Transmisi" },
				{ "data": "NE" },
				{ "data": "Direction" },
				{ "data": "Card" },
				{ "data": "rack" },
				{ "data": "slot" },
				{ "data": "port" },
				{ "data": "desc" },
				{
					"className":      'route-edit',
					"orderable":      false,
					"data":           'edit',
					"defaultContent": '<button class="btn btn-warning"><i class="fa fa-edit"></i></button>',
					"width": "3%" 
				},
				{
					"className":      'route-hapus',
					"orderable":      false,
					"data":           'hapus',
					"defaultContent": '<button class="btn btn-info"><i class="glyphicon glyphicon-remove"></i></button>',
					"width": "3%" 
				}
			
			]
		});
		
		
	var tblexampleDetil=$('#exampleDetil').DataTable( {
			"ordering": false
		});
	
	
	$("#AddRoute").click(function(){
		dtlCounter=0;
		dtlRoute=[];
		dtlLastdata=[];
		dtlLastChoice={};
        
		tblDetilCrud.clear().draw();
		newRoute();
		console.log(traid);
    });
	
	$('#slcTraA').on('change', function(){
		removeoption($("#slcNeA"));
			var selected = $(this).find("option:selected").val();
			$.getJSON("php/allne.php?traid="+selected, function(result){
				$.each(result, function(i, field){
					console.log(i);
					$("#slcNeA").append('<option value="'+result[i].value+'">'+result[i].text+'</option>');
					
					$("#slcNeA").selectpicker("refresh");
				});
			});
			$("#slcNeA").attr('disabled',false);
			$("#slcNeA").selectpicker("refresh");
			$("#slcNeA").append('<option data-hidden="true" value=-1>None</option>');
			$('#slcNeA').val('None');
			$("#slcNeA").selectpicker("refresh");
		});
		
		
	$('#slcTraZ').on('change', function(){
		removeoption($("#slcNeZ"));
			var selected = $(this).find("option:selected").val();
			$.getJSON("php/allne.php?traid="+selected, function(result){
				$.each(result, function(i, field){
					console.log(i);
					$("#slcNeZ").append('<option value="'+result[i].value+'">'+result[i].text+'</option>');
					
					$("#slcNeZ").selectpicker("refresh");
				});
			});
			$("#slcNeZ").attr('disabled',false);
			$("#slcNeZ").selectpicker("refresh");
			$("#slcNeZ").append('<option data-hidden="true" value=-1>None</option>');
			$('#slcNeZ').val('None');
			$("#slcNeZ	").selectpicker("refresh");
		});
		
		
		
		
	//for detil route action---------------------------------------------------------------//
		
	$('#slcTraDetil').on('change', function(){
		removeoption($("#slcNeDetil"));
		var selected = $(this).find("option:selected").val();
		$.getJSON("php/allne.php?traid="+selected, function(result){
			$.each(result, function(i, field){
				console.log(i);
				$("#slcNeDetil").append('<option value="'+result[i].value+'">'+result[i].text+'</option>');
				
				$("#slcNeDetil").selectpicker("refresh");
			});
		});
		$("#slcNeDetil").attr('disabled',false);
		$("#slcNeDetil").selectpicker("refresh");
		$("#slcNeDetil").append('<option data-hidden="true" value=-1>None</option>');
		$('#slcNeDetil').val('None');
		$("#slcNeDetil").selectpicker("refresh");
	});
	
	
	$('#slcNeDetil').on('change', function(){
		removeoption($("#slcDir"));
		removeoption($("#slcCard"));
		removeoption($("#slcRack"));
		removeoption($("#slcSubrack"));
		removeoption($("#slcSlot"));
		removeoption($("#slcPort"));
		
		disable($("#slcDir"));
		disable($("#slcCard"));
		disable($("#slcRack"));
		disable($("#slcSubrack"));
		disable($("#slcSlot"));
		disable($("#slcPort"));
		
		var neDetilID = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID, function(result){
			$.each(result, function(i, field){
				$("#slcDir").append('<option value="'+result[i].mneDirection+'">'+result[i].Direction+'</option>');
				$("#slcDir").selectpicker("refresh");
			});
		});
				
		$("#slcDir").attr('disabled',false);
		$("#slcDir").selectpicker("refresh");
		$("#slcDir").append('<option data-hidden="true" value=-1>None</option>');
		$('#slcDir').val('None');
		$("#slcDir").selectpicker("refresh");
	});
	
	
	$('#slcDir').on('change', function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		removeoption($("#slcCard"));
		removeoption($("#slcRack"));
		removeoption($("#slcSubrack"));
		removeoption($("#slcSlot"));
		removeoption($("#slcPort"));

		disable($("#slcCard"));
		disable($("#slcRack"));
		disable($("#slcSubrack"));
		disable($("#slcSlot"));
		disable($("#slcPort"));
		
		
		var dirID = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID+"&idDir="+dirID, function(result){
				console.log(result);
			$.each(result, function(i, field){
				
				$("#slcCard").append('<option value="'+result[i].mID+'">'+result[i].Card+'</option>');
				$("#slcCard").selectpicker("refresh");
				
			});
		});
		
		enable($("#slcCard"));
		$("#slcCard").selectpicker("refresh");
		$("#slcCard").append('<option data-hidden="true" value=-1>None</option>');
		$('#slcCard').val('-1');
		$("#slcCard").selectpicker("refresh");		
	});
	
	
	$('#slcCard').on('change', function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		var neDirID = $("#slcNeDetil").find("option:selected").val();
		
		removeoption($("#slcSubrack"));
		removeoption($("#slcSlot"));
		removeoption($("#slcPort"));

		disable($("#slcSlot"));
		disable($("#slcPort"));

		var mID = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID+"&idDir="+neDirID+"&idModul="+mID, function(result){
				console.log(result);
			$.each(result, function(i, field){
				
				$("#slcRack").append('<option value="'+result[i].rack+'">'+result[i].rack+'</option>');
				$("#slcRack").selectpicker("refresh");
			});
		});
		
		enable($("#slcRack"));
		$("#slcRack").selectpicker("refresh");
		$("#slcRack").append('<option data-hidden="true" value=-1></option>');
		$('#slcRack').val('-1');
		$("#slcRack").selectpicker("refresh");			
	});
	
	$('#slcRack').on('change', function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		var neDirID = $("#slcNeDetil").find("option:selected").val();
		var mID = $("#slcCard").find("option:selected").val();
		
		removeoption($("#slcSubrack"));
		removeoption($("#slcSlot"));
		removeoption($("#slcPort"));

		disable($("#slcSlot"));
		disable($("#slcPort"));

		var rackID = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID+"&idDir="+neDirID+"&idModul="+mID+"&rack="+rackID, function(result){
				console.log(result);
			$.each(result, function(i, field){
				
				$("#slcSubrack").append('<option value="'+result[i].subrack+'">'+result[i].subrack+'</option>');
				$("#slcSubrack").selectpicker("refresh");
			});
		});
		
		enable($("#slcSubrack"));
		$("#slcSubrack").selectpicker("refresh");
		$("#slcSubrack").append('<option data-hidden="true" value=-1></option>');
		$('#slcSubrack').val('-1');
		$("#slcSubrack").selectpicker("refresh");		
	});
	
	$('#slcSubrack').on('change', function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		var neDirID = $("#slcNeDetil").find("option:selected").val();
		var mID = $("#slcCard").find("option:selected").val();
		var rackID = $("#slcRack").find("option:selected").val();
		
		removeoption($("#slcSlot"));
		removeoption($("#slcPort"));

		disable($("#slcSlot"));
		disable($("#slcPort"));

		var subrack = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID+"&idDir="+neDirID+"&idModul="+mID+"&rack="+rackID+"&subrack="+subrack, function(result){
			$.each(result, function(i, field){
				$("#slcSlot").append('<option value="'+result[i].slot+'">'+result[i].slot+'</option>');
				$("#slcSlot").selectpicker("refresh");
			});
		});
		
		enable($("#slcSlot"));
		$("#slcSlot").selectpicker("refresh");
		$("#slcSlot").append('<option data-hidden="true" value=-1></option>');
		$('#slcSlot').val('-1');
		$("#slcSlot").selectpicker("refresh");		
	});
	
	$('#slcSlot').on('change', function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		var neDirID = $("#slcNeDetil").find("option:selected").val();
		var mID = $("#slcCard").find("option:selected").val();
		var rackID = $("#slcRack").find("option:selected").val();
		var subrack = $("#slcSubrack").find("option:selected").val();
		
		removeoption($("#slcPort"));

		disable($("#slcPort"));

		var slot = $(this).find("option:selected").val();
		$.getJSON("php/slcDetilRoute.php?idNe="+neDetilID+"&idDir="+neDirID+"&idModul="+mID+"&rack="+rackID+"&subrack="+subrack+"&slot="+slot, function(result){
			dtlLastdata=result;
			$.each(result, function(i, field){
				$("#slcPort").append('<option value="'+result[i].port+'">'+result[i].port+'</option>');
				$("#slcPort").selectpicker("refresh");
			});
		});
		
		enable($("#slcPort"));
		$("#slcPort").selectpicker("refresh");
		$("#slcPort").append('<option data-hidden="true" value=-1></option>');
		$('#slcPort').val('-1');
		$("#slcPort").selectpicker("refresh");		
	});
	
	$('#slcPort').on('change', function(){
		var myport = $(this).find("option:selected").val();
		console.log(dtlLastdata);
		for(var i = 0; i<dtlLastdata.length; i++) {
			if (dtlLastdata[i].port === myport) {
				dtlLastChoice = dtlLastdata[i];
				break;
			}
		}
		console.log(dtlLastChoice);
		//dtlLastChoice=dtlLastdata.map(function(e) { return e.port; }).indexOf(myport);
	})
	
	
	
	$("#AddDetilRoute").click(function(){
		var neDetilID = $("#slcNeDetil").find("option:selected").val();
		var neDirID = $("#slcNeDetil").find("option:selected").val();
		var mID = $("#slcCard").find("option:selected").val();
		var rackID = $("#slcRack").find("option:selected").val();
		var subrack = $("#slcSubrack").find("option:selected").val();
		var port = $("#slcPort").find("option:selected").val();
		var detilDesc = $("#detilDesc").val();
		if(neDetilID>-1 && neDirID>-1 && mID>-1 && rackID>-1 && subrack>-1 && port>-1)
		{
			dtlCounter=dtlCounter+1;
			dtlLastChoice.no=dtlCounter;
			dtlLastChoice.desc=detilDesc;
			dtlRouteCrud.push(dtlLastChoice);
			
			tblDetilCrud.clear();
			tblDetilCrud.rows.add(dtlRouteCrud);
			tblDetilCrud.draw();
			newDetilRoute();
			//console.log(dtlRouteCrud);
		}else
		{
			alert('Fiil all detil route');
		}
	});
	
});