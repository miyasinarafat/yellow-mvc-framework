<?php
namespace App\Models;


use App\Config\Database;

class Blog extends Model
{
    public function store($title, $slug, $body)
    {
        $sql = "INSERT INTO posts (title, slug, body, created_at, updated_at) VALUES (:title, :slug, :body, :created_at, :updated_at)";
        $request = Database::getConn()->prepare($sql);
        return $request->execute([
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function index()
    {
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $request = Database::getConn()->prepare($sql);
        $request->execute();
        return $request->fetchAll();
    }

    public function show($slug)
    {
        $sql = "SELECT * FROM posts WHERE slug = "."'".$slug."'";
        $request = Database::getConn()->prepare($sql);
        $request->execute();
        return $request->fetch();
    }

    public function showBlog($id)
    {
        $sql = "SELECT * FROM posts WHERE id = "."'".$id."'";
        $request = Database::getConn()->prepare($sql);
        $request->execute();
        return $request->fetch();
    }

    public function update($id, $title, $slug, $body)
    {
        $sql = "UPDATE posts SET title = :title, slug = :slug, body = :body, updated_at = :updated_at WHERE id = :id";
        $request = Database::getConn()->prepare($sql);
        return $request->execute([
            'id' => $id,
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $request = Database::getConn()->prepare($sql);
        return $request->execute([$id]);
    }

}