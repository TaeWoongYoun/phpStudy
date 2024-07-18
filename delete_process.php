<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM book WHERE id = $id";
    mysqli_query($conn, $sql);
?>

<script>
    alert('도서 삭제 완료')
    location.href = 'index.php?id=admin'
</script>