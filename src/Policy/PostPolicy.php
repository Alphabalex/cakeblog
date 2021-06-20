<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Post;
use Authorization\IdentityInterface;

/**
 * Post policy
 */
class PostPolicy
{
    /**
     * Check if $user can add Post
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Post $post
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Post $post)
    {
        return true;
    }

    /**
     * Check if $user can edit Post
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Post $post
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Post $post)
    {
        return $this->isAuthor($user, $post);
    }

    /**
     * Check if $user can delete Post
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Post $post
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Post $post)
    {
        return $this->isAuthor($user, $post);
    }

    /**
     * Check if $user can view Post
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Post $post
     * @return bool
     */
    public function canView(IdentityInterface $user, Post $post)
    {
        return $post->user_id === $user->getIdentifier();
    }
}
