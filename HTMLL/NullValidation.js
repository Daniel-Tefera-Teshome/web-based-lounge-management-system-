			<script type="text/javascript">
				function validate_required(field,alerttxt)
				{
					with (field)
					{
						if (value==null||value=="")
						{
							alert(alerttxt);return false;
						}
						else
						{
							return true;
						}
					}
				}
				function validate_form(thisform)
				{
					with (thisform)
					{
						if (validate_required(fname,"Email must be filled out!")==false)
						{
							fname.focus();
							return false;
						}
					}
				}
			</script>