<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guestbook</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		body {
			padding: 2em 0;

		}
		.error { font-weight: bold; color: red;}
	</style>
</head>
<body class="container">

	<div id="guestbook">

		<form method="POST" v-on='submit: onSubmitForm'>
			<div class="form-group">
				<label for="name">
					Name
					<span class="error">*</span>
				</label>
				<input type="text" name="name" id="name" class="form-control" v-model='newMessage.name'>
			</div>

			<div class="form-group">
				<label for="name">
					Message
					<span class="error">*</span>
				</label>
				<textarea name="message" id="message" class="form-control" v-model="newMessage.message"></textarea> 
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-submit" v-attr="disabled: errors">Sign Guestbook</button>				
			</div>
		</form>
		
		<article v-repeat="messages">
			<h3>@{{name}}</h3>
			<div class="body">
				@{{message}}
			</div>	
		</article>

		<br><hr>
		

	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js"></script>
	<script type="text/javascript" src="/js/vue-resource.js"></script>
	<script type="text/javascript" src="/js/guestbook.js"></script>
</body>
</html>