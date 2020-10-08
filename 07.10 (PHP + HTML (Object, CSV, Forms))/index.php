<?php

require_once 'Person.php';
require_once 'PersonStorage.php';

$personStorage = new PersonStorage();

$name = $_POST['name'] ?? 'Igors';

$person = $personStorage->getByName($name);

echo $person->getName() . ' / ' . $person->getAge() . ' / ' . $person->getCount();

?>

<html lang="en">

<body>
<form action="/" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</form>
</body>

</html>
