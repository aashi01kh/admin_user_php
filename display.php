<?php
include("connection.php");

$query = "SELECT * FROM form";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <style>
        table {
            margin: 0 auto; /* Center the table horizontally */
            background-color: #f2f2f2; /* Set the background color */
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #555555; /* Set the header background color */
            color: white; /* Set the header text color */
        }

        tr:nth-child(even) {
            background-color: #dddddd; /* Set the alternate row background color */
        }
    </style>

    <table>
        <tr>
            <th>name</th>
            <th>Quantity</th>
            <th>weight</th>
            <th>Box Count</th>
        </tr>

        <?php
        $a = 0;
        $qu = 0;
        $we = 0;
        $bc = 0;
        while ($result = mysqli_fetch_assoc($data)) {
            $a = $a + 1;
            $qu = $qu + $result['Quantity'];
            $we = $we + $result['weight_id'];
            $bc = $bc + $result['box_count'];
            ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $result['Quantity']; ?></td>
                <td><?php echo $result['weight_id']; ?></td>
                <td><?php echo $result['box_count']; ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td><?php echo "TOTAL"; ?></td>
            <td><?php echo $qu; ?></td>
            <td><?php echo $we; ?></td>
            <td><?php echo $bc; ?></td>
        </tr>
    </table>

    <form action="login.php" method="post">
        <input type="submit" value="Logout">
    </form>

    <?php
}
?>