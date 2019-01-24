
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
	
}

function runSearch(){

var search = getParameterByName('search');
if (search){
	document.getElementById('search').value=search
	
	document.getElementById("responses").innerHTML=""
	if (search.match(/hello/gi)){
		document.getElementById("responses").innerHTML=document.getElementById("responses").innerHTML+`
		<div class="response">
		<h3>Hello World is world's most popular statement</h3>
		<p>Hello World has spread across the world as the most popular statement, especially in coding experiences</p>
		</div>
		`
	}
	if (search.match(/weather/gi)){
		document.getElementById("responses").innerHTML=document.getElementById("responses").innerHTML+`
		<div class="response">
		<h3>University of St. Francis Weather Policy</h3>
		<p>Sometimes falling water may impact university activities and possibly effect open hours.</p>
		</div>
		`
	}
	/*
	document.getElementById("responses").innerHTML=`
	<div class="response">
	<h3>`+search+`</h3>
	<p>Response Text</p>
	</div>
	<div class="response">
	<h3>Response Title</h3>
	<p>Response Text</p>
	</div>
	<div class="response">
	<h3>Response Title</h3>
	<p>Response Text</p>
	</div>
	<div class="response">
	<h3>Response Title</h3>
	<p>Response Text</p>
	</div>
	<div class="response">
	<h3>Response Title</h3>
	<p>Response Text</p>
	</div>
	`*/
	
}	
	
	
}