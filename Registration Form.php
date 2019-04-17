<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="connect.php">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" name="lname" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Father Name</label>
							<input type="text" name="fname" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Mother Name</label>
							<input type="text" name="mname" class="form-control">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" name="cpass" class="form-control">
					</div>

                    <div class="form-wrapper">
					     <br>
						<table>
						<tr>
<td>Date Of Birth</td>
<td>
<input type="date" name="date">
</td>
</tr>
						</table>
					</div>

<div class="form-wrapper">
						<label for="">Gender</label>
						Male <input type="radio" id="m" name="Gender" value="Male" />
Female <input type="radio" name="Gender" id="f" value="Female" />
					</div>


<div class="form-wrapper">
                        <label for="">Address</label>
                        <input type="text" name="add">
											</div>

<div class="form-group">
						<div class="form-wrapper">
							<label for="">Pincode</label>
							<input type="Pincode" name="pin" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Country</label>
							<input type="text" name="coun" class="form-control">
						</div>
</div>
<div id="main" class="form-wrapper">
						<label for="">Qualification</label>
						
						<table>
 <tr>

<td align="center"><b>Sl.No.</b></td>
<td align="center" style="width:130px;"><b>Examination</b></td>
<td align="center" style="width:200px;"><b>Board</b></td>
<td align="center" style="width:180px;"><b>Percentage</b></td>
<td align="center" style="width:230px;"><b>Year of Passing</b></td>
<td align="center" style="width:130px;"><b><input type="button" id="btAdd" value="Add" class="bt" /></b></td>
<td align="center"><b><input type="button" id="btRemoveAll" value="Remove All" class="bt" /><br /></b></td>
</tr>
<tr>
 	<script>
    $(document).ready(function() {

        var iCnt = 0;
        // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
        var container = $(document.createElement('div')).css({
             width: '785px'
        });

        $('#btAdd').click(function() {
            if (iCnt <= 3) {

                iCnt = iCnt + 1;

                // ADD TEXTBOX.
                $(container).append(+iCnt+'<input type=text style="margin-left:50px" class="input" name="exam" id=tb' + iCnt + ' ' +
                    'value="Text Element ' + iCnt + '" /><input type="text" class="input" name="board" id=tb ' + iCnt + ' style="margin-left:20px" ' +
                    'value="Text Element ' + iCnt + '"/><input type="text" class="input" name="per" id=tb ' + iCnt + ' style="margin-left:20px" ' +
                    'value="Text Element ' + iCnt + '"/><input type="text" class="input" name="year" id=tb ' + iCnt + ' style="margin-left:3px" ' +
                    'value="Text Element ' + iCnt + '"/>');
                

                // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                if (iCnt == 4) {
                    var divSubmit = $(document.createElement('div'));
                  
                }

                // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
                $('#main').after(container, divSubmit);
            }
            // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
            // (20 IS THE LIMIT WE HAVE SET)
            else {      
                $(container).append('<label style="margin-top : 20px; margin-left : 40px;">Reached the limit</label>'); 
                $('#btAdd').attr('class', 'bt-disable'); 
                $('#btAdd').attr('disabled', 'disabled');
            }
        });

        // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
        $('#btRemoveAll').click(function() {
            $(container)
                .empty()
                .remove(); 

            $('#btSubmit').remove(); 
            iCnt = 0; 
            
            $('#btAdd')
                .removeAttr('disabled') 
                .attr('class', 'bt');
        });
    });
</script>
</tr>
</table>

</div>
<br>
<br>
<div class="form-wrapper">
						<label for="">Course</label>
BCA
<input type="radio" name="Course" value="BCA" >
B.Com
<input type="radio" name="Course" value="B.Com">
B.Sc
<input type="radio" name="Course" value="B.Sc">
B.A
<input type="radio" name="Course" value="B.A">
B.TECH
<input type="radio" name="Course" value="B.TECH">
						
					</div>


					<div class="checkbox">
						<label>
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button name="sub">Register Now</button>
				</form>
			</div>
		</div>

	</body>
</html>