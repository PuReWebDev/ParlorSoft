<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWorkingHourAPIRequest;
use App\Http\Requests\API\UpdateWorkingHourAPIRequest;
use App\Models\WorkingHour;
use App\Repositories\WorkingHourRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class WorkingHourController
 * @package App\Http\Controllers\API
 */

class WorkingHourAPIController extends AppBaseController
{
    /** @var  WorkingHourRepository */
    private $workingHourRepository;

    public function __construct(WorkingHourRepository $workingHourRepo)
    {
        $this->workingHourRepository = $workingHourRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/workingHours",
     *      summary="Get a listing of the WorkingHours.",
     *      tags={"WorkingHour"},
     *      description="Get all WorkingHours",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/WorkingHour")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $workingHours = $this->workingHourRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($workingHours->toArray(), 'Working Hours retrieved successfully');
    }

    /**
     * @param CreateWorkingHourAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/workingHours",
     *      summary="Store a newly created WorkingHour in storage",
     *      tags={"WorkingHour"},
     *      description="Store WorkingHour",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="WorkingHour that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/WorkingHour")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WorkingHour"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateWorkingHourAPIRequest $request)
    {
        $input = $request->all();

        $workingHour = $this->workingHourRepository->create($input);

        return $this->sendResponse($workingHour->toArray(), 'Working Hour saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/workingHours/{id}",
     *      summary="Display the specified WorkingHour",
     *      tags={"WorkingHour"},
     *      description="Get WorkingHour",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WorkingHour",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WorkingHour"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var WorkingHour $workingHour */
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            return $this->sendError('Working Hour not found');
        }

        return $this->sendResponse($workingHour->toArray(), 'Working Hour retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateWorkingHourAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/workingHours/{id}",
     *      summary="Update the specified WorkingHour in storage",
     *      tags={"WorkingHour"},
     *      description="Update WorkingHour",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WorkingHour",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="WorkingHour that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/WorkingHour")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/WorkingHour"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateWorkingHourAPIRequest $request)
    {
        $input = $request->all();

        /** @var WorkingHour $workingHour */
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            return $this->sendError('Working Hour not found');
        }

        $workingHour = $this->workingHourRepository->update($input, $id);

        return $this->sendResponse($workingHour->toArray(), 'WorkingHour updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/workingHours/{id}",
     *      summary="Remove the specified WorkingHour from storage",
     *      tags={"WorkingHour"},
     *      description="Delete WorkingHour",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of WorkingHour",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var WorkingHour $workingHour */
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            return $this->sendError('Working Hour not found');
        }

        $workingHour->delete();

        return $this->sendSuccess('Working Hour deleted successfully');
    }
}
