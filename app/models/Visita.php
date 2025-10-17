<?php
namespace app\models;

use lib\Database;
use PDO;

class Visita {
  public static function crear(array $datos): int {
    $pdo = Database::connection();
    self::asegurarSchema($pdo);

    $sql = 'INSERT INTO visitas (nombre, email, motivo, fecha_visita, comentarios)
            VALUES (:nombre, :email, :motivo, :fecha_visita, :comentarios)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
      ':nombre' => $datos['nombre'],
      ':email' => $datos['email'],
      ':motivo' => $datos['motivo'],
      ':fecha_visita' => $datos['fecha_visita'],
      ':comentarios' => $datos['comentarios'],
    ]);

    return (int) $pdo->lastInsertId();
  }

  public static function ultimas(int $limite = 10): array {
    $pdo = Database::connection();
    self::asegurarSchema($pdo);

    $stmt = $pdo->prepare(
      'SELECT nombre, email, motivo, fecha_visita, comentarios, created_at
       FROM visitas
       ORDER BY created_at DESC
       LIMIT :limite'
    );
    $stmt->bindValue(':limite', $limite, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
  }

  private static function asegurarSchema(PDO $pdo): void {
    static $creada = false;
    if ($creada) {
      return;
    }

    $sql = <<<SQL
CREATE TABLE IF NOT EXISTS visitas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(120) NOT NULL,
  email VARCHAR(160) NOT NULL,
  motivo VARCHAR(120) NOT NULL,
  fecha_visita DATE NOT NULL,
  comentarios TEXT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;

    $pdo->exec($sql);
    $creada = true;
  }
}
