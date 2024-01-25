<?php
// Connect to the database
include('../db_connect.php');

// Query for a list of all existing files
$sql = 'SELECT * FROM `loan_application`';
$result = $conn->query($sql);

// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>Name</b></td>
                    
                    <td><b>&nbsp;</b></td>
                </tr>';

        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['MemberID']}&nbsp;&nbsp;{$row['file']} <a href='agezweho/{$row['file']}'>kanda hano</a></td>
                    
                    <td></td>
                </tr>";
        }

        // Close table
        echo '</table>';
    }

    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$con->error}</pre>";
}

// Close the mysql connection
$con->close();
?>