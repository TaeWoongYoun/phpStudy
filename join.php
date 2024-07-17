<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>

<?php
    $userid = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO user (id, name, pw) VALUES ('$userid', '$name', '$password')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('회원가입 완료')
    location.href = 'index.php'
</script>