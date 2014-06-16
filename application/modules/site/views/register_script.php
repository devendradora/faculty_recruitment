<script>
function finalstep_clicked()
{
	var x=document.getElementById('image_div');
	x.style.display='none';
	x=document.getElementById('form_div');
	x.style.display='none';
	x=document.getElementById('final_div');
	x.style.display='inline';
}
function back_clicked()
{
	var x=document.getElementById('final_div');
	x.style.display='none';
	x=document.getElementById('image_div');
	x.style.display='inline';
	x=document.getElementById('form_div');
	x.style.display='inline';
}
function checkbox_selection(y)
{
	var z=document.getElementById('college');
	z.style.display='none';
	var x=document.getElementById('organization');
	x.style.display='none';
	if('s'==y)
		z.style.display='inline';
	else if('p'==y)
		x.style.display='inline';
}
function checkpass()
{
	var x=document.getElementById('password').value;
	var y=document.getElementById('confirm_password').value;
	var z=document.getElementById('passresult');
	z.style.display='inline';
	if(x==='' && y==='')
	{
		z.style.color='inherit';
		z.innerHTML='';
		z.style.display='none';
		$('#finalstep').prop('disabled',false);
	}
	else if(x===y)
	{
		z.style.color='green';
		z.innerHTML='Passwords match';
		$('#finalstep').prop('disabled',false);
	}
	else
	{
		z.style.color='red';
		z.innerHTML="Passwords don't match";
		$('#finalstep').prop('disabled',true);
	}
}
</script>