<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $sql = "UPDATE book SET title='$title', name='$name', date='$date' WHERE id = $id";
    mysqli_query($conn, $sql);
?>

<script>
    alert('도서 수정 완료')
    location.href = 'index.php?id=admin'
</script>