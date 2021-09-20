<?php
require_once 'Model.php';

class Item extends Model
{
    public $pdo;

    function validate($data)
    {
        $errors = [];
        //バリデーション
        return $errors;
    }

    function all($limit = 20, $offset = 0)
    {
        //商品一覧データ取得処理
    }

    function findById($id)
    {
        //$id で商品データ取得処理
    }

    function insert($data)
    {
        //商品登録処理
    }

    function update($data)
    {
        //商品更新処理
    }

    function delete($id)
    {
        //商品削除処理
    }

    function findByCode()
    {
        //商品コード検索
    }

    function search($params, $limit = 20, $offset = 0)
    {
        $sql = "SELECT * FROM items";
        $conditions = [];
        if ($params['keyword']) $conditions[] = "name LIKE '%{$params['keyword']}%'";
        if ($params['code']) $conditions[] = "code LIKE '%{$params['code']}%'";
        if ($conditions) {
            $condition = implode(' AND ', $conditions);
            $sql .= " WHERE {$condition}";
        }
        $sql .= " LIMIT {$limit} OFFSET {$offset};";
        $items = $this->pdo->query($sql);
        return $items;
    }
}
