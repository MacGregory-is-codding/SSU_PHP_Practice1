<?php

class User {
    private string $name;
    private string $surname;
    private string $password;
    private string $phone;
    private string $email;

    public function __construct(
        string $name,
        string $surname,
        string $password,
        string $phone,
        string $email
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function __toString() {
        return $this->name . ' ' . $this->surname . PHP_EOL . $this->email .  ' ' . $this->password . PHP_EOL . $this->phone;  
    }
}

$user = new User(
    $_POST['name'],
    $_POST['surname'],
    $_POST['pass'],
    $_POST['phone'],
    $_POST['email'],
);

$fp = fopen('log.txt', 'a');
$curdate = date(DATE_RFC822);
fwrite($fp, "~~~~~~~~~~~~~~~ $curdate ~~~~~~~~~~~~~~~" . PHP_EOL);
fwrite($fp, $user);
fwrite($fp, PHP_EOL . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL);
fclose($fp);

echo '<h2>Registered &#128524;</h2>'

?>