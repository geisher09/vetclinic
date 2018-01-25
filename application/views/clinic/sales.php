<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<?php print_r($sal); ?>
<?php $sal2; ?>
<script>
window.onload = function () {

var sale = <?php echo json_encode($sal2)?>;
var obj = JSON.stringify++(sale);
console.log(obj.sale);
var dps = [
			{ x: new Date(2016, 00, 1), y: 61, indexLabel: "gain", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(2016, 01, 1), y: 71, indexLabel: "gain", markerType: "triangle",  markerColor: "#6B8E23" },
			{ x: new Date(2016, 02, 1) , y: 55, indexLabel: "loss", markerType: "cross", markerColor: "tomato" },
			{ x: new Date(2016, 03, 1) , y: 50, indexLabel: "loss", markerType: "cross", markerColor: "tomato" },
			{ x: new Date(2016, 04, 1) , y: 65, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
			{ x: new Date(2016, 05, 1) , y: 85, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
			{ x: new Date(2016, 06, 1) , y: 68, indexLabel: "loss", markerType: "cross", markerColor: "tomato" },
			{ x: new Date(2016, 07, 1) , y: 28, indexLabel: "loss", markerType: "cross", markerColor: "tomato" },
			{ x: new Date(2016, 08, 1) , y: 34, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
			{ x: new Date(2016, 09, 1) , y: 24, indexLabel: "loss", markerType: "cross", markerColor: "tomato" },
			{ x: new Date(2016, 10, 1) , y: 44, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23" },
			{ x: new Date(2016, 11, 1) , y: 34, indexLabel: "loss", markerType: "cross", markerColor: "tomato" }];
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	title:{
		text: "Share Value - 2016"   
	},
	axisX: {
		interval: 1,
		intervalType: "month",
		valueFormatString: "MMM"
	},
	axisY:{
		title: "Price (in USD)",
		valueFormatString: "$#0"
	},
	data: [{        
		type: "line",
		markerSize: 12,
		xValueFormatString: "MMM, YYYY",
		yValueFormatString: "$###.#",
		dataPoints: dps
	}]
});
chart.render();

}
</script>