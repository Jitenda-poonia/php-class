<?php
require_once("config.php");
$id = $_GET["id"] ?? 0;

$sel_co_Query = "SELECT * FROM countries where id=$id";
$countryQuery = $con->query($sel_co_Query);

$_country = mysqli_fetch_assoc($countryQuery);

$selQuery = "SELECT * FROM states where country_id=$id";
$stateQuery = $con->query($selQuery);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Add</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <form action="country-update.php" method="post">
        <input type="hidden" name="id" value="<?= $_country["id"] ?>">
        <table>
            <tr>
                <td>Country Name</td>
                <td>
                    <input type="text" name="name" placeholder="Counrtry Name" value="<?= $_country["name"] ?? '' ?>">
                    <?php if (isset($_SESSION["name_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["name_error"];
                            unset($_SESSION["name_error"]);
                            ?>
                        </span>

                    <?php } ?>

                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="" selected disabled>Select</option>
                        <option value="1" <?= (($_country["status"] ?? "") == 1) ? "selected" : "" ?>>Enable</option>
                        <option value="2" <?= (($_country["status"] ?? "") == 2) ? "selected" : "" ?>>Desable</option>
                    </select>
                    <?php if (isset($_SESSION["status_error"])) { ?>
                        <span class="error">
                            <?php
                            echo $_SESSION["status_error"];
                            unset($_SESSION["status_error"]);
                            ?>
                        </span>

                    <?php } ?>
                </td>
            </tr>

            <tr>
                <td>States</td>
                <td>
                    <table class="table-data">

                        <tr>

                            <th>Name</th>
                            <th>Status</th>
                            <td><button type="button" class="add">+</button></td>
                        </tr>



                        <?php while ($_state = mysqli_fetch_assoc($stateQuery)) { ?>



                            <tr>
                                <td>
                                    <input type="hidden" name="state_id[]" value="<?= $_state["id"] ?>">
                                    <input type="text" name="name_state[]" value="<?= $_state["name"] ?>">

                                </td>

                                <td>
                                    <select name="name_status[]">
                                        <option value="" selected disabled>Select Status</option>
                                        <option value="1" <?= ($_state["status"] == 1) ? "selected" : "" ?>>Enable</option>
                                        <option value="2" <?= ($_state["status"] == 2) ? "selected" : "" ?>>Disable</option>
                                    </select>
                                </td>
                                <td><button type="button" class="remove">-</button></td>
                            </tr>

                        <?php } ?>




                    </table>
                </td>
            </tr>



            <tr>
                <td></td>
                <td>
                    <input type="reset" value="Reset">
                    <input type="submit" value="update" name="update">

                </td>
            </tr>

        </table>

    </form>


    <script>
        $(document).ready(function () {
            $(".add").click(function () {
                table = ` <tr> 
                    <td>
                <input type="text" name="name_state[]">
                </td>
                <td>
                    <select name="name_status[]">
                        <option value="" selected disabled>Select Status</option>
                        <option value="1" >Enable</option>
                        <option value="2">Disable</option>
                    </select>
                   <td> <button type="button" class="remove">-</button></td>
                </td>
                </tr>`;
                $(".table-data").append(table);
            });
            $(".table-data").delegate(".remove", "click", function () {
                isConfirm = confirm("Are you sure you want to delete this row?");
                if (isConfirm) {
                    $(this).closest("tr").remove();

                }
            })
        });
    </script>


</body>

</html>