<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>

<?php
    $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $pw = mysqli_real_escape_string($conn, $_POST['pw']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "UPDATE user SET id='$id', pw='$pw', name='$name' WHERE emp_id = $emp_id";
    mysqli_query($conn, $sql);
?>

<script>
    alert('회원정보가 수정되었습니다.')
    location.href = 'index.php?id=admin'
</script>