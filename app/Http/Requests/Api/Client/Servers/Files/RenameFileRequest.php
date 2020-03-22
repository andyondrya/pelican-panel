<?php

namespace Pterodactyl\Http\Requests\Api\Client\Servers\Files;

use Pterodactyl\Models\Permission;
use Pterodactyl\Contracts\Http\ClientPermissionsRequest;
use Pterodactyl\Http\Requests\Api\Client\ClientApiRequest;

class RenameFileRequest extends ClientApiRequest implements ClientPermissionsRequest
{
    /**
     * The permission the user is required to have in order to perform this
     * request action.
     *
     * @return string
     */
    public function permission(): string
    {
        return Permission::ACTION_FILE_UPDATE;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'rename_from' => 'string|required',
            'rename_to' => 'string|required',
        ];
    }
}
