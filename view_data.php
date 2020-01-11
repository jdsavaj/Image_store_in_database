<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'img_store_in_db';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Check connection
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

//Get image data from database
$result = $db->query("SELECT * FROM images");

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Table V04</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="https://colorlib.com/etc/tb/Table_Fixed_Header/images/icons/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/css/util.css">
      <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/tb/Table_Fixed_Header/css/main.css">
   </head>
   <body>
      <div class="limiter">
         <div class="container-table100">
            <div class="wrap-table100">
               <div class="table100 ver1 m-b-110">
                  <div class="table100-head">
                     <table>
                        <thead>
                           <tr class="row100 head">
                              <th class="cell100 column1">Sr No.</th>
                              <th class="cell100 column2">Name</th>
                              <th class="cell100 column3">Size</th>
                              <th class="cell100 column4">Type</th>
                              <th class="cell100 column5">Image</th>
                              <th class="cell100 column6">Created Date</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="table100-body js-pscroll">
                     <table>
                        <tbody>
                           <?php $i = 1;if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		header("Content-type: image/jpg");
		echo $row['image'];
		?>
                     <tr class="row100 body">
                              <td class="cell100 column1"><?php echo $i; ?></td>
                              <td class="cell100 column2"><?php echo $row['name']; ?></td>
                              <td class="cell100 column3"><?php echo $row['size']; ?></td>
                              <td class="cell100 column4"><?php echo $row['type']; ?></td>
                              <td class="cell100 column5"></td>
                              <td class="cell100 column6"><?php echo $row['created_date']; ?></td>
                           </tr>
                     <?php $i++;}} else {?>
                     <tr class="row100 body">
                              <td class="cell100 column1"></td>
                              <td class="cell100 column2"></td>
                              <td class="cell100 column3">NO Image Found ..!</td>
                              <td class="cell100 column4"></td>
                              <td class="cell100 column5"></td>
                              <td class="cell100 column6"></td>
                           </tr>
                     <?php }?>
                        </tbody>
                        <tfoot>
                           <tr class="row100 head">
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
               <!-- <div class="table100 ver2 m-b-110">
                  <div class="table100-head">
                     <table>
                        <thead>
                           <tr class="row100 head">
                              <th class="cell100 column1">Class name</th>
                              <th class="cell100 column2">Type</th>
                              <th class="cell100 column3">Hours</th>
                              <th class="cell100 column4">Trainer</th>
                              <th class="cell100 column5">Spots</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="table100-body js-pscroll">
                     <table>
                        <tbody>
                           <tr class="row100 body">
                              <td class="cell100 column1">Like a butterfly</td>
                              <td class="cell100 column2">Boxing</td>
                              <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                              <td class="cell100 column4">Aaron Chapman</td>
                              <td class="cell100 column5">10</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div> -->
               <!-- <div class="table100 ver3 m-b-110">
                  <div class="table100-head">
                     <table>
                        <thead>
                           <tr class="row100 head">
                              <th class="cell100 column1">Class name</th>
                              <th class="cell100 column2">Type</th>
                              <th class="cell100 column3">Hours</th>
                              <th class="cell100 column4">Trainer</th>
                              <th class="cell100 column5">Spots</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="table100-body js-pscroll">
                     <table>
                        <tbody>
                           <tr class="row100 body">
                              <td class="cell100 column1">Like a butterfly</td>
                              <td class="cell100 column2">Boxing</td>
                              <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                              <td class="cell100 column4">Aaron Chapman</td>
                              <td class="cell100 column5">10</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div> -->
               <!-- <div class="table100 ver4 m-b-110">
                  <div class="table100-head">
                     <table>
                        <thead>
                           <tr class="row100 head">
                              <th class="cell100 column1">Class name</th>
                              <th class="cell100 column2">Type</th>
                              <th class="cell100 column3">Hours</th>
                              <th class="cell100 column4">Trainer</th>
                              <th class="cell100 column5">Spots</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="table100-body js-pscroll">
                     <table>
                        <tbody>
                           <tr class="row100 body">
                              <td class="cell100 column1">Like a butterfly</td>
                              <td class="cell100 column2">Boxing</td>
                              <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                              <td class="cell100 column4">Aaron Chapman</td>
                              <td class="cell100 column5">10</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div> -->
               <!-- <div class="table100 ver5 m-b-110">
                  <div class="table100-head">
                     <table>
                        <thead>
                           <tr class="row100 head">
                              <th class="cell100 column1">Class name</th>
                              <th class="cell100 column2">Type</th>
                              <th class="cell100 column3">Hours</th>
                              <th class="cell100 column4">Trainer</th>
                              <th class="cell100 column5">Spots</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <div class="table100-body js-pscroll">
                     <table>
                        <tbody>
                           <tr class="row100 body">
                              <td class="cell100 column1">Like a butterfly</td>
                              <td class="cell100 column2">Boxing</td>
                              <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                              <td class="cell100 column4">Aaron Chapman</td>
                              <td class="cell100 column5">10</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/jquery/jquery-3.2.1.min.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/bootstrap/js/popper.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/bootstrap/js/bootstrap.min.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/select2/select2.min.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.min.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script type="e4b5e765f589f0435e43b0ee-text/javascript">
         $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
               ps.update();
            })
         });


      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script type="e4b5e765f589f0435e43b0ee-text/javascript">
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-23581568-13');
      </script>
      <script src="https://colorlib.com/etc/tb/Table_Fixed_Header/js/main.js" type="e4b5e765f589f0435e43b0ee-text/javascript"></script>
      <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="e4b5e765f589f0435e43b0ee-|49" defer=""></script>
   </body>
</html>