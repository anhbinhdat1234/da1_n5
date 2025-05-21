<?php
namespace App\Models;

use PDO;

abstract class BaseModel
{
    protected PDO $db;
    protected string $table;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function create(array $data): bool
    {
        $cols = array_keys($data);
        $phs  = array_map(fn($c) => ":{$c}", $cols);
        $sql  = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $this->table,
            implode(', ', $cols),
            implode(', ', $phs)
        );
        return $this->db->prepare($sql)->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $sets = implode(', ', array_map(fn($c) => "{$c} = :{$c}", array_keys($data)));
        $data['id'] = $id;
        $sql = sprintf(
            'UPDATE %s SET %s WHERE id = :id',
            $this->table,
            $sets
        );
        return $this->db->prepare($sql)->execute($data);
    }

    public function delete(int $id): bool
    {
        return $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id")->execute(['id' => $id]);
    }
}