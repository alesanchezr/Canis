<script type="text/javascript">
 $(document).ready(function(){

	$('#theform').ajaxForm({

						target:         '#standardError',
						beforeSubmit:     validatetheform ,
						success: function()
						{
							$("#standardError").show();
						}
			});

 });

function validatetheform(formData, jqForm, options)
{
	var errors          = 0;

	$("#emailError").empty().hide();
	$("#passwordError").empty().hide();
	$("#rep_passwordError").empty().hide();

	var email         	= $("#email").val();
	var password         	= $("#password").val();
	var rep_password         	= $("#rep_password").val();

	if (noEmpty(email) || !isValidEmail(email))
	{
		$("#emailError").show().append("Email invalido");
		errors++;
	}
	if (noEmpty(password))
	{
		$("#passwordError").show().append("Clave invalida");
		errors++;
	}
	if (noEmpty(rep_password))
	{
		$("#rep_passwordError").show().append("Clave invalida");
		errors++;
	}
	else if(password!=rep_password)
	{
		$("#rep_passwordError").show().append("Clave invalida");
		errors++;
	}


    if (errors > 0)
    {
        return false;
    }
	else
	{
		formData[formData.length] = { "name": "password", "value": $.sha1(password) };
		formData[formData.length] = { "name": "rep_password", "value": "" };
		return true;
	}

}
</script>
<div id="content">

<p style="text-align:center; font-size:14px; margin:0;">Welcome</p>

    <div id="login">

        <div class="error" id="standardError" style="display:none;"></div>

        <div id="loginForm">

            <form id="theform" name="theform" method="post" action="crud.php">
            <input name="action" type="hidden" value="newUser" />

            <table width="420" border="0" style="padding-left:20px;">

                <tr>
                	<td align="left"><label for="label">Email Address:</label></td>
                	<td align="left"><input type="text" name="email" id="email" title=""/><strong class="error" id="emailError"></strong></td>
              	</tr>

              	<tr>
                	<td align="left"><label for="label">Password:</label></td>
                	<td align="left"><input type="password" name="password" id="password" class="blank" title="" /><strong class="error" id="passwordError"></strong></td>
              	</tr>

              	<tr>
                	<td align="left"><label for="label">Repeat Password:</label></td>
                	<td align="left"><input type="password" name="rep_password" id="rep_password" class="blank" title="" /><strong class="error" id="rep_passwordError"></strong></td>
              	</tr>

            </table>
            <table width="320" border="0">

                <tr>
<!--                	<td align="right">
            		<p>&nbsp;</p>
                  	<?php /*?><?php $publickey = "6LeiIQgAAAAAAPxRg5YbAWK8-gaCuYWu5iICzXWM";  echo recaptcha_get_html($publickey); ?>
                    <?php */?></td>-->
                </tr>


                <tr>
                	<td align="left">
            		<p>&nbsp;</p>
                  	<p style="text-align:center;"><input style="" type="submit" name="button" id="button" value="Enviar" /></p>
            		</td>
				</tr>
            </table>
          </form>

        </div>

    </div>

</div>