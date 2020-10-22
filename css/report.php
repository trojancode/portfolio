<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <?php include_once('php_inc/nav-top.php');?>
        <?php include_once("php_inc/nav_side.php");?>
        <?php include_once("php_inc/db.php");?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Report</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    </div>
                </div>

            </div>

            <div class="row mx-3 white-box">
              <form class="" action="download.php" target="_blank" method="post">
                <div class="col-md-3 my-1">
                    <select class="form-control " name="event">
                      <option value="0">All event</option>
                      <option value="1">Paper Presentation</option>
                      <option value="2">Code Debugging</option>
                      <option value="3">Web Designing</option>
                      <option value="4">Idea Pitching</option>
                      <option value="5">Android Development</option>
                    </select>
                </div>
              <!--  <div class="col-md-3 my-1">
                    <select class="form-control " name="reg">
                      <option value="0">All Registration</option>
                      <option value="1">Individual</option>
                    </select>
                </div>-->
                <div class="col-md-2 my-1">
                    <select class="form-control " name="csi">
                      <option value="0">CSi or NON CSI</option>
                      <option value="1">CSi MEMBER</option>
                      <option value="2">Non CSI MEMBER</option>
                    </select>
                </div>
              <!--  <div class="col-md-2 my-1">
                    <select class="form-control " name="paid">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                </div>-->
                <div class="col-md-2 my-1">
                    <button type="submit" name="getexcel" class="btn btn-danger mx-auto w-100 waves-effect waves-light">Export To <span class="fa fa-file-excel-o "></span> </button>
                </div>
              </form>

            </div>
            <div class="row mx-3 my-3 white-box">
              <form class="" action="download.php" target="_blank" method="post">
                <div class="col-md-3 my-1">
                    <select class="form-control " name="reg">
                      <option value="0">All Registration</option>
                      <option value="1">Individual</option>
                    </select>
                </div>
              <!--  <div class="col-md-2 my-1">
                    <select class="form-control " name="paid">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                    </select>
                </div>-->
                <div class="col-md-2 my-1">
                    <button type="submit" name="get_ind" class="btn btn-danger mx-auto w-100 waves-effect waves-light">Export To <span class="fa fa-file-excel-o "></span> </button>
                </div>
              </form>

            </div>
            <?php include_once('php_inc/footer.php'); ?>
        </div>
    </div>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="js/jquery.table2excel.js" charset="utf-8"></script>
    <script type="text/javascript">
          var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,'
              , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
              , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
              , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
              if (!table.nodeType) table = document.getElementById(table)
              var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
              window.location.href = uri + base64(format(template, ctx))
            }
          });
    </script>
</body>

</html>
