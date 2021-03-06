<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Count Frontees and Backees</title>

	<style type="text/css">
	body {
		background-color: #fff;
		margin: 3%;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
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
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	textarea {
	    width: 100%;
	    height: 200px;
	    padding: 12px 20px;
	    font-size: 12px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    resize: none;
	}
	input[type=submit] {
		background-color: #6ba6ce;
		border: none;
		color: white;
		padding: 16px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
	</style>
</head>
<body>
	<div id="container">
		<h1>
			Count Frontees and Backees
		</h1>

		<div id="body">
			<form action="/" method="post" accept-charset="utf-8">
			    <textarea name="text">We the People of the United States, in Order to form a more perfect Union, establish Justice, insure domestic Tranquility, provide for the common defence, promote the general Welfare, and secure the Blessings of Liberty to ourselves and our Posterity, do ordain and establish this Constitution for the United States of America.</textarea><br>
			    <input type="submit" name="submit" value="Count 'em up">
			</form>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
	</div>
</body>
</html>

