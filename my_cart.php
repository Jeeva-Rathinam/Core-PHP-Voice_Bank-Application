<html> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
        $(document).ready(function() {
        $('#voice_bank').DataTable();
    } );
    </script>

</head>
 
<body> 
<div class="container">

    <h2 align="center">Play Lists</h2> 
    <table id="voice_bank" class="table table-striped table-bordered" style="width:80%; margin: 30px 125px;"> 
        <th>Voice SKU</th> 
        <th>Voice Name</th> 
        <th>Action</th> 
 
        <?php 
        session_start(); 

        //unset session value
        if(isset($_GET['key']))
        {
         $key=$_GET['key'];
         if(isset($_SESSION['playlist'][$key]))
         {
          unset($_SESSION['playlist'][$key]);
         }
        }
        foreach ($_SESSION['playlist'] as $key => $value) { 
        $url=$_SERVER['PHP_SELF'].'?key='.$key;
        echo "<tr>"; 

        echo "<td>" . $key . "</td>\n<td>" . $value . "</td>"; 
        //Delete Session
        echo "<td><a href=\"",$url,"\">Delete</a></td>"; 

        echo "</tr>";     
        } 
        ?> 
    </table> 

    </div>

</body> 
</html>

