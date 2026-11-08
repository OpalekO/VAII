<?php

namespace App\Controllers;

use App\Models\Workout;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class HomeController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function workout(Request $request): Response
    {
        if ($request->isPost()) {
            $workout = new Workout();
            $workout->setFromRequest($request);
            $workout->save();

            return $this->redirect($this->url(('home.workout')));
        }

        return $this->html([
            'workouts' => Workout::getAll()
        ]);
    }


    public function edit(Request $request): Response
    {

        $id = (int) $request->get('id');
        $workout = Workout::getOne($id);

        if ($workout === null) {
            return $this->redirect($this->url(('home.workout')));
        }

        if ($request->isPost()) {
            $workout->setFromRequest($request);
            $workout->save();

            return $this->redirect($this->url(('home.workout')));
        }

        return $this->html([
            'workout' => $workout
        ], 'edit');
    }

    public function delete(Request $request): Response
    {
        $id = (int) $request->get('id');
        $workout = Workout::getOne($id);

        if ($workout !== null) {
            $workout->delete();
        }

        return $this->redirect($this->url('home.workout'));
    }


    public function index(Request $request): Response
    {
        return $this->html([
            'workouts' => Workout::getAll()
        ]);
    }

    public function contact(Request $request): Response
    {
        return $this->html();
    }
}
