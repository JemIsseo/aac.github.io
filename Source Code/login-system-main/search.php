<?php
include 'connect.php';
// SEARCH TABLE FOR MODULE USERACCOUNT
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

// SEARCH TABLE FOR STOCKS MODULE STOCKANDADDSTOCK 
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

// SEARCH TABLE FOR CUSTOMERS MODULE PETPROFILE
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
// SEARCH TABLE FOR CUSTOMERS MODULE OWNERSNAME
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


// SEARCH TABLE FOR TRANSACTION MODULE SELECT PROFILE
if (isset($_POST['queryselectprofile'])) {
    $queryselectprofile = $_POST['queryselectprofile'];

    $sql = "SELECT * FROM tblownersprofile WHERE ownersname LIKE '%" . $queryselectprofile . "%'";
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
                            <button name="selectprofile" data-modal="modal2" class="modal-open showSelectProfile" value="' . $op . '"><span class="material-symbols-sharp archive">done</span></button>
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

// SEARCH TABLE FOR TRANSACTION MODULE SELECT PRODUCT
if (isset($_POST['queryselectproduct'])) {
    $queryselectproduct = $_POST['queryselectproduct'];

    $sql = "SELECT * FROM tblstock WHERE prodname LIKE '%" . $queryselectproduct . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>ProductID</th>
                    <th>Product Name</th>
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
                                <button name="selectprofile" data-modal="modal6" class="modal-open showSelectProduct" value="' . $pid . '"><span class="material-symbols-sharp archive">done</span></button>
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


// SEARCH TABLE FOR TRANSACTION MODULE TRANSACTION HISTORY
if (isset($_POST['querytransaction'])) {
    $querytransaction = $_POST['querytransaction'];

    $sql = "SELECT * FROM tbltransaction WHERE ownersname LIKE '%" . $querytransaction . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Username</th>
                    <th>Owner's Name</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $tid = $row['transactionid'];
                    $un = $row['username'];
                    $op = $row['ownersname'];
                    $tprc = $row['totalprice'];
                    $date = $row['date'];
                    ?>
                    <tr>
                        <td><?php echo $tid; ?></td>
                        <td><?php echo $un; ?></td>
                        <td><?php echo $op; ?></td>
                        <td><?php echo number_format($tprc, 2); ?></td>
                        <td><?php echo $date; ?></td>
                        <?php echo '
                        <td>
                            <button name="printreceipt" data-modal="modal9" class="modal-open showPrintReceipt" value="' . $tid . '"><span class="material-symbols-sharp print">print</span></button>
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

 
              
// SEARCH TABLE FOR TRANSACTION MODULE ADD TO CART
if (isset($_POST['queryaddtocart'])) {
    $queryaddtocart = $_POST['queryaddtocart'];

    $sql = "SELECT * FROM tblorder WHERE cart = 'Yes' AND prodname LIKE '%" . $queryaddtocart . "%'";
    $result = mysqli_query($conn, $sql);

    // display the results in tables
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="content-table table-fixed">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th> </th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <?php
                    $oid = $row['orderid'];
                    $cat = $row['category'];
                    $pname = $row['prodname'];
                    $prc = $row['price'];
                    $qty = $row['quantity'];
                    ?>
                    <tr>
                        <td><?php echo $oid; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td><?php echo $pname; ?></td>
                        <td><?php echo number_format($prc, 2); ?></td>
                        <td><?php echo $qty; ?></td>
                        <?php echo '
                        <td>
                            <button class="modal-open showRemoveCart" data-modal="modal7" value="' . $oid . '" ><span class="material-symbols-sharp remove" title="Remove this product">delete</span></button>
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



    // TRANSACTION AJAX DOCUMENTS
    $(document).ready(function() {
        // SELECT PROFILE DOCUMENT FORMS
        $(".showSelectProfile").click(function() {
            var selectprofileid = this.value;
            $("#selectProfile").load("submit.php", {
                selectprofileID: selectprofileid
            })
        })
        $(".showSelectProduct").click(function() {
            var selectproductid = this.value;
            $("#selectProduct").load("submit.php", {
                selectproductID: selectproductid
            })
        })
        $(".showRemoveCart").click(function() {
            var removecartid = this.value;
            $("#removeCart").load("submit.php", {
                removecartID: removecartid
            })
        })
    })
</script>