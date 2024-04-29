<?php

namespace App\Http\Controllers\Api\Remote\Servers;

use Illuminate\Http\Request;
use App\Models\Server;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ServerContainersController extends Controller
{
    /**
     * Updates the server container's status on the Panel
     */
    public function status(Server $server, Request $request): JsonResponse
    {
        $status = fluent($request->json()->all())->get('data.new_state');

        cache()->set("servers.$server->uuid.container.status", $status, now()->addMinute());

        return new JsonResponse([]);
    }
}
