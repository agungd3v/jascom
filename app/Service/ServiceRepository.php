<?php

namespace App\Service;

class ServiceRepository
{

  public function getService()
  {
    return Service::all();
  }

  public function saveService($req)
  {
    $data = Service::create([
      'service_name' => $req['service']
    ]);
    return $data;
  }
}
