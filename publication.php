<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adbuCSE</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png" sizes="16x16" style="object-fit: cover;">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- DataTable Links -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./publication/publication.css">


</head>

<body>
    <section id="section-pub-one">
        <script src="./navbar.js"></script>
    </section>

    <section id="section-pub-two">
        <div class="container">
            <h1 class="heading-pub">
                <img src="publication/graduate-cap-svgrelo-com.svg" alt="" />
                <font>PUBLICATIONS</font>
            </h1>
        </div>
    </section>

    <section id="section-pub-three">
        <div class="container">
            <div class="year-selector">
                <button id="year-prev" style="padding: 15px 30px;min-width: 150px;margin-right: 20px;">
                    << PREV</button>
                        <div class="year-list">
                            <div id="slider">
                                <!-- <button class="year-button" data-year="2014">2014</button>
                        <button class="year-button" data-year="2015">2015</button>
                        <button class="year-button" data-year="2016">2016</button> -->
                                <button class="year-button" data-year="2017">2017</button>
                                <button class="year-button" data-year="2018">2018</button>
                                <button class="year-button" data-year="2019">2019</button>
                                <button class="year-button" data-year="2020">2020</button>
                                <button class="year-button" data-year="2021">2021</button>
                                <button class="year-button active" data-year="2022">2022</button>
                            </div>
                        </div>
                        <button id="year-next" style="padding: 15px 30px;min-width: 150px;margin-left: 20px;">NEXT>></button>
            </div>
            <div class="table-holder">
                <div class="year-holder">
                    <div class="year" id="year-2017">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>1</h1>
                        <h1>7</h1>
                    </div>
                    <div class="year" id="year-2018">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>1</h1>
                        <h1>8</h1>
                    </div>
                    <div class="year" id="year-2019">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>1</h1>
                        <h1>9</h1>
                    </div>
                    <div class="year" id="year-2020">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>2</h1>
                        <h1>0</h1>
                    </div>
                    <div class="year" id="year-2021">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>2</h1>
                        <h1>1</h1>
                    </div>
                    <div class="year" id="year-2022" style="display: block;">
                        <h1>2</h1>
                        <h1>0</h1>
                        <h1>2</h1>
                        <h1>2</h1>
                    </div>
                </div>
                <div id="table-container">
                    <table id="table-2017" class="data-table">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2017";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++;
                            }
                        }
                        ?>
                    </table>

                    <table id="table-2018" class="data-table">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2018";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1; // Initialize a counter for serial numbers
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++; // Increment the counter for the next row
                            }
                        }
                        ?>
                    </table>
                    <table id="table-2019" class="data-table">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2019";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1; // Initialize a counter for serial numbers
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++; // Increment the counter for the next row
                            }
                        }
                        ?>
                    </table>
                    <table id="table-2020" class="data-table">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2020";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1; // Initialize a counter for serial numbers
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++; // Increment the counter for the next row
                            }
                        }
                        ?>
                    </table>
                    <table id="table-2021" class="data-table">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2021";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1; // Initialize a counter for serial numbers
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++; // Increment the counter for the next row
                            }
                        }
                        ?>
                    </table>
                    <table id="table-2022" class="data-table" style="display: block;">
                        <tr>
                            <th>SL.NO</th>
                            <th>TITLE OF PAPER</th>
                            <th>NAME OF AUTHOR</th>
                            <th>NAME OF JOURNAL</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `publication` WHERE `year_of_publication` = 2022";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $paperTitle = $row['title_of_paper'];
                                $authorsName = $row['authors_name'];
                                $journalName = $row['journal_name'];
                                echo '
                                <tr>
                                    <td >' . $counter . '</td>
                                    <td>' . $paperTitle . '</td>
                                    <td>' . $authorsName . '</td>
                                    <td>' . $journalName . '</td>
                                </tr>';
                                $counter++; // Increment the counter for the next row
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="section-pub-four">
        <div class="container">
            <h1 class="heading-pub" style="margin-bottom:10px">
                <img src="publication/search-svgrepo-com.svg" alt="" />
                <font>RESEARCH GRANTS
                </font>
            </h1>
            <table id="myTable" class="table research-table">
                <thead class=" table-head">
                    <tr>
                        <th scope="col">Year of Grant</th>
                        <th scope="col">PI & CO-PI</th>
                        <th scope="col">Granting Agency</th>
                        <th scope="col">Ongoing/Completed</th>
                        <th scope="col">Title of Project</th>
                        <th scope="col">Amount of Grant</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = "SELECT * FROM `researchgrants`";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $yearOfGrant = $row['year_of_grant'];
                            $pi_and_copi = $row['PI&CO-PI'];
                            $grantingAgency = $row['granting_agency'];
                            $projectTitle = $row['title_of_project'];
                            $amountGrant = $row['amount_of_grant'];
                            $projectStatus = $row['project_status'];

                            echo '<tr>
                            <td>' . $yearOfGrant . '</td>
                            <td>' . $pi_and_copi . '</td>
                            <td>' . $grantingAgency . '</td>
                            <td>' . $projectStatus . '</td>
                            <td>' . $projectTitle . '</td>
                            <td>' . $amountGrant . '</td>
                        </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section id="section-pub-five">
        <div class="container">
            <h1 class="heading-pub">
                <img src="publication/trophy-svgrepo-com.svg" alt="" />
                <font>RESEARCH AWARDS
                </font>
            </h1>
            <div style="margin-top: 30px; height: 400px; width: 100%;background-color: lightslategrey;">

            </div>
        </div>
    </section>

    <section id="section-footer">
        <script src="./footer.js"></script>
    </section>
    <script src="./publication/publication.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>