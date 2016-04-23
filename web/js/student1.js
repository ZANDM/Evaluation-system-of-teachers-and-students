$(function () {
	$('.mt').click(function(){
		var dialog = $('#evalClassDialog');
		dialog.find('#a').html($(this).attr('Cname'));
                dialog.find('#b').html($(this).attr('Tname'));
		dialog.modal('show'); 
	});
});
function open_w(v){
    v = document.getElementById(v);
    v.style.width='380px';
    v.style.height='230px';
    v.style.display='block';
}
function close_w(v){
    close_t(v);
    v=document.getElementById(v);
    v.style.display='none';
}
function open_t(v){
    
     v = document.getElementById(v);
     v.style.height='338px';
     v.style.display='block';
}
function close_t(v){
    
    v=document.getElementById(v);
    v.style.display='none';
}