<html>

<head>
    <title>Hide Form</title>
    <script type="text/javascript">
        function showForm() {
            var form = document.getElementById("hiddenform");
            form.style.display = 'block'
        }
    </script>
    <style>
        #hiddenform {
            display: none;
        }
    </style>
</head>

<body>
    Bla bla this text is visible and all my content is here.

    <form>
        <input type="radio" onclick="showForm();"><br />
        <input type="radio" name="show" value="Off">Off
    </form>

    <div id="hiddenform">
        <?php include("header.php"); ?>
    </div>


</body>

</html>