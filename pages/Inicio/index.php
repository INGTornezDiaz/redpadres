<?php
$host = $_SERVER['HTTP_HOST'];
$url = "http://$host/redpadres/";
?>
<?php include("../../temp/header.php"); ?>
<script>
    window.onload = function() {
        window.location.href = "<?php echo $url; ?>";
    }
</script>
<?php include("../../temp/footer.php"); ?>
