<?php

class BookPlatform {
    // Check if a relationship exists
    public static function exists($bookId, $platformId) {
        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("
            SELECT COUNT(*) as count
            FROM book_platform
            WHERE book_id = :book_id AND platform_id = :platform_id
        ");
        $stmt->execute([
            'book_id' => $bookId,
            'platform_id' => $platformId
        ]);

        $row = $stmt->fetch();
        return $row['count'] > 0;
    }

    // Create a new book-platform relationship
    public static function create($bookId, $platformId) {
        // Check if relationship already exists
        if (self::exists($bookId, $platformId)) {
            return false;
        }

        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("
            INSERT INTO book_platform (book_id, platform_id)
            VALUES (:book_id, :platform_id)
        ");

        return $stmt->execute([
            'book_id' => $bookId,
            'platform_id' => $platformId
        ]);
    }

    // Delete a specific book-platform relationship
    public static function remove($bookId, $platformId) {
        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("
            DELETE FROM book_platform
            WHERE book_id = :book_id AND platform_id = :platform_id
        ");

        return $stmt->execute([
            'book_id' => $bookId,
            'platform_id' => $platformId
        ]);
    }

    // Delete all platform relationships for a specific book
    public static function deleteByBook($bookId) {
        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("
            DELETE FROM book_platform
            WHERE book_id = :book_id
        ");
        return $stmt->execute(['book_id' => $bookId]);
    }
}
