<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["videoFile"]["name"]);

if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $target_file)) {
    echo "The video ". htmlspecialchars( basename($_FILES["videoFile"]["name"])). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>

<?php
$targetDir = "uploads/";
$caption = $_POST['caption'];
$videoName = basename($_FILES["videoFile"]["name"]);
$targetFile = $targetDir . $videoName;

if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFile)) {
    // Save video info (filename + caption) in a text file (simple demo)
    $data = $videoName . "|" . $caption . "\n";
    file_put_contents("video_data.txt", $data, FILE_APPEND);
    echo "Upload successful!";
} else {
    echo "Error uploading the file.";
}
?>
