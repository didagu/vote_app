


//var downvote = $("#followup-check2");
//var vote = document.getElementById('vote');
//var count = $("#count").val();
//alert (count);
//for (var i = 0; i < count; i++) {
	
var upvote = $("#followup-check");

upvote.click(function(){
	 
	var result = 1;
	$("#vote").val(result);
	//alert(result);
	$("#followup-check").prop('checked',true);

	document.forms["myForm"].submit();

	

//if (upvote.checked){
//		alert("its monday");
//	}

});
//}

	 

/*downvote.click(function(){
	
		var result = 0;
		$("#vote").val(result);
		//alert(result);
		$("#followup-check2").prop('checked',true);

		document.forms["myForm"].submit();

		
	<?php 
                            $request = "SELECT * from voterecord WHERE option_id=$optid and user_id=$user_id and policy_id = $id";
                        
                            $result2=$conn->query($request);
                            $rows2=$result2->fetch_assoc();
                            $value=$rows2['vote'];
                            $uid = $rows2['user_id']; 
                            $pid = $rows2['policy_id']; 
                            
                            if ($result2->num_rows>1){
                                   echo "disabled checked";
                                }
                                elseif ($uid==$user_id && $pid==$id){

                                	echo "  disabled";
                                
                                }

                                else{
                                   echo "";
                                }
                            
                            
                       ?>


});*/

//function doClick(){


//	vote = 0;

//}

//else{
//	var result = 0;
//	$("#vote").val(result);
//}
                      
                           // function noMo() {

                               // $("#followup-check").prop('disabled',true);
                                //$("#followup-check2").prop('disabled',true);
                            //}
                        
