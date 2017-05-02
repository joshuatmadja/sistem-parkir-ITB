$(function(){
	var division = [];

	$('html').on('mousedown',function(){
		division.push(1);
		console.log("appended");

		$('#tambah').append("<li>"+division.length+"</li>");
	});
});