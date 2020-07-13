<?php
echo <<<_END
<form action="checkbox-form.php" method="post">
    Do you need wheelchair access?
    <input type="checkbox" name="formWheelchair" value="Yes" />
    <input type="submit" name="formSubmit" value="Submit" />
</form>
_END;
if(isset($_POST['formWheelchair']) &&
    $_POST['formWheelchair'] == 'Yes')
{
    echo "Need wheelchair access.";
}
else
{
    echo "Do not Need wheelchair access.";
}
?>