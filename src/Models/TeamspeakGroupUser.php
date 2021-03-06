<?php

namespace Seat\Warlof\Teamspeak\Models;

use Illuminate\Database\Eloquent\Model;
use Seat\Web\Models\Group;
use Seat\Web\Models\User;

class TeamspeakGroupUser extends Model
{
    protected $fillable = ['group_id', 'teamspeak_sgid', 'enable'];

    public function group()
    {
        return $this->belongsTo(TeamspeakGroup::class, 'teamspeak_sgid', 'id');
    }

    public function user()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
	
}
