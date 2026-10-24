
<?php

class Model
{
    protected PDO $db;
    protected string $table = '';

    public function __construct()
    {
        $this->db = Database::getInstance()->pdo();
    }

    public function all(): array
    {
        $stmt = $this->db->query(
            "SELECT * FROM `{$this->table}`"
        );

        return $stmt->fetchAll();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM `{$this->table}` WHERE id = ? LIMIT 1"
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            "DELETE FROM `{$this->table}` WHERE id = ?"
        );

        return $stmt->execute([$id]);
    }

    public function count(): int
    {
        $stmt = $this->db->query(
            "SELECT COUNT(*) FROM `{$this->table}`"
        );

        return (int) $stmt->fetchColumn();
    }
}
