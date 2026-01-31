<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php
if(isset($_FILES['file']) && $_FILES['file']['error']==0){
    if(!is_dir("upload")) mkdir("upload",0777,true);
    $dest = "upload/".$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$dest)){
        echo "Uploaded: ".$_FILES['file']['name']." (".$_FILES['file']['size']." bytes)";
    } else { echo "Upload failed"; }
} else { echo "No file uploaded"; }
?>
