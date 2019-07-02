
<?php 
    function alert($message)
    {
        echo "<script> alert('$message'); </script>";
    }

    function route($link)
    {
        echo "<script> window.location.href = '$link';</script>";
    }
?>