<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user </title>
</head>

<body>

    <?php
    class User
    {
        private $login;
        private $password;

        public function __construct($login, $password)
        {
            $this->login = $login;
            $this->password = $password;
        }

        public function __get($name)
        {
            if (!isset($this->$name))
                return "erreur";
            else
                return $this->$name;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;
        }

        public function __isset($name)
        {
            return isset($this->$name);
        }

        public function __toString()
        {
            $c = "Connexion réussie avec le login :{$this->login}";
            return $c;
        }

        public function connect()
        {
            if ($this->login == "admin" && $this->password == "admin")
                return true;
            else
                return false;
        }
    }
    ?>
</body>

</html>