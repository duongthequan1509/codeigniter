<script language="javascript" src="../../jsvalidate/jquery.js" type="text/javascript"></script>
<script language="javascript" src="../../jsvalidate/jquery.validate.min.js" type="text/javascript"></script>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>jQuery Validation Tooltip Demo</title>
	<meta name="author" content="Shaun Simmons">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="../../../demomvc/reset.css">
	<link rel="stylesheet" href="../../../demomvc/reset.css">
	<link rel="stylesheet" href="../../../mvc/test/css/jquery.validate.tooltips.css">

	<script src="../../../mvc/test/js/jquery-1.9.0.min.js"></script>
	<script src="../../../mvc/test/js/jquery.validate.min.js"></script>
	<script src="../../../mvc/test/js/jquery.validate.tooltips.min.js"></script>
</head>
<body>

<div id="container">

	<div id="main">

		<h1>jQuery Validation Tooltips Demo</h1>

		<script>
			$(function() {
				var $validator = $("#demo_form").validate({
						debug: true,
						groups: {
							name: 'name_f name_l'
						},
						rules: {
							password_confirm: {
								equalTo: '#password'
							}
						}
					});
				// Demonstrate manually reflowing errors.
				var $xpandable = $("#xpandable"),
					xpandable_height = $xpandable.outerHeight();
				$xpandable.find(".toggle").click(function(e) {
					e.preventDefault();
					$xpandable.stop().animate({
						height: $xpandable.hasClass('contracted') ? xpandable_height + 'px' : '40px'
					}, 300, function() {
						// Pay attention here. This is how you do it.
						$validator.reflow();
					});
					$xpandable.toggleClass('contracted');
					$(this).html( $xpandable.hasClass('contracted') ? '+' : '-');
				});
			});
		</script>

		<div id="xpandable">
			<p>
				Unfortunately, there are no efficient ways <b>that I'm aware of</b> to automatically reposition the
				tooltips if the form fields are moved on screen (e.g. because of a collapsible box). This leads
				to tooltips that don't line up with with their corresponding form fields.
			</p>

			<p>
				To alleviate this issue, the plugin provides a method that can be called manually to refresh the
				tooltip positions. Example usage:
			</p>

			<div class="code"><pre>var $validator = $('#form').validator();

...

$validator.reflow();</pre></div>

			<p>
				You can see this method in action by first clicking the <i>Test</i> button below, then clicking the
				toggle icon over in the top-right of this box.
			</p>

			<a class="toggle" href="#">-</a>
		</div>

		<div id="form_relative_wrap">
			<form id="demo_form" method="get" action="">

				<table>
					<tr>
						<td class="label">
							<label for="name_f">Name:</label>
						</td>
						<td class="value">
							<input type="text" name="name_f" id="name_f" class="half required" placeholder="First Name">
							<input type="text" name="name_l" id="name_l" class="half required" placeholder="Last Name">
						</td>
					</tr>

					<tr>
						<td class="label">
							<label for="username">Username:</label>
						</td>
						<td class="value">
							<input type="text" name="username" id="username" class="required">
						</td>
					</tr>

					<tr>
						<td class="label">
							<label for="password">Password:</label>
						</td>
						<td class="value">
							<input type="password" name="password" id="password" class="required">
						</td>
					</tr>

					<tr>
						<td class="label">
							<label for="password_confirm">Confirm Password:</label>
						</td>
						<td class="value">
							<input type="password" name="password_confirm" id="password_confirm" class="required">
						</td>
					</tr>
				</table>

				<hr>

				<table>
					<tr>
						<td class="label">
							<label>Gender:</label>
						</td>
						<td class="value">
							<label>
								<input type="radio" name="gender" id="gender_m" value="M" class="required">
								Male</label> <br>
							<label>
								<input type="radio" name="gender" id="gender_f" value="F" class="required">
								Female</label> <br>
							<label>
								<input type="radio" name="gender" id="gender_o" value="O" class="required">
								Other</label>

							<p class="note">These labels contain both the input and the text.</p>
						</td>
					</tr>

					<tr>
						<td class="label">
							<label>Speed:</label>
						</td>
						<td class="value">
							<input type="radio" name="speed" id="speed_s" value="S" class="required">
							<label for="speed_s">Slow</label> <br>
							<input type="radio" name="speed" id="speed_f" value="F" class="required">
							<label for="speed_f">Fast</label>

							<p class="note">These labels are linked using the `for` attribute.</p>
						</td>
					</tr>

					<tr>
						<td class="label">
							<label for="favorite_color">Favorite Color:</label>
						</td>
						<td class="value">
							<select name="favorite_color" id="favorite_color" class="required">
								<option value="">- Choose One -</option>
								<option>Red</option>
								<option>Green</option>
								<option>Blue</option>
								<option>Orange</option>
								<option>Purple</option>
								<option>Yellow</option>
								<option>Pink</option>
								<option>White</option>
							</select>
						</td>
					</tr>
				</table>

				<hr>

				<p class="heading">
					Position Tests
				</p>

				<p style="margin-top: 40px">
					<input type="text" name="position_test_t" id="position_test_t" class="required" placeholder="Top" data-errorposition="t">
				</p>

				<p style="margin-left: 205px">
					<input type="text" name="position_test_l" id="position_test_l" class="required" placeholder="Left" data-errorposition="l">
				</p>

				<p style="margin-bottom: 40px">
					<input type="text" name="position_test_b" id="position_test_b" class="required" placeholder="Bottom" data-errorposition="b">
				</p>

				<p>
					<input type="text" name="position_test_r" id="position_test_r" class="required" placeholder="Right" data-errorposition="r">
				</p>

				<p style="margin-left: 205px; margin-top: 40px">
					<input type="text" name="position_test_tl" id="position_test_tl" class="required" placeholder="Top-Left" data-errorposition="tl">
				</p>

				<p style="margin-top: 40px">
					<input type="text" name="position_test_tr" id="position_test_tr" class="required" placeholder="Top-Right" data-errorposition="tr">
				</p>

				<p style="margin-left: 205px; margin-bottom: 40px">
					<input type="text" name="position_test_bl" id="position_test_bl" class="required" placeholder="Bottom-Left" data-errorposition="bl">
				</p>

				<p style="margin-bottom: 40px">
					<input type="text" name="position_test_br" id="position_test_br" class="required" placeholder="Bottom-Right" data-errorposition="br">
				</p>

				<hr>

				<table>
					<tr>
						<td class="label">&nbsp;</td>
						<td class="value">
							<input type="submit" name="do_it" id="do_it" value="Test">
						</td>
					</tr>
				</table>

			</form>
		</div>
	</div>
</div>

</body>
</html>
