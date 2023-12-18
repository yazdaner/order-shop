<?php

namespace Yazdan\Comment\Repositories;

use Yazdan\Comment\App\Models\Comment;
use Yazdan\RolePermissions\Repositories\PermissionRepository;

class CommentRepository
{
    const STATUS_NEW = "new";
    const STATUS_APPROVED = "approved";
    const STATUS_REJECTED = "rejected";

    static $statues = [
        self::STATUS_REJECTED,
        self::STATUS_APPROVED,
        self::STATUS_NEW
    ];

    public $query;

    public function __construct()
    {
        $this->query = Comment::query();
    }

    public function paginate()
    {
        return Comment::query()->latest()->paginate();
    }

    public static function store($data)
    {
        return Comment::query()->create([
            "user_id" => auth()->id(),
            "status" => auth()->user()->can(PermissionRepository::PERMISSION_MANAGE_COMMENTS)
                ?
                self::STATUS_APPROVED
                :
                self::STATUS_NEW,
            "comment_id" => array_key_exists("comment_id", $data) ? $data["comment_id"] : null,
            "body" => $data["body"],
            "commentable_id" => $data["commentable_id"],
            "commentable_type" => $data["commentable_type"],
        ]);
    }

    public static function findApproved($id)
    {
        return Comment::query()
            ->where("status", self::STATUS_APPROVED)
            ->where("id", $id)
            ->first();
    }

    public function findOrFail($id)
    {
        return Comment::query()->findOrFail($id);
    }

    public function paginateParents($status = null)
    {
        return $this->query->latest()->paginate(20);
    }

    public function updateStatus($id, string $status)
    {
        return Comment::query()->where("id", $id)->update([
            "status" => $status
        ]);
    }

    public function searchBody($body)
    {
        if (!is_null($body)) {
            $this->query->where("body", "like", "%" . $body . "%");
        }
        return $this;
    }

    public function searchStatus($status)
    {
        if (!is_null($status)) {
            $this->query->where("status", $status);
        }
        return $this;
    }

    public function searchEmail($email)
    {
        if (!is_null($email)) {
            $this->query->whereHas("user", function ($q) use ($email) {
                return $q->where("email", "like", "%" . $email . "%");
            });
        }
        return $this;
    }

    public function searchName($name)
    {
        if (!is_null($name)) {
            $this->query->whereHas("user", function ($q) use ($name) {
                return $q->where("name", "like", "%" . $name . "%");
            });
        }
        return $this;
    }
}
