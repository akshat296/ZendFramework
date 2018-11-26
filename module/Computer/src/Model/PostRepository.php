<?php
/**
 * Created by Damien G. (damien.galicher@gmail.com)
 * Date: 08/08/2016 - Time: 17:50
 */

namespace Computer\Model;

use DomainException;

class PostRepository implements PostRepositoryInterface
{
    private $data = [
        1 => [
            'id'    => 1,
            'title' => 'Hello World #1',
            'text'  => 'This is our first computer post!',
        ],
        2 => [
            'id'    => 2,
            'title' => 'Hello World #2',
            'text'  => 'This is our second computer post!',
        ],
        3 => [
            'id'    => 3,
            'title' => 'Hello World #3',
            'text'  => 'This is our third computer post!',
        ],
        4 => [
            'id'    => 4,
            'title' => 'Hello World #4',
            'text'  => 'This is our fourth computer post!',
        ],
        5 => [
            'id'    => 5,
            'title' => 'Hello World #5',
            'text'  => 'This is our fifth computer post!',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    public function findAllPosts()
    {
        return array_map(function ($post) {
            return new Post(
                $post['title'],
                $post['text'],
                $post['id']
            );
        }, $this->data);
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        if (! isset($this->data[$id])) {
            throw new DomainException(sprintf('Post by id "%s" not found', $id));
        }

        return new Post(
            $this->data[$id]['title'],
            $this->data[$id]['text'],
            $this->data[$id]['id']
        );
    }

}