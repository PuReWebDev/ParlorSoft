<?php

namespace App\Http\Controllers;

use App\DataTables\WorkingHourDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateWorkingHourRequest;
use App\Http\Requests\UpdateWorkingHourRequest;
use App\Repositories\WorkingHourRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class WorkingHourController extends AppBaseController
{
    /** @var  WorkingHourRepository */
    private $workingHourRepository;

    public function __construct(WorkingHourRepository $workingHourRepo)
    {
        $this->workingHourRepository = $workingHourRepo;
    }

    /**
     * Display a listing of the WorkingHour.
     *
     * @param WorkingHourDataTable $workingHourDataTable
     * @return Response
     */
    public function index(WorkingHourDataTable $workingHourDataTable)
    {
        return $workingHourDataTable->render('working_hours.index');
    }

    /**
     * Show the form for creating a new WorkingHour.
     *
     * @return Response
     */
    public function create()
    {
        return view('working_hours.create');
    }

    /**
     * Store a newly created WorkingHour in storage.
     *
     * @param CreateWorkingHourRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkingHourRequest $request)
    {
        $input = $request->all();

        $workingHour = $this->workingHourRepository->create($input);

        Flash::success('Working Hour saved successfully.');

        return redirect(route('workingHours.index'));
    }

    /**
     * Display the specified WorkingHour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            Flash::error('Working Hour not found');

            return redirect(route('workingHours.index'));
        }

        return view('working_hours.show')->with('workingHour', $workingHour);
    }

    /**
     * Show the form for editing the specified WorkingHour.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            Flash::error('Working Hour not found');

            return redirect(route('workingHours.index'));
        }

        return view('working_hours.edit')->with('workingHour', $workingHour);
    }

    /**
     * Update the specified WorkingHour in storage.
     *
     * @param  int              $id
     * @param UpdateWorkingHourRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkingHourRequest $request)
    {
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            Flash::error('Working Hour not found');

            return redirect(route('workingHours.index'));
        }

        $workingHour = $this->workingHourRepository->update($request->all(), $id);

        Flash::success('Working Hour updated successfully.');

        return redirect(route('workingHours.index'));
    }

    /**
     * Remove the specified WorkingHour from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workingHour = $this->workingHourRepository->find($id);

        if (empty($workingHour)) {
            Flash::error('Working Hour not found');

            return redirect(route('workingHours.index'));
        }

        $this->workingHourRepository->delete($id);

        Flash::success('Working Hour deleted successfully.');

        return redirect(route('workingHours.index'));
    }
}
