<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($file['name']);
    
    // 파일을 지정된 디렉토리로 이동합니다.
    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        echo '파일이 성공적으로 업로드되었습니다.';
    } else {
        echo '파일 업로드에 실패했습니다.';
    }
}
?>
