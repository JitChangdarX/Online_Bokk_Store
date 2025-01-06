<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Alternate Field Example</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="about.css">
    <script>
        $(function() {
            $("#datepicker").datepicker({
                altField: "#alternate",
                altFormat: "DD, d MM, yy"
            });
        });
    </script>

</head>

<body>
    <div class="datepickers">
        <div class="childern_datepicker">
            <label for="datepicker">Select a Date:</label>
            <input type="text" id="datepicker">
            <br>
            <label for="alternate">Formatted Date:</label>
            <input type="text" id="alternate" size="30">
        </div>

    </div>
</body>

</html>