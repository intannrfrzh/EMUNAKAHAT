<?php

include '../../Config/connect.php';

$sql = "SELECT * FROM incentive_list";
$result  = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../css/userView.css">
</head>

<body style="background-color: white;">
    <!-- Start your project here-->

    <!-- heading -->

    <?php

    include_once('../../View/Common/heading.html');
    ?>

    <!-- sidebar -->

    <?php
    include_once('../../View/Common/sidebarstaff.php');
    ?>

    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;text-align:center;" class="container-content w-75 p-3 ">
        <style>
            .table td {
                width: 25%;
            }
        </style>

        <!-- this is table for the staff to check the documents to be approved or not -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Documents Name</th>
                    <th scope="col">File</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Grooms IC</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/grooms ic .png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr> bride
                    <th scope="row">2</th>
                    <td>Bride IC</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/brider ic.png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Marriage Card</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/marriage card.png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>MAccount Bank Statements</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/marriage card.png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>3 months of grooms pay slip</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/3 month pay slip.png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Confirmation Residency letter</td>
                    <td><img class="zoomable-image" style="height: 40px; width:60px" src="../../Asset/confirmation residency.png" alt=""></td>
                    <td>
                        <div style="width: 200px;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>


    <script>
        // Apply zoom effect to all elements with the "zoomable-image" class
        var zoomableImages = document.getElementsByClassName("zoomable-image");

        for (var i = 0; i < zoomableImages.length; i++) {
            zoomableImages[i].addEventListener("click", function() {
                zoomooz.zoomTo(this);
            });
        }

        // Get all elements with the "zoomable-image" class
        var zoomableImages = document.getElementsByClassName("zoomable-image");

        // Add click event listener to each image
        for (var i = 0; i < zoomableImages.length; i++) {
            zoomableImages[i].addEventListener("click", function() {
                this.classList.toggle("zoomed");
            });
        }
    </script>

    <style>
        .zoomable-container {
            position: relative;
            overflow: hidden;
        }

        .zoomable-image {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .zoomable-image.zoomed {
            transform: scale(10);
            /* Adjust the scale factor to control the level of zoom */
        }
    </style>

    <!-- End your project here-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/zoomooz/1.4.1/zoomooz.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/zoomooz/1.4.1/zoomooz.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>