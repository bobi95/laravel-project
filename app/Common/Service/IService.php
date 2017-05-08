<?php

namespace App\Common\Service;

interface IService {
    public function create();
    public function update();
    public function patch();
    public function delete();
}
