<?php
namespace App\Policy;

use App\Model\Entity\Post;
use Authorization\IdentityInterface;

class PostPolicy
{
    public function canAdd(IdentityInterface $user, Post $post)
    {
        // All logged in users can create Posts.
        return true;
    }

    public function canEdit(IdentityInterface $user, Post $post)
    {
        // logged in users can edit their own Posts.
        return $this->isAuthor($user, $post);
    }

    public function canDelete(IdentityInterface $user, Post $post)
    {
        // logged in users can delete their own Posts.
        return $this->isAuthor($user, $post);
    }

    protected function isAuthor(IdentityInterface $user, Post $post)
    {
        return $post->user_id === $user->getIdentifier();
    }
}
