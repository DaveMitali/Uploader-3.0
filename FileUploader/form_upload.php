<html>
<head>
<title> PHP File Uploader</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<br>
<h2><center><u>File Uploader </u></center></h2>
<br><br>

<div class="container">
<form class="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="table" class="control-label col-xs-2">File Name:</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="fname" id="fname" required>
        </div>
      
    </div>
  <div class="form-group">
        <label for="table" class="control-label col-xs-2">Project Name:</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="pname" id="pname" required>
        </div>
       
    </div>
    <div class="form-group">
        <label for="table" class="control-label col-xs-2">Project Lead Name:</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="plname" id="plname" required>
    </div>
        
    </div>

    <div class="form-group">
        <label for="table" class="control-label col-xs-2">File Description:</label>
    <div class="col-xs-3">
        <textarea class="form-control" name="fd" rows="5" cols="40" required></textarea>
    </div>
    </div>

    <div class="form-group">
        <label for="table" class="control-label col-xs-2">Share Type (Public/Private):</label>
    <div class="col-xs-3">
        <input type="radio" name="sharetype" value="Public" checked>Public<br>
    <input type="radio" name="sharetype" value="Private">Private<br>
    </div>
    </div>
    
    <!--<div class="form-group">
        <label for="mysql" class="control-label col-xs-2">Mysql Server address (or)<br>Host name</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="mysql" id="mysql" placeholder="" >
    </div>
    </div>
  <div class="form-group">
        <label for="username" class="control-label col-xs-2">Username</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="username" id="username" placeholder="" >
    </div>
    </div>
  <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password</label>
    <div class="col-xs-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="" >
    </div>
    </div>--><br>
    <div class="form-group">
    <label for="file" class="control-label col-xs-2">Select a file to upload to "Uploads" folder</label>
    <div class="col-xs-3">
    <input type="file" name="file" id="file" required>
    <p class="help-block"></p>
                  </div>
    <input type="submit" class="btn btn btn-primary" value="Upload">
    </form></div>
    
    <div class="container">
    <form class="form-horizontal" action="viewfiles.php" method="post" enctype="multipart/form-data" >
      <div class="form-group">
      <label for="view" class="control-label col-xs-2"></label>
      <div class="col-xs-3">
      <input type="submit" class="btn btn btn-primary" value="View Uploaded Files"></div></div>
    </form></div>
</body>
</html>