<?php
$conn = mysqli_connect("localhost","root","","imageupload");
if (!$conn) {
echo "connection refuse";
}
else {
    echo "connection established";

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$image= $_FILES['image'];
$imagename = $image['name'];
$tempimagename = $image['tmp_name'];

$query = "UPDATE user SET `Email`='$email',`Password`='$password',`imagename`='$name' WHERE `id`=$id";
$q = mysqli_query($conn,$query);

if (!$conn) {
    echo "query refuse";
} else {
    echo "query sucess";
}
}
?>
<script>
    window.location.assign("show.php");
</script>