<!DOCTYPE html>
<html>
<head>
	<title>Editor</title>
    <link rel="stylesheet" type="text/css" href="lib/codemirror/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="lib/codemirror/theme/ambiance.css">
    <script src="lib/jQuery/jQuery.js"></script>
    <script src="lib/codemirror/lib/codemirror.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="editor-action.js"></script>
    <script src="lib/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="lib/codemirror/mode/xml/xml.js"></script>
    <script src="lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="lib/codemirror/mode/css/css.js"></script>
    <script src="lib/codemirror/mode/clike/clike.js"></script>
    <script src='lib/codemirror/mode/php/php.js'></script>
    <script src='lib/codemirror/addon/selection/active-line.js'></script>
    <script src='lib/codemirror/addon/edit/matchbrackets.js'></script>
</head>
<body>
<h1> Online Compiler</h1>

<table class="code">
				<td class="code">	
				<form action="compile.php" method="post" id="form">
					Select Language of Interest:
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							<option value="python2.7">Python</option>
							<option value="python3.2">Python3</option>
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>


<div class="row">
    <textarea class="codemirror-textarea" id="code-editor" style="margin: 0px; width: 703px; height: 420px;"></textarea>
    </div>
    <div class="app-row">
    <button class="btn-action" id="Compile">Compile</button>

        <button class="btn-action" id="run">Run</button>
    </div>

<div class="row" style="margin: 0px; width: 703px; height: 420px;">	
  <div id="result"></div>
</div>	
    
</body>
</html> 