<?php
namespace App\Models;

use PDO;

class AdminModel extends BaseModel
{
    protected string $table = 'admins';

    /**
     * Find administrator by username
     * @param string $username
     * @return array|null
     */
    public function findByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM {$this->table} WHERE username = :username LIMIT 1"
        );
        $stmt->execute(['username' => $username]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        return $admin ?: null;
    }

    /**
     * Create new administrator with hashed password
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function createAdmin(string $username, string $password): bool
    {
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];
        return $this->create($data);
    }
}
