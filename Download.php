<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $downloadFile = 'uploads/' . $file;
    
    if (file_exists($downloadFile)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($downloadFile));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($downloadFile));
        ob_clean();
        flush();
        readfile($downloadFile);
        exit;
    } else {
        echo '파일을 찾을 수 없습니다.';
    }
}
?>
