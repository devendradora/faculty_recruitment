
<script>
function scrollup(){
	$("html","body").animate({scrollTop:0},'slow');
}
$("#search").click(function(e){
	var formdata={};
	formdata.tag_name=$("#tag-text").val();
	if(formdata.tag_name=="") return;
	formdata="formdata="+JSON.stringify(formdata);
	console.log(formdata);
	$.ajax({
		url:'<?php echo base_url()."main/retrieve_tags_data";?>',
		type:"POST",
		data:formdata,
		beforeSend:function(xhr){
			$("#loading-overlay").show();
		},
		success:function(data,textStatus,jqXHR){
			$("#loading-overlay").hide();
			console.log(textStatus);
			console.log(data);
			data=JSON.parse(data);	
			console.log(data);
			$("#tags-content").hide();
			$("#tags-content").empty();
			if(data==""){
				$("#tags-content").html('<div class="alert alert-warning">No tags found..</div>');
			}
			else
			{
			$("#tags-content").html('<div class="alert alert-success" style="margin:0 15px 20px 15px;">Relevant tags:</div>');	
			for(var key in data)
			{
				if(data.hasOwnProperty(key))
				{
					var box=document.createElement('div');
					box.setAttribute("class","col-md-2 col-sm-3 col-xs-6 tag-div");
					var body=document.createElement('div');
					body.setAttribute("class","clearfix custom-background");
					var link=document.createElement('a');
					link.setAttribute("href","#");
					link.innerHTML=data[key];
					body.appendChild(link);
					box.appendChild(body);
					document.getElementById('tags-content').appendChild(box);
				}
			}
			}
			$("#tags-content").show();
				
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log('error');
			$("#loading-overlay").hide();
		} 
	});
});
</script>