function addCopyHandler(id_button, id_text_field)
{
	try
	{
		var btn = document.querySelector('#' + id_button);

		if (btn !== null)
		{
			btn.addEventListener('click', function()
			{
				var text = document.querySelector('#' + id_text_field);

				if (text !== null)
				{
					text.select();
					document.execCommand('copy');
				}
			}, false);
		}
	}
	catch (e)
	{
		// ...
	}
}

function addFileChangeHandler(id_file, id_label)
{
	try
	{
		var file_input = document.querySelector('#' + id_file);
		var label = document.querySelector('#' + id_label);

		if (file_input !== null && label !== null)
		{
			file_input.addEventListener('change', function(e)
			{
				var filename = e.target.value.split( '\\' ).pop();
				if (filename)
				{
					label.innerHTML = filename;
				}
			});
		}
	}
	catch (e)
	{
		// ...
	}
}

jQuery.fn.preventDoubleSubmission = function() {
  $(this).on('submit',function(e){
    var $form = $(this);

    if ($form.data('submitted') === true) {
      // Previously submitted - don't submit again
      e.preventDefault();
    } else {
      // Mark it so that the next submit can be ignored
      $form.data('submitted', true);
    }
  });

  // Keep chainability
  return this;
};


if((/iPhone|iPad|iPod/i.test(navigator.userAgent))==false)
{
	$("input[name='password1'").on('input',function()
	{
		$("#password_parameters").show();
		var input_value = $("input[name='password1'").val();
		var input_length = input_value.length;
		if ((input_length) >= 10)
		{
			$("#input_length_check").attr('src', '/_images/register/check.png');
		}
		else
		{
			$("#input_length_check").attr('src', '/_images/register/warning.png');
		}
		if (/[a-z]/.test(input_value) == true)
		{
			$("#input_lowercase_check").attr('src', '/_images/register/check.png');
		}
		else
		{
			$("#input_lowercase_check").attr('src', '/_images/register/warning.png');
		}
		if (/[A-Z]/.test(input_value) == true)
		{
			$("#input_uppercase_check").attr('src', '/_images/register/check.png');
		}
		else
		{
			$("#input_uppercase_check").attr('src', '/_images/register/warning.png');
		}
		if (/[0-9]/.test(input_value) == true)
		{
			$("#input_number_check").attr('src', '/_images/register/check.png');
		}
		else
		{
			$("#input_number_check").attr('src', '/_images/register/warning.png');
		}
		if (((input_length) >= 10) && (/[a-z]/.test(input_value) == true) && (/[A-Z]/.test(input_value) == true) && (/[0-9]/.test(input_value) == true))
		{
			$("#register_submit_button").attr('disabled', false);
		}
		else
		{
			$("#register_submit_button").attr('disabled', true);
		}
	})
}

function passwordCheck()
{
	if((/iPhone|iPad|iPod/i.test(navigator.userAgent))==false)
	{
		var error_message_value = $(".error_message").html();
		if (((error_message_value.includes("password"))) && (!(error_message_value.includes("Request Forgotten Password"))))
		{
			// Anything password related.
			$("#password_parameters").show();
			$("#register_header").hide();
			$(".error_message").html('<center>Please choose a stronger password.</center>');
		}
		else
		{
			// Else: show error from account class.
			$("#password_parameters").hide();
		}
		if (error_message_value.includes("Must contain at least 10 characters.") == false)
		{
			$("#input_length_check").attr('src', '/_images/register/check.png');
		}
		if (error_message_value.includes("Must contain at least 1 lowercase letter.") == false)
		{
			$("#input_lowercase_check").attr('src', '/_images/register/check.png');
		}
		if (error_message_value.includes("Must contain at least 1 uppercase letter.") == false)
		{
			$("#input_uppercase_check").attr('src', '/_images/register/check.png');
		}
		if (error_message_value.includes("Must contain at least 1 number.") == false)
		{
			$("#input_number_check").attr('src', '/_images/register/check.png');
		}
	}
}