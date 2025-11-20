<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function viewAny(User $user)
{
    return true; // semua role boleh melihat daftar buku
}

public function view(User $user)
{
    return true; // semua role boleh melihat detail
}

public function create(User $user)
{
    return in_array($user->role, ['admin', 'staff']);
}

public function update(User $user)
{
    return in_array($user->role, ['admin', 'staff']);
}

public function delete(User $user)
{
    return $user->role === 'admin';
}

}