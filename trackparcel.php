<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Parcel</title>
    <?php
        require_once "files.php";
    ?>
</head>
<body>
        <?php
            include "header.php";
        ?>
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Track Parcel</h1>
            </div>
        </div>
        <hr class="border-primary">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                    <div class="input-group" style="width: 300px">
                        <input type="search" class="form-control" name="ser" id="ser" placeholder="Enter Parcel Number">
                            <div class="input-group-append">
                                <span class="input-group-text fas fa-search d-flex justify-content-center btn" id="sub"></span>
                            </div>
                    </div>
            </div>
        </div>
        <div id="display">

        </div>
        <hr class="border-primary">     
    </div>
        <?php
            include "footer.php";
        ?>
        <script>
            $(document).ready(function(){

                    $("#ser").on("keyup", function() {
                        var ser = $("#ser").val();
                        $.ajax({
                            url: "trackparceldata.php",
                            type: "POST",
                            data: {
                                ser: ser
                            },
                            success: function(data) {
                                $("#display").html(data);
                            }
                        });
                    });
});
        </script>
</body>
</html>