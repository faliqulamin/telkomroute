function CustomMarker(latlng, map, args, label) {
	this.latlng = latlng;	
	this.args = args;	
	//this.setMap(map);	
	this.label=label;
}
CustomMarker.prototype = new google.maps.OverlayView();
CustomMarker.prototype.draw = function() {
	var self = this;
	var div = this.div;
	if (!div) {
	
		div = this.div = document.createElement('div');
		var innerdiv='<div class="overlay">'+this.label+'</div>';
		
		div.className = 'marker';
		div.innerHTML =innerdiv;
		div.style.position = 'absolute';
		div.style.cursor = 'pointer';
		//div.style.background = 'blue';
		//div.appendChild(innerdiv);
		if (typeof(self.args.marker_id) !== 'undefined') {
			div.dataset.marker_id = self.args.marker_id;
		}
		
		google.maps.event.addDomListener(div, "click", function(event) {
			alert('You clicked on a custom marker!');			
			google.maps.event.trigger(self, "click");
		});
		
		var panes = this.getPanes();
		panes.overlayImage.appendChild(div);
	}
	
	var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
	console.log(div);
	if (point) {
		var length=0;
		length=((this.label.length*14)/2)-4;
		div.style.left = (point.x - length) + 'px';
		div.style.top = (point.y - 1) + 'px';
	}
};

CustomMarker.prototype.remove = function() {
	if (this.div) {
		this.div.parentNode.removeChild(this.div);
		this.div = null;
	}	
};

CustomMarker.prototype.getPosition = function() {
	return this.latlng;	
};