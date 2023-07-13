<?php

namespace App\Exports;

use App\Models\User;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements FromView, WithEvents
{
    use RegistersEventListeners;

    private $users;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    public static function afterSheet(AfterSheet $event)
   {
        $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(5);
        $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(30);
        $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
        $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(30);
        $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(30);
   }

    public function view(): View
    {
        return view('pages.question-one.reports.users', [
            'users' => $this->users
        ]);
    }
}
