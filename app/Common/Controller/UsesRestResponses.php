<?php

namespace App\Common\Controller;

trait UsesRestResponses
{
    protected function okResponse($body)
    {
        return response($body ?: [], 200);
    }
}
