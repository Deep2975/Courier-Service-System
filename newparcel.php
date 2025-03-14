<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newparel</title>
    <?php
    require_once "files.php";
    ?>
    <style>
        .control-label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">New Parcel</h1>
                </div>

            </div>
            <hr class="border-primary">
        </div>
    </div>

    

    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-outline">
                    <div class="card-body">
                        <form action="newparceldata.php" method="post" id="manage-branch" class="was-validated">
                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="font-weight-bold mb-2">
                                        Sender Information
                                    </div>
                                    <hr class="alert-dark">        
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Full Name [First-Last]</label>
                                            <input type="text" class="form-control" name="sfullname" required>
                                        </div>

                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">E-mail</label>
                                            <input type="email" class="form-control" required name="semail">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Address</label>
                                            <input type="text" class="form-control" name="saddress" required>
                                        </div>
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Contact Number</label>
                                            <input type="number" class="form-control" name="snumber" required max="9999999999" min="1000000000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row mt-2">
                                <div class="col-sm-12">
                                    <div class="font-weight-bold mb-2">
                                        Receiver Information
                                    </div>
                                    <hr class="alert-dark">
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Full Name [First-Last]</label>
                                            <input type="text" class="form-control" name="rfullname" required>
                                        </div>

                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">E-mail</label>
                                            <input type="email" class="form-control" required name="remail">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Address</label>
                                            <input type="text" class="form-control" name="raddress" required>
                                        </div>
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Contact Number</label>
                                            <input type="number" class="form-control" name="rnumber" required max="9999999999" min="1000000000">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row mt-2">
                                <div class="col-sm-12">
                                    <div class="font-weight-bold mb-2">
                                        Parcel Information
                                    </div>
                                    <hr class="alert-dark">
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-4 form-group ">
                                            <label for="" class="control-label">Parcel weight</label>
                                            <input type="number" class="form-control" name="weight" required>
                                        </div>

                                        <div class="col-sm-4 form-group ">
                                            <label for="" class="control-label">Parcel height</label>
                                            <input type="number" class="form-control" required name="height">
                                        </div>
                                        
                                        <div class="col-sm-4 form-group ">
                                            <label for="" class="control-label">Parcel width</label>
                                            <input type="number" class="form-control" required name="width">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Parcel length</label>
                                            <input type="number" class="form-control" name="length" required>
                                        </div>
                                        <div class="col-sm-6 form-group ">
                                            <label for="" class="control-label">Parcel price</label>
                                            <input type="number" class="form-control" name="price" required max="100000" min="100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="" class="control-label">Option</label>
                                    <div class="form-check">
                                        <input class="form-check-input  " type="radio" name="rdp" id="rddel" value="1" checked>
                                        <label class="form-check-label text-dark" for="rddel">Deliver</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rdp" id="rdpic" value="2" >
                                        <label class="form-check-label text-dark" for="rdpic">Pickup</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select name="delivery" id="del" class="form-control">
                                        <!-- <option></option> -->
                                            <?php
                                                // $connection = mysqli_connect("localhost", "root", "", "project_cms") or die("connection fail");
                                                include "dbcon.php";
                                                $query = "select * from branch";
                                                $record=mysqli_query($connection, $query) or die("query fail");
                                                $num_result = mysqli_num_rows($record);
                                                for($i=0;$i<$num_result;$i++)
                                                {
                                                    $row = mysqli_fetch_array($record);
                                                    echo '<option value=' . $row["id"].'>'.$row["street"].' | '.$row["city"].'</option>';
                                                }
                                                mysqli_close($connection);
                                            ?>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select name="pickup" id="pic" class="form-control  border border-success">
                                        <!-- <option></option> -->
                                            <?php
                                                // $connection = mysqli_connect("localhost", "root", "", "project_cms") or die("connection fail");
                                                include "dbcon.php";
                                                $query = "select * from branch";
                                                $record=mysqli_query($connection, $query) or die("query fail");
                                                $num_result = mysqli_num_rows($record);
                                                for($i=0;$i<$num_result;$i++)
                                                {
                                                    $row = mysqli_fetch_array($record);
                                                    echo '<option value=' . $row["id"].'>'.$row["street"].' | '.$row["city"].'</option>';
                                                }
                                                mysqli_close($connection);
                                            ?>
                                    </select>
                                </div>
                            </div>

                             <script>
                                $(document).ready(function(){
                                    $('#pic').hide();
                                    $('input[name="rdp"]').on('change', function() {
                                        var selectedValue = $('input[name="rdp"]:checked').val();
                                        // show or hide the appropriate select element
                                        if (selectedValue === '1') {
                                            $('#del').show();
                                            $('#pic').hide();
                                        } else if (selectedValue === '2') {
                                            $('#del').show();
                                            $('#pic').show();
                                        }
                                    });
                                });
                            </script>

                            <!-- <script>
                                function toggleSelectBoxes() {
                                    const selectedValue = document.querySelector('input[name="rdop"]:checked').name;

                                    if (selectedValue === "delivery") {
                                        selectBoxes.querySelector('select[name="delivery"]').style.display = 'block';
                                        selectBoxes.querySelector('select[name="pickup"]').style.display = 'none';
                                    }else if(selectedValue === "pickup") {
                                        selectBoxes.querySelector('select[name="delivery"]').style.display = 'block';
                                        selectBoxes.querySelector('select[name="pickup"]').style.display = 'block';
                                    }
                                }
                            </script> -->
        
                <div class="card-footer border-top border-info">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <input type="submit" name="submit" class="btn btn-success mx-2">
                        <a class="btn btn-secondary mx-2" href="">Cancel</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>