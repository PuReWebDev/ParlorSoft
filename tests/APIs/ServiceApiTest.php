<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Service;

class ServiceApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_service()
    {
        $service = factory(Service::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/services', $service
        );

        $this->assertApiResponse($service);
    }

    /**
     * @test
     */
    public function test_read_service()
    {
        $service = factory(Service::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/services/'.$service->id
        );

        $this->assertApiResponse($service->toArray());
    }

    /**
     * @test
     */
    public function test_update_service()
    {
        $service = factory(Service::class)->create();
        $editedService = factory(Service::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/services/'.$service->id,
            $editedService
        );

        $this->assertApiResponse($editedService);
    }

    /**
     * @test
     */
    public function test_delete_service()
    {
        $service = factory(Service::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/services/'.$service->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/services/'.$service->id
        );

        $this->response->assertStatus(404);
    }
}
