<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    /**
     * noticesテーブルの主キー
     *
     * @var int
     */
    protected $primaryKey = 'notice_id';

    /**
     * Noticeを所有するUserを取得
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Noticeを所有するBookを取得
     */
    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}