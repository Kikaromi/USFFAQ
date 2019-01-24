
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
	
	if (search.match(/hello/gi)){
		
	}
	
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
	`
	
}	
	
	
}