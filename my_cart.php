<html>
<head>

    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
        table td,th {
            border: 1px solid black;
        }
        td {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Play Lists</h2>

    <table>
        <th>Voice SKU</th>
        <th>Voice Name</th>
    

        <?php
       session_start();
      foreach ($_SESSION['playlist'] as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>\n<td>" . $value . "</td>";
        



        // echo "<td>" ."<button class='delbtn' data-id='"+ k +"'>Delete</button>" . "<td>";


        echo "</tr>";    
        }

        ?>
    </table>
</body>
</html>