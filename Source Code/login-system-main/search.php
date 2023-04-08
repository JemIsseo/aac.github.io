<?php
include 'connect.php';

if (isset($_POST['query'])) {
    $query = $_POST['query'];

    $sql = "SELECT * FROM tbluseraccount WHERE username LIKE '%" . $query . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Usertype</th>
                    <th>Email Address</th>
                    <th>Image</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $un = $row['username'];
                    $pw = $row['password'];
                    $ut = $row['usertype'];
                    $ea = $row['email'];
                    $img = $row['image'];
                    ?>
                    <tr>
                        <td><?php echo $un; ?></td>
                        <td><?php echo $pw; ?></td>
                        <td><?php echo $ut; ?></td>
                        <td><?php echo $ea; ?></td>
                        <td>
                            <div class="profile-photo">
                                <img src="uploads/<?php echo $img; ?>">
                            </div>
                        </td>
                        <?php echo '
                                <td>
                                    <button class="modal-open showUpdateAccount" data-modal="modal1" value="' . $un . '" ><span class="material-symbols-sharp edit" title="Edit this account">edit</span></button>
                                    <button class="modal-open showArchiveAccount" data-modal="modal2" value="' . $un . '"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                </td>';   ?>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

    <?php

    } else {
        echo "<h2 style='text-align: center'>No results found</h2>";
    }
}


if (isset($_POST['querystock'])) {
    $querystock = $_POST['querystock'];

    $sql = "SELECT * FROM tblstock WHERE prodname LIKE '%" . $querystock . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>ProductID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $pid = $row['proid'];
                    $pname = $row['prodname'];
                    $cat = $row['category'];
                    $desc = $row['description'];
                    $prc = $row['price'];
                    $qty = $row['quantity'];
                    ?>
                    <tr>
                        <td><?php echo $pid; ?></td>
                        <td><?php echo $pname; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td><?php echo $desc; ?></td>
                        <td><?php echo $prc; ?></td>
                        <td><?php echo $qty; ?></td>
                        <?php echo '
                                <td>
                                <button class="modal-open showUpdateProduct" data-modal="modal1" value="' . $pid . '" ><span class="material-symbols-sharp edit" title="Edit this product">edit</span></button>
                                <button class="modal-open showArchiveProduct" data-modal="modal2" value="' . $pid . '"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                </td>';  ?>
                    </tr>

                </tbody>
            <?php
            }
            ?>
        </table>

    <?php

    } else {
        echo "<h2 style='text-align: center'>No results found</h2>";
    }
}

if (isset($_POST['querypetprofile'])) {
    $querypetprofile = $_POST['querypetprofile'];

    $sql = "SELECT * FROM tblpet WHERE petname LIKE '%" . $querypetprofile . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>Owner's Name</th>
                    <th>Pet Name</th>
                    <th>Pet Type</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Breed</th>
                    <th>Weight</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $pid = $row['petid'];
                    $op = $row['ownersname'];
                    $pname = $row['petname'];
                    $pt = $row['pettype'];
                    $age = $row['age'];
                    $sex = $row['sex'];
                    $breed = $row['breed'];
                    $weight = $row['weight'];
                    ?>
                    <tr>
                        <td><?php echo $op; ?></td>
                        <td><?php echo $pname; ?></td>
                        <td><?php echo $pt; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $sex; ?></td>
                        <td><?php echo $breed; ?></td>
                        <td><?php echo $weight; ?></td>
                        <?php echo '
                                            <td>
                                                <button class="modal-open showUpdateAccount" data-modal="modal1" value="' . $pid . '" ><span class="material-symbols-sharp edit" title="Edit this account">edit</span></button>
                                                <button class="modal-open showArchiveAccount" data-modal="modal2" value="' . $pid . '"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                            </td>';   ?>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

    <?php

    } else {
        echo "<h2 style='text-align: center'>No results found</h2>";
    }
}

if (isset($_POST['queryownersname'])) {
    $queryownersname = $_POST['queryownersname'];

    $sql = "SELECT * FROM tblownersprofile WHERE ownersname LIKE '%" . $queryownersname . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>Owner's Name</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                    <th>Email Address</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $op = $row['ownersname'];
                    $cno = $row['contactno'];
                    $add = $row['address'];
                    $ea = $row['emailaddress'];
                    ?>
                    <tr>
                        <td><?php echo $op; ?></td>
                        <td><?php echo $cno; ?></td>
                        <td><?php echo $add; ?></td>
                        <td><?php echo $ea; ?></td>
                        <?php echo '
                                                <td>
                                                    <button class="modal-open showUpdateAccount" data-modal="modal1" value="' . $op . '" ><span class="material-symbols-sharp edit" title="Edit this account">edit</span></button>
                                                    <button class="modal-open showArchiveAccount" data-modal="modal2" value="' . $op . '"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                                </td>';   ?>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

<?php

    } else {
        echo "<h2 style='text-align: center'>No results found</h2>";
    }
}





// close the database connection
mysqli_close($conn);

include 'scriptingfiles.php';
?>
<script>
    // opening modals
    var modalBtns = document.querySelectorAll(".modal-open");

    modalBtns.forEach(function(btn) {
        btn.onclick = function() {
            var modal = btn.getAttribute("data-modal");

            document.getElementById(modal).style.display = "block";
        };
    });

    // close modals
    var closeBtns = document.querySelectorAll(".modal-close");

    closeBtns.forEach(function(btn) {
        btn.onclick = function() {
            var modal = (btn.closest(".modal").style.display = "none");
        };
    });

    // USERACCOUNT AJAX DOCUMENTS
    $(document).ready(function() {

        $(".showUpdateAccount").click(function() {
            var accountid = this.value;
            $("#updateAccount").load("submit.php", {
                accountID: accountid
            })
        })
        $(".showArchiveAccount").click(function() {
            var archiveid = this.value;
            $("#archiveAccount").load("submit.php", {
                archiveID: archiveid
            })
        })
        $(".showRestoreAccount").click(function() {
            var restoreid = this.value;
            $("#restoreAccount").load("submit.php", {
                restoreID: restoreid
            })
        })
    })

    // STOCKS AND ADD STOCK AJAX DOCUMENTS
    $(document).ready(function() {

        $(".showUpdateProduct").click(function() {
            var productid = this.value;
            $("#updateProduct").load("submit.php", {
                productID: productid
            })
        })
        $(".showArchiveProduct").click(function() {
            var proarchiveid = this.value;
            $("#archiveProduct").load("submit.php", {
                proarchiveID: proarchiveid
            })
        })
        $(".showRestoreProduct").click(function() {
            var prorestoreid = this.value;
            $("#restoreProduct").load("submit.php", {
                prorestoreID: prorestoreid
            })
        })
    })

    // OWNERSNAME AJAX DOCUMENTS




    // PET PROFILE AJAX DOCUMENTS
</script>