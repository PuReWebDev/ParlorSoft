<?php namespace Tests\Repositories;

use App\Models\WorkingHour;
use App\Repositories\WorkingHourRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class WorkingHourRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var WorkingHourRepository
     */
    protected $workingHourRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->workingHourRepo = \App::make(WorkingHourRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->make()->toArray();

        $createdWorkingHour = $this->workingHourRepo->create($workingHour);

        $createdWorkingHour = $createdWorkingHour->toArray();
        $this->assertArrayHasKey('id', $createdWorkingHour);
        $this->assertNotNull($createdWorkingHour['id'], 'Created WorkingHour must have id specified');
        $this->assertNotNull(WorkingHour::find($createdWorkingHour['id']), 'WorkingHour with given id must be in DB');
        $this->assertModelData($workingHour, $createdWorkingHour);
    }

    /**
     * @test read
     */
    public function test_read_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();

        $dbWorkingHour = $this->workingHourRepo->find($workingHour->id);

        $dbWorkingHour = $dbWorkingHour->toArray();
        $this->assertModelData($workingHour->toArray(), $dbWorkingHour);
    }

    /**
     * @test update
     */
    public function test_update_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();
        $fakeWorkingHour = factory(WorkingHour::class)->make()->toArray();

        $updatedWorkingHour = $this->workingHourRepo->update($fakeWorkingHour, $workingHour->id);

        $this->assertModelData($fakeWorkingHour, $updatedWorkingHour->toArray());
        $dbWorkingHour = $this->workingHourRepo->find($workingHour->id);
        $this->assertModelData($fakeWorkingHour, $dbWorkingHour->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_working_hour()
    {
        $workingHour = factory(WorkingHour::class)->create();

        $resp = $this->workingHourRepo->delete($workingHour->id);

        $this->assertTrue($resp);
        $this->assertNull(WorkingHour::find($workingHour->id), 'WorkingHour should not exist in DB');
    }
}
