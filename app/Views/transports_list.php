<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>Transports | <?=$transportClass;?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo $this->include('sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php echo $this->include('topvar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="text-transform: capitalize;"><?=$transportClass;?></h1>
                    </div>

                    <div class="row">
                    	<?=$st;?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php echo $this->include('footer'); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Transport Modal-->
    <div class="modal fade" id="transportModal" tabindex="-1" role="dialog" aria-labelledby="transportModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transportModalLabel"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                	<div class="container">
	                	<div class="row" id="loading_ajax">
	                		<div class="col" style="text-align: center;"><img src="ajax_loading.gif" /></div>
	                	</div>
	                	<form>
		                	<div id="modalData">
			                	<div class="row">
			                		<div class="col-4"><label class="form-label">Model:</label></div>
			                		<div class="col-8"><span id="transportModel"></span></div>
			                	</div>
			                	<div class="row">
			                		<div class="col-4"><label class="form-label">Manufacturer:</label></div>
			                		<div class="col-8"><span id="transportManufacturer"></span></div>
			                	</div>
			                	<div class="row">
			                		<div class="col-4"><label class="form-label">SubType:</label></div>
			                		<div class="col-8"><span id="transportSubtype"></span></div>
			                	</div>
			                	<div class="row">
			                		<div class="col-4"><label class="form-label">Count:</label></div>
			                		<div class="col-8"><span id="transportCount"></span></div>
			                	</div>
			                	<div class="row">
				                	<div class="col-4">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="incrementreduce" checked value="increment" id="increment">
											<label class="form-check-label" for="increment">Increment</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="incrementreduce" value="reduce" id="reduce">
											<label class="form-check-label" for="reduce">Reduce</label>
										</div>
									</div>
			                		<div class="col-8"><input class="form-control" type="text" id="newCount" value="10"></div>
			                	</div>
			                </div>
			            </form>
		            </div>
                </div>
                <input type="hidden" id="modalOriginalDataId">
                <input type="hidden" id="modalOriginalDataCount">
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id="acceptTransportModal">Accept</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $this->include('scripts'); ?>

</body>

</html>