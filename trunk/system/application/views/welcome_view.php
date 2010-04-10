<html>
<body>
<?
foreach ($query->    result() as $row)
{
        echo "<h1>    ".$row->    title."</h1>    ";
        echo "<p>    ".$row->    body."</p>    ";
        echo anchor('welcome/comments/'.$row->    id,'comments');
}

echo $this->calendar->generate(2006, 6);
?>
</body>    