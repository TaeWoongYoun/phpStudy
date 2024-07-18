<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>

<?php
    $sql = "INSERT INTO book (title, name, date ) VALUES ('{$_POST['title']}', '{$_POST['name']}', '{$_POST['date']}')";
    mysqli_query($conn, $sql);
?>

<script>
    alert('도서 등록 완료')
    location.href = 'index.php?id=admin'
</script>