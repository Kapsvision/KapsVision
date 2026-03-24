<?php include 'db.php'; ?>
<?php include 'auth.php'; ?>

<h2>Dashboard</h2>
<a href="add_property.php">Add Property</a>
<a href="logout.php">Logout</a>

<table border="1">
<tr>
    <th>Title</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM properties");
while($row = $res->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['title']; ?></td>
    <td>₹<?php echo $row['price']; ?></td>
    <td>
        <a href="edit_property.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>