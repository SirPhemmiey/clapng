<html style="background-color: #F5F5F5;">

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<?php if($json['ResponseCode']==00): ?>
		<style>
	.container{
		max-width: 640px;
		width: 98%;
		margin: 0px auto;
		color: #ffffff;
		box-sizing: border-box;
		background-color: #4c8dfb;
		border-radius: 8px;
		text-align: center;
		padding: 1.5em;
		position: relative;
		top:100;


	}
	</style>
<?php else: ?>

	<style>
	.container{
		max-width: 640px;
		width: 98%;
		margin: 0px auto;
		color: #ffffff;
		box-sizing: border-box;
		background-color: #eb363a;
		border-radius: 8px;
		text-align: center;
		padding: 1.5em;
		position: relative;
		top:100;
<?php endif ?>

	}
	</style>
</head>

<body style="font-family: 'Helvetica Neue', Helvetica, sans-serif; text-align: center;">
	<?php if($json['ResponseCode']==00): ?>

	<div class="container">
		<p style="font-size: 1.6em; font-weight: bold; margin-bottom: 0.5em;"><?php echo  $json['ResponseDescription'] ?></p>

		<p style="font-size: 1.15em;"><br>
		
		Payment Reference: <?php echo  $json['PaymentReference'] ?><br>
		Transaction Reference: <?php  echo  $submittedref ?><br>
		Please write down your Transaction Reference.

		</p>

		

		

	</div>
<?php else: ?>
		<div class="container">
		<p style="font-size: 1.6em; font-weight: bold; margin-bottom: 0.5em;">Your transaction was not successful.</p>
		<p style="font-size: 1.15em;"><br>
		Transaction Reference: <?php  echo  $submittedref ?><br>
		Reason: <?php echo  $json['ResponseDescription'] ?><br>

		

		</p>

		

		

	</div>

<?php endif; ?>
</body>

</html>