<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function getById($id)
    {
        return Post::find($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($id, array $data)
    {
        return Post::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Post::destroy($id);
    }
}
