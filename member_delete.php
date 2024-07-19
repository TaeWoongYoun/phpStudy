<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user'); ?>

<?php

if (isset($_POST['emp_id'])) {
    $emp_id = mysqli_real_escape_string($conn, $_POST['emp_id']);
    $stmt = $conn->prepare("SELECT id FROM user WHERE emp_id = ?");
    $stmt->bind_param("i", $emp_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $user_id = $row['id'];
        if ($user_id === 'admin') {
            echo "<script>
                    alert('관리자 계정 삭제 실패!');
                    location.href = 'index.php?id=admin';
                </script>";
        } elseif ($user_id === 'manager') {
            echo "<script>
                    alert('담당자 계정 삭제 불가능!');
                    location.href = 'index.php?id=admin';
                </script>";
        } else {
            $sql = "DELETE FROM user WHERE emp_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $emp_id);
            if ($stmt->execute()) {
                echo "<script>
                        alert('계정 삭제 성공');
                        location.href = 'index.php?id=admin';
                    </script>";
            }
        }
    }
    $stmt->close();
}
?>
