<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="iCloth navigation bar">

<div class="container">
<a class="navbar-brand" href="sellerHomepage.php">iCloth</a>

<div class="collapse navbar-collapse">
    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li>
        <a class="nav-link" href="sellerHomepage.php">Item Listings</a>
            <a class="nav-link" href="addItem.php">Add Items</a>
            <a class="nav-link" href="sellerAccountSetting.php">Account Setting</a>
            <a class="nav-link" href="sellerRequestCategory.php">Category Requests</a>
            <a class="nav-link" href="view_revenue_report.php">Revenue Report</a>
            <a class="nav-link" href="view_inventory.php">Manage Inventory</a>
            
        </li>
    </ul>
    <div class="search">
        <form action="searchItem.php" method="GET" class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search"
                value="<?php if (isset($_GET['search'])) {
                    echo $_GET['search'];
                } ?>">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit"
                    style="background-color: #10a4e3; border-color:#10a4e3 ">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
        <li><span class="nav-link">Welcome,
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
            </span></li>
            <li><a class="nav-link" href="logout.php"><img src="../images/user.svg"><span> log out</span></a></li>
    </ul>
</div>
</div>
</nav>
<!-- End Header/Navigation -->