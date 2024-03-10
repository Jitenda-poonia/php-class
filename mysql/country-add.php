<?php
require_once("config.php");

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
    <form action="country-save.php" method="post">
        <?php require_once("form_msg.php"); ?>

        <table>
            <tr>
                <td>Country Name</td>
                <td>
                    <input type="text" name="name" placeholder="Counrtry Name" value="<?= $_SESSION["name"] ?? '' ?>">
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
                        <option value="1" <?= (($_SESSION["status"] ?? "") == 1) ? "selected" : "" ?>>Enable</option>
                        <option value="2" <?= (($_SESSION["status"] ?? "") == 2) ? "selected" : "" ?>>Desable</option>
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
                <td>State:</td>
                <td>
                    <table class="table-data">
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <td><button type="button" class="add">+</button></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="name_state[]"></td>
                            <td>
                                <select name="name_status[]">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                </select>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <tr>
                <td></td>
                <td>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Save" name="save">
                    <input type="submit" value="Save & new" name="save_new">
                </td>
            </tr>

        </table>

    </form>



    <script>
        $(document).ready(function () {
            $(".add").click(function () {
                table = ` <tr>
                <td><input type="text" name="name_state[]"></td>
                <td>
                    <select name="name_status[]">
                        <option value="" selected disabled>Select Status</option>
                        <option value="1">Enable</option>
                        <option value="2">Disable</option>
                    </select>
                    <td><button type="button" class="remove">X</button></td>
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
    <?php
    unset($_SESSION["name"]);
    unset($_SESSION["status"]);
    ?>

</body>

</html>