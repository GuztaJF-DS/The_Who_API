<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to The Who Api</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color:#01015c;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #242323;
	}

	h1 {
		color: #242323;
		background-color: transparent;
		border-bottom: 1px solid #cc0033;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #cc0033;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		background-color:#ffffff;
		color: #242323;
		margin: 10px;
		border: 1px solid #cc0033;
		box-shadow: 0 0 8px #cc0033;
	}
	
	.who{
		height:400px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to The Who Api</h1>

	<div id="body">
		<p>Hi to Everyone, this is a pretty simple Api made in Codeigniter where i list The Top 34 The Who's Uk Singles.</p>
		<p>If You want to check the Sql database go to Assets Folder, and take a look at the Txt archive named Sql DataBase</p>
		<p>Also, the expected result can be seen in the Assets Folder, in the Json Archive Named theWho</p>
		<p>You are Free to add any The Who Song, or fix anything Wrong and then make a pull request at GitHub</p>
		<p>The Default Url to make the Requests is (your Localhost)/Api_TheWho/index.php/theWho</p>
		<p>By the Way, i am using Xampp, so maybe in the Program that you use, you don't have do write the /Api_TheWho</p>
		<img src="https://upload.wikimedia.org/wikipedia/commons/1/13/The_Who_Logo.svg" class="who">
	</div>

</body>
</html>