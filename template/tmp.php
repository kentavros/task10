<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Task 10</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 10 -- SQL QUERY</a>
        </div>
    </div>
</nav>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">JOIN</div>
    <table class="table table-hover">
        <tr><td><?=$inner? $inner : ''?></td></tr>
        <tr><td><?=$leftInner? $leftInner : ''?></td></tr>
        <tr><td><?=$rightInner? $rightInner : ''?></td></tr>
        <tr><td><?=$crossInner? $crossInner : ''?></td></tr>
        <tr><td><?=$naturalInner? $naturalInner : ''?></td></tr>
    </table>
</div>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">DISTINCT</div>
    <table class="table table-hover">
        <tr><td><?=$distinct? $distinct : ''?></td></tr>
    </table>
</div>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">GROUP BY</div>
    <table class="table table-hover">
        <tr><td><?=$group? $group : ''?></td></tr>
        <tr><td><?=$group2? $group2 : ''?></td></tr>
    </table>
</div>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">HAVING</div>
    <table class="table table-hover">
        <tr><td><?=$having? $having : ''?></td></tr>
    </table>
</div>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">ORDER</div>
    <table class="table table-hover">
        <tr><td><?=$order? $order : ''?></td></tr>
        <tr><td><?=$order2? $order2 : ''?></td></tr>
    </table>
</div>

<div class="panel panel-default center-block" style="width: 900px; margin-top: 30px;">
    <div class="panel-heading" style="background-color:#14cab0">LIMIT</div>
    <table class="table table-hover">
        <tr><td><?=$limit? $limit : ''?></td></tr>
        <tr><td><?=$limit2? $limit2 : ''?></td></tr>
    </table>
</div>

<footer class="modal-footer navbar-inverse" style="padding: 3px;">
    <div class="container">
        <a class="navbar-brand" style="float: right" href="#">Task 10</a>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- ðÏÓÌÅÄÎÑÑ ËÏÍÐÉÌÑÃÉÑ É ÓÖÁÔÙÊ JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
