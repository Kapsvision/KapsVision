<?php include 'db.php'; ?>

<form method="GET">
<input type="text" name="search" placeholder="Search location">
<input type="number" name="min" placeholder="Min Price">
<input type="number" name="max" placeholder="Max Price">
<button>Filter</button>
</form>

<div class="grid">
<?php
$where = "WHERE 1";

if($_GET){
    if($_GET['search'])
        $where .= " AND location LIKE '%".$_GET['search']."%'";

    if($_GET['min'])
        $where .= " AND price >= ".$_GET['min'];

    if($_GET['max'])
        $where .= " AND price <= ".$_GET['max'];
}

$res = $conn->query("SELECT * FROM properties $where");

while($row = $res->fetch_assoc()){
?>
<div class="card">
<img src="uploads/<?php echo $row['image']; ?>">
<h3><?php echo $row['title']; ?></h3>
<p>₹<?php echo $row['price']; ?></p>

<a href="https://wa.me/91XXXXXXXXXX?text=I am interested in <?php echo $row['title']; ?>">
Contact on WhatsApp
</a>

</div>
<?php } ?>
</div>