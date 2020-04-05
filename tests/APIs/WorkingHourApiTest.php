<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\WorkingHour;

class WorkingHourApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/working_hours', $workingHour
        );

        $this->assertApiResponse($workingHour);
    }

    /**
     * @test
     */
    public function test_read_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/working_hours/'.$workingHour->id
        );

        $this->assertApiResponse($workingHour->toArray());
    }

    /**
     * @test
     */
    public function test_update_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();
        $editedWorkingHour = factory(WorkingHour::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/working_hours/'.$workingHour->id,
            $editedWorkingHour
        );

        $this->assertApiResponse($editedWorkingHour);
    }

    /**
     * @test
     */
    public function test_delete_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/working_hours/'.$workingHour->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/working_hours/'.$workingHour->id
        );

        $this->response->assertStatus(404);
    }
}
