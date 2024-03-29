<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>REACH Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="page-tools container">
<div class="action-buttons text-right ">
<a class="btn btn-warning mx-1px text-95" href="book.php" data-title="Print">

Close
</a>
    <button class="btn bg-white btn-light mx-1px text-95 " type="button" onclick="printDiv('printarea')">
    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
    Export
    </button>
</div>
</div>
<div class="page-content container" id="printarea">

<div class="container px-0">
<div class="row mt-4">
<div class="col-12 col-lg-12">
<div class="row">
<div class="col-12">
<div class="text-center text-150">
    <div class="logo">
<span>REACH H</span>otel
</div>
</div>
</div>
</div>
<?php
    require_once 'admin/connect.php';
	$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` ORDER BY `transaction_id` DESC LIMIT 1;") or die(mysqli_query());
	while($fetch = $query->fetch_array()){
	?>


<!-- SELECT * FROM `transaction`
ORDER BY `transaction_id` ,'extra','days' DESC
LIMIT 1;

SELECT `transaction_id`, `extra`, `days` FROM `transaction` ORDER BY `transaction_id` DESCLIMIT 1; -->

<hr class="row brc-default-l1 mx-n1 mb-4" />
<div class="row">
<div class="col-sm-6">
<div>
<span class="text-sm text-grey-m2 align-middle">To:</span>
<span class="text-600 text-110 text-blue align-middle"><?php echo $fetch['firstname']." ".$fetch['lastname']?></span>
</div>

<div class="text-grey-m2">
<div class="my-1">
Godagama Reach Hotel
</div>
<div class="my-1">
No. 23/3, Padukka Rd, Godagama,
</div>
<div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">+94 112 751 385</b></div>
</div>
</div>

<div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
<hr class="d-sm-none" />
<div class="text-grey-m2">
<div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
    
Invoice
</div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span><?php echo $fetch['transaction_id']?> </div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> <?php echo date("l jS \of F Y ") ?></div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Pending</span></div>
</div>
</div>

</div>
<div class="mt-4">
<div class="row text-600 text-white bgc-default-tp1 py-25">
<div class="d-none d-sm-block col-1">#</div>
<div class="col-9 col-sm-5">Description</div>
<div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
<div class="d-none d-sm-block col-sm-2">Unit Price (Rs.)</div>
<div class="col-2">Amount (Rs.)</div>
</div>
<hr />
<div class="text-95 text-secondary-d3">
<div class="row mb-2 mb-sm-0 py-25">



<div class="d-none d-sm-block col-1">1</div>
<div class="col-9 col-sm-5"><?php echo $fetch['room_type']?></div>
<div class="d-none d-sm-block col-2"><?php echo $fetch['days']?>  Days</div>
<div class="d-none d-sm-block col-2 text-95"><?php echo $fetch['price']?>.00</div>
<div class="col-2 text-secondary-d2"><?php echo $fetch['days'] * $fetch['price'] ?>.00 </div>
</div>
<div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
<div class="d-none d-sm-block col-1">2</div>
<div class="col-9 col-sm-5">Light Refreshments</div>
<div class="d-none d-sm-block col-2"><?php echo $fetch['extra']?></div>
<div class="d-none d-sm-block col-2 text-95">1000.00(Per person)</div>
<div class="col-2 text-secondary-d2"><?php echo $fetch['extra']*1000?>.00</div>
</div>

</div>
<div class="row border-b-2 brc-default-l2"></div>


<div class="row mt-3">
<div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
</div>
<div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
<div class="row my-2">

</div>
<div class="row my-2 align-items-center bgc-primary-l3 p-2">
<div class="col-7 text-right">
Total Amount
</div>
<div class="col-5">
<span class="text-150 text-success-d3 opacity-2">Rs.<?php echo $fetch['extra']*1000 + ( $fetch['days'] * $fetch['price'])?>.00</span>
</div>
</div>
</div>
</div>

<hr />
<div>
<span class="text-secondary-d1 text-105">Thank you for your business</span>
<!-- <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a> -->
<div class="page-header text-blue-d2">
    <h1 class="page-title text-secondary-d1">
    Invoice
    <small class="page-info">
    <i class="fa fa-angle-double-right text-80"></i>
    Transaction ID: <?php echo $fetch['transaction_id']?>
    </small>
    </h1>
    

    
    </div>
    </div>
    <?php
		}
	?>
 
</div>
</div>
</div>
</div>


<style type="text/css">
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: #fff;
    text-transform: uppercase;
    background:pink;
}

.logo span{
    color: var(--pink);
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

</style>
<script type="text/javascript"></script>

<script>
function printDiv(divName){

    var printcontents = document.getElementById(divName).innerHTML;
    var originalcontents = document.body.innerHTML;
    document.body.innerHTML = printcontents;
    window.print();
    document.body.innerHTML = originalcontents;
}

</script>
</body>
</html>