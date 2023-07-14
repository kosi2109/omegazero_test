<x-layouts.app title="Home">
    <x-partials.introduce number='3' />

    <div class="shadow rounded p-5">
        <h2>Income & Expense (Profit Or Loss) Section</h2>

        <table class="table table-bordered">
            <thead>
              <tr>
                  <th scope="col" class="w-25">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col" style="width: 10%;">Date</th>
                  <th scope="col" style="width: 15%;">Amount</th>
              </tr>
            </thead>
            <tbody>
                {{-- incomes --}}
                <tr class="bg-secondary text-white fw-bold">
                    <td colspan="4">Incomes</td>
                </tr>
                @foreach ($incomes as $income)
                <tr>
                    <td>{{$income->title}}</td>
                    <td>{{$income->description}}</td>
                    <td>{{$income->created_at->format('d-m-Y')}}</td>
                    <td class="text-end">{{$income->amount}}</td>
                </tr>
                @endforeach   
                
                {{-- expenses --}}
                <tr class="bg-secondary text-white fw-bold">
                    <td colspan="4">Expenses</td>
                </tr>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{$expense->title}}</td>
                    <td>{{$income->description}}</td>
                    <td>{{$income->created_at->format('d-m-Y')}}</td>
                    <td class="text-end">{{$expense->amount}}</td>
                </tr>
                @endforeach 
                <tr></tr>  
                <tr></tr>
                
                <tr class="bg-secondary text-white fw-bold">
                    <td colspan="3">Income Total</td>
                    <td class="text-end">{{$income_total}}</td>
                </tr>
                <tr class="bg-secondary text-white fw-bold">
                    <td colspan="3">Expense Total</td>
                    <td class="text-end">({{$expense_total}})</td>
                </tr>

                <tr><td></td><td></td></tr>  
                <tr><td></td><td></td></tr>  
                
                <tr class="bg-secondary text-white fw-bold fs-4">
                    <td colspan="3">Grand Total</td>
                    <td class="text-end">{{$grand_total}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>

    <div class="mt-5">
        <h4>Description:</h4>
        <ul>
            <li>In This Question, I'm not clear what you want eg.Profit and loss for what and how many field I need to calculate.</li>
            <li class="text-danger">So I make very sample transitions to calculate Profit Or Loss.</li>
        </ul>
    </div>
</x-layouts.app>