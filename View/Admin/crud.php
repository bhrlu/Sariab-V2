<?php

// TODO

    // If data was posted
    if (isset($_POST['update']))
    {
        // declare variables
        $update_query_key_values = '';

        // Get table structure
        // In this case: Potodosts table
        $result = $conn->query("DESCRIBE " . $table_name);

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["Field"] != $table_id) { // because of auto increment
                // dont insert comma for the last record
                if ($update_query_key_values != '')
                    $update_query_key_values .= ', ';
                
                // apend keys to keys array
                $update_query_key_values .= '`' . $row["Field"] . '` = ';

                // Get field type
                // if it was a stirng, add quote in first and last of value
                $type = $row['Type'];
                if (strpos($type, "(") > 0)
                    $type = substr($type, 0, strpos($type, "("));
                $symbol = '';
                if ($type == "varchar"
                or $type == "datetime"
                or $type == "text"
                or $type == "longtext"
                or $type == "char" ) {
                    $symbol = '\'';
                }

                
                // If value is posted and its not null
                if (! isset( $_POST[ $row["Field"] ] ) ) {
                    $update_query_key_values .= "NULL" ;
                }
                else if ($_POST[ $row["Field"] ] == ''
                    and ( $type == "int" or $type == "bit" or $type == "decimal" )
                ) {
                    $update_query_key_values .= "NULL" ;
                }
                else {
                    // append value to values array
                    $update_query_key_values .= $symbol . $_POST[ $row["Field"] ]  . $symbol;
                }
            }
        }

        // assemble final query
        $update_query  = 'UPDATE ' . $table_name . ' SET ' . $update_query_key_values . ' WHERE ' . $table_id . ' = '. $_POST[$table_id] ;
        
        // run the query !
        mysqli_query($conn, $update_query);
    }
    else if (isset($_POST['insert']))
    {
        // declare variables
        $insert_query_keys = $insert_query_values = '';

        // Get table structure
        $result = $conn->query("DESCRIBE " . $table_name);

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["Field"] != $table_id) { // because of auto increment
                // dont insert comma for the last record
                if ($insert_query_keys != '')
                    $insert_query_keys .= ', ';
                
                // apend keys to keys array
                $insert_query_keys .= '`' . $row["Field"] . '`';

                // Get field type
                // if it was a stirng, add quote in first and last of value
                
                $type = $row['Type'];
                if (strpos($type, "(") > 0)
                    $type = substr($type, 0, strpos($type, "("));
                $symbol = '';
                if ($type == "varchar"
                or $type == "datetime"
                or $type == "text"
                or $type == "longtext"
                or $type == "char" ) {
                    $symbol = '\'';
                }
                
                // dont insert comma for the last record
                if ($insert_query_values != '')
                    $insert_query_values .= ', ';
                // If value is posted and its not null
                if (! isset( $_POST[ $row["Field"] ] ) ) {
                    $insert_query_values .= "NULL" ;
                }
                else if ($_POST[ $row["Field"] ] == ''
                    and ( $type == "int" or $type == "bit" or $type == "decimal" )
                ) {
                    $insert_query_values .= "NULL" ;
                }
                else {
                    // append value to values array
                    $insert_query_values .= $symbol . $_POST[ $row["Field"] ]  . $symbol;
                }
            }
        }

        // assemble final query
        $insert_query  = "INSERT INTO " . $table_name . " (" 
        . $insert_query_keys
        . ") VALUES ("
        . $insert_query_values
        . ")" ;
        
        // run the query !
        mysqli_query($conn, $insert_query);

    }
    else if (isset($_POST['delete']))
    {
        // assemble final query
        $delete_query  = 'DELETE FROM ' . $table_name . ' WHERE ' . $table_id . ' = '. $_POST[ $table_id ] ;

        // run the query !
        mysqli_query($conn, $delete_query);
    }

    // Select data to table
    echo $Data['Table'];

    // Modal Trigger
    // href="admin.php?id=crud&new"
    echo '<button class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
        New *
    </button>
    ' ;

    // Generate form
    echo $Data['Form'];

?>