<form action="" method="post">
    <input type="date" name="from_date"><br/>
    <input type="date" name="to_date"><br/>
    <input type="submit" name="submit" value="find list of days">
</form>

<?php
echo $From_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

while($_POST['from_date'])
{
    
    echo "<div>";
    echo $From_date= date('Y-m-d',strtotime($From_date . "+1 days"));
    echo "</div>";
    if($From_date==$to_date)
    {
        break;
    }
    
}
?>