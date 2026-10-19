<?php

namespace App\Actions\Books;

use App\Models\Book;

class GetBooksAction
{
    /**
     * Retrieve all books without pagination.
     *
     * @return \Illuminate\Database\Eloquent\Collection<int, Book>
     */
    public function execute()
    {
        return Book::all();
    }
}
