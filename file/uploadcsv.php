<?php
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['csvfile']) && $_FILES['csvfile']['error'] === UPLOAD_ERR_OK) {
        $fileTemp = $_FILES['csvfile']['tmp_name'];

        if (($file = fopen($fileTemp, 'r')) !== false) {
            // Skip header row (first line of CSV)
            $header = fgetcsv($file);

            $sql = '';
            while (($data = fgetcsv($file)) !== false) {
                if (count($data) >= 3) {
                    $name    = mysqli_real_escape_string($conn, $data[0]);
                    $address = mysqli_real_escape_string($conn, $data[1]);
                    $roll    = mysqli_real_escape_string($conn, $data[2]);

                    $sql .= "INSERT INTO student (NAME, ADDRESS, ROLL) 
                             VALUES ('$name', '$address', '$roll');";
                }
            }
            fclose($file);

            if (!empty($sql)) {
                if (mysqli_multi_query($conn, $sql)) {
                    echo "Data uploaded successfully! <a href='list.php'>Go back</a>";
                } else {
                    echo " Database error: " . mysqli_error($conn);
                }
            } else {
                echo "CSV file was empty or had invalid rows.";
            }
        } else {
            echo " Unable to open uploaded file.";
        }
    } else {
        echo " No file uploaded or upload error.";
    }
}
?>
