<?php
require_once 'BaseModel.php';

class UserModel extends BaseModel {
    // Creamos un nuevo usuario
    public function createUser($username, $password, $email) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuarios (nombre_usuario, password_hash, correo) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$username, $hashed_password, $email]);
    }

    // Verificaamos credenciales de inicio de sesión
    public function getUserByUsername($username) {
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}