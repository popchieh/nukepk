function follow_add(author_id) {
	$.post('ajax/follow_add.php', {Author_id:author_id}, function(data) {
		if(data === ' success') {
			follow_get(author_id);
		} else {
			alert('error: '+data);
		}
	});
}

function follow_get(author_id) {
// $.post('ajax/follow_get.php', {Author_id:author_id}, function(data) {
	$('#follow').text("關注");
	$('#follow').attr("onclick", "follow_cancel("+author_id+");");
	$('#follow').attr("onmouseover", "mouseover();");
	$('#follow').attr("onmouseout", "mouseout();");		
	$("#follow").attr('class', 'btn btn-success pull-right');
	// });
}

function follow_cancel(author_id) {
	$.post('ajax/follow_cancel.php', {Author_id:author_id}, function(data) {
		if(data === ' success') {
			follow_get_cancel(author_id);
		} else {
			alert('error: '+data);
		}
	});
}

function follow_get_cancel(author_id) {
// $.post('ajax/follow_get_cancel.php', {Author_id:author_id}, function(data) {
	$('#follow').text("關注");
	$('#follow').attr("onclick", "follow_add("+author_id+");");
	$('#follow').attr("onmouseover", "");
	$('#follow').attr("onmouseout", "");
	$("#follow").attr('class', 'btn btn-info pull-right');
// });
}

function mouseover() {
	$("#follow").text("取消關注");
	$("#follow").attr('class', 'btn btn-danger pull-right');
}
function mouseout() {
	$("#follow").text("已經關注");
	$("#follow").attr('class', 'btn btn-success pull-right');
} 