
<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	
</head>
<body>
<script type="text/javascript">
$(function(){
  var total;
  $('#checkbox1').click(function(){
    if (this.checked) {
       $('#textbox1').val(500);
       updateTotal();
    }
    else
    {
    	
    	 $('#textbox1').val(null);
    	  update();
    }
  });
   $('#checkbox2').click(function(){
    if (this.checked) {
       $('#textbox2').val(700);
       updateTotal();
    }
     else
    {
    	 
    	 $('#textbox2').val(null);

    	  update();
    }
  });
 
   $('#checkbox3').click(function(){
    if (this.checked) {
       $('#textbox3').val(800);
       updateTotal();
    }
     else
    {
    	 $('#textbox3').val(null);
    	  update();
    }
  });
    $('#checkbox4').click(function(){
    if (this.checked) {
       $('#textbox4').val(900);
       updateTotal();
    }
     else
    {
    	 $('#textbox4').val(null);
    	  update();
    }
  });
     $('#checkbox5').click(function(){
    if (this.checked) {
       $('#textbox5').val(400);
       updateTotal();
    }
     else
    {
    	 $('#textbox5').val(null);
    	  update();
    }
  });

  
  function updateTotal(){
    total=0;
    $('.textboxes').each(function() {
      total += Number($(this).val());
    });
    $('#totalSum').val(total);
  }
  updateTotal();

  function update(){
  	  total=0;
  	
  	  $('.textboxes').each(function() {
      total=total-Number($(this).val());
    });
    $('#totalSum').val(Math.abs(total));
  }
  update();
});
</script>




	<form action="send.php" name="f1" method="POST">
		
	<table border="1" cellpadding="5" style="text-align:center"> 
		<tr> 
			<th> </th>
			<th> Select Fees</th>
			<th> Amount</th>
			<th> Account no</th>
		</tr>
		<tr> 
			<td> <input type="checkbox" id="checkbox1" > </td>
			<td> Semester Fees</td>
			<td><input class="textboxes" id="textbox1" /> </td>
			<td> 1</td>
		</tr>
		<tr> 
			<td> <input type="checkbox" id="checkbox2" > </td>
			<td> Exam Fees</td>
			<td><input class="textboxes" id="textbox2" /></td>
			<td> 2</td>
		</tr>
		<tr> 
			<td> <input type="checkbox" id="checkbox3" > </td>
			<td> Hall Charge</td>
			<td><input class="textboxes" id="textbox3" /></td>
			<td> 3</td>
		</tr>
		<tr>
			<td> <input type="checkbox" id="checkbox4" > </td>
			<td> Course Fee</td>
			<td><input class="textboxes" id="textbox4" /> </td>
			<td> 4</td>
		</tr>
		<tr> 
			<td> <input type="checkbox" id="checkbox5" ></td>
			<td> Session Fee</td>
			<td><input class="textboxes" id="textbox5" /></td>
			<td> 5</td>
		</tr>
		
		
	</table>


        <br><p>Total Amount</p><br>
        <div><input id="totalSum" name='sum'></div>


			<input type="submit" value="Submit">


</form>		
</body>
</html>
