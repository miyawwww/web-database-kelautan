<?php
include "connect-search.php";
if($_POST["search"]=="") {
echo "<h2>No Results Found</h2>";
echo "<h2><a href='index-search.php'>Exit</a></h2>";

}else{
$search=trim($_POST["search"]);

$query=$db->prepare("SELECT * FROM search WHERE title like '%$search%' OR description like
    '%$search%'");
$query->execute(array());
$control=$query->fetchAll(PDO::FETCH_OBJ);
$count=$query->rowCount();
if($count>0) { ?>
    <table style="font-size:32px;">
        <tr style="color:red;">
            <td>Title</td>
            <td>Description</td>
        </tr>
        <?php
foreach ($control as $list) {?>
    <tr>
        <td><?php echo $list->title;?></td>
        <td><?php echo $list->description;?></td>
    </tr>
<?php } ?>
    </table>
<a href="index-search.php">Exit</a>

<?php }else{
    echo "<h2>No Results Found</h2>";
    echo "<h2><a href='index-search.php'>Exit</a></h2>";
}

}