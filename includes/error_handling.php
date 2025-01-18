<?php


if (isset($_GET['msg'])) {
    $message = $_GET['msg'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    // Escape for HTML context to prevent XSS when echoing into JavaScript
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    $script = "<script>
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-top-right',
                    preventDuplicates: true,
                    showDuration: '300',
                    hideDuration: '1000',
                    timeOut: '5000',
                    extendedTimeOut: '1000',
                    showEasing: 'swing',
                    hideEasing: 'linear',
                    showMethod: 'fadeIn',
                    hideMethod: 'fadeOut'
                };";

    if (!isset($_GET['type'])) {
        $script .= "toastr.warning('{$message}');";
    } else {
        $type = $_GET['type'];
        $type = filter_var($type, FILTER_SANITIZE_STRING);
        // Escape for HTML context to prevent XSS when echoing into JavaScript
        $type = htmlspecialchars($type, ENT_QUOTES, 'UTF-8');

        if ($type == "success") {
            $script .= "toastr.success('{$message}');";
        } elseif ($type == "error") {
            $script .= "toastr.error('{$message}');";
        } elseif ($type == "info") {
            $script .= "toastr.info('{$message}');";
        } elseif ($type == "warning") {
            $script .= "toastr.warning('{$message}');";
        } else {
            $script .= "toastr.error('Something went wrong');";
        }
    }

    $script .= "</script>";
    echo $script;
}

?>