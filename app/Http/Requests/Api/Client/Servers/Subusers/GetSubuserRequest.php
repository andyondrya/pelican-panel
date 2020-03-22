<?php

namespace Pterodactyl\Http\Requests\Api\Client\Servers\Subusers;

use Pterodactyl\Models\Permission;
use Pterodactyl\Http\Requests\Api\Client\ClientApiRequest;

class GetSubuserRequest extends ClientApiRequest
{
    /**
     * Confirm that a user is able to view subusers for the specified server.
     *
     * @return string
     */
    public function permission(): string
    {
        return Permission::ACTION_USER_READ;
    }
}
