<?php

declare(strict_types=1);

class Blog
{
/**
 * @var PDO
 */
private $pdo;


public function __construct(PDO $pdo)
{
    try {
        $this->pdo = $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}


public function listagem(): array
{
    $sql = 'SELECT * FROM posts';

    $result = $this->pdo->query($sql);
    $posts = $result->fetchAll(PDO::FETCH_ASSOC);

    return $posts;


}


public function inclusao(string $title, string $content): void
{
    $sql = 'INSERT INTO posts (title, content) VALUES (?, ?)';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$title, $content]);
}

public function edicao(int $id, string $title, string $content): void
{
    $sql = 'UPDATE posts SET title = ?, content = ? WHERE id = ?';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$title, $content, $id]);

}

public function excluir(int $id): void
{
    $sql = 'DELETE FROM posts WHERE id = ?';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id]);
}

}
