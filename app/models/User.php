<?php
class User {
    private $db;
    private $nick;
    private $email;
    private $password;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $tipo_via;
    private $nombre_via;
    private $numero;
    private $telefono;

    public function __construct() {
        $this->db = new Database();
    }

    public function getNick() {
        return $this->nick;
    }
    public function setNick($nick) {
        $this->nick = $nick;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getApellido1() {
        return $this->apellido1;
    }
    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }
    public function getApellido2() {
        return $this->apellido2;
    }
    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }
    public function getTipoVia() {
        return $this->tipo_via;
    }
    public function setTipoVia($tipo_via) {
        $this->tipo_via = $tipo_via;
    }
    public function getNombreVia() {
        return $this->nombre_via;
    }
    public function setNombreVia($nombre_via) {
        $this->nombre_via = $nombre_via;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function buscarUsuarioPorNickYEmail($nick, $email) {
        try {
            $connection = $this->db->getConnection();
            $query = $connection->prepare("
                SELECT * 
                FROM usuario 
                WHERE nick = :nick AND email = :email
            ");
            $query->execute(['nick' => $nick, 'email' => $email]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $this->setNick($user['nick']);
                $this->setEmail($user['email']);
                $this->setPassword($user['password']);
                $this->setNombre($user['nombre']);
                $this->setApellido1($user['apellido1']);
                $this->setApellido2($user['apellido2']);
                $this->setTipoVia($user['tipo_via']);
                $this->setNombreVia($user['nombre_via']);
                $this->setNumero($user['numero']);
                $this->setTelefono($user['telefono']);
            }
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function crearUsuario($nick, $email, $password, $nombre, $apellido1, $apellido2, $tipo_via, $nombre_via, $numero, $telefono) {
        try {
            $connection = $this->db->getConnection();
            $query = $connection->prepare("
                INSERT INTO usuario 
                (nick, email, password, nombre, apellido1, apellido2, tipo_via, nombre_via, numero, telefono) 
                VALUES 
                (:nick, :email, :password, :nombre, :apellido1, :apellido2, :tipo_via, :nombre_via, :numero, :telefono)
            ");
            $query->execute([
                'nick'       => $nick,
                'email'      => $email,
                'password'   => $password,
                'nombre'     => $nombre,
                'apellido1'  => $apellido1,
                'apellido2'  => $apellido2,
                'tipo_via'   => $tipo_via,
                'nombre_via' => $nombre_via,
                'numero'     => $numero,
                'telefono'   => $telefono
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
