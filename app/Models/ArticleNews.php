<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


class ArticleNews extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'content',
        'category_id',
        'author_id',
        //'is_featured',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relasi ke Author
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    // public function up()
    // {
    //     Schema::table('article_news', function (Blueprint $table) {
    //         $table->boolean('is_featured')->default(false); // Kolom is_featured tipe boolean
    //     });
    // }

    // public function down()
    // {
    //     Schema::table('article_news', function (Blueprint $table) {
    //         $table->dropColumn('is_featured');
    //     });
    // }
}
