<?php
namespace lib;

use PDO;
use PDOException;

class Database {
  /** @var PDO|null */
  private static $pdo = null;

  public static function connection(): PDO {
    if (self::$pdo instanceof PDO) {
      return self::$pdo;
    }

    self::bootstrapEnv();

    $host = getenv('MYSQL_HOST') ?: '127.0.0.1';
    $port = getenv('MYSQL_PORT') ?: '3306';
    $dbname = getenv('MYSQL_DATABASE') ?: 'blogdb';
    $user = getenv('MYSQL_USER') ?: 'root';
    $password = getenv('MYSQL_PASSWORD') ?: '';

    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $host, $port, $dbname);
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
      self::$pdo = new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
      throw new \RuntimeException('No se pudo conectar a la base de datos: ' . $e->getMessage(), (int) $e->getCode());
    }

    return self::$pdo;
  }

  private static function bootstrapEnv(): void {
    $envPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';

    if (!is_readable($envPath)) {
      return;
    }

    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
      return;
    }

    foreach ($lines as $line) {
      $trimmed = trim($line);
      if ($trimmed === '' || $trimmed[0] === '#') {
        continue;
      }

      $parts = explode('=', $trimmed, 2);
      if (count($parts) !== 2) {
        continue;
      }

      [$key, $value] = array_map('trim', $parts);
      if ($key === '' || getenv($key) !== false) {
        continue;
      }

      putenv(sprintf('%s=%s', $key, $value));
    }
  }
}
