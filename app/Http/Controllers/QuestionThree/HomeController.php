<?php

namespace App\Http\Controllers\QuestionThree;

use App\Http\Controllers\Controller;
use App\Models\Transition;

class HomeController extends Controller
{
    /**
     * Home Page For Question Two
     */
    public function index()
    {
        $transitions = Transition::all();

        // filter expenses
        $expeses = $transitions->filter(function ($transition) {
            return $transition->type == 'expense';
        });

        // filter incomes
        $incomes = $transitions->filter(function ($transition) {
            return $transition->type == 'income';
        });

        // sum all expenses amount
        $expense_total = $expeses->reduce(function ($pre, $expense) {
            return $pre + $expense->amount;
        }, 0);

        // sum all incomes amount
        $income_total = $incomes->reduce(function ($pre, $income) {
            return $pre + $income->amount;
        }, 0);

        $grand_total = $income_total - $expense_total;

        return view('pages.question-three.home', [
            'expenses' => $expeses,
            'incomes' => $incomes,
            'expense_total' => $expense_total,
            'income_total' => $income_total,
            'grand_total' => $grand_total,
        ]);
    }
}
