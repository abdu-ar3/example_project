@extends("layouts.global")

@section("title") Testing @endsection

@section("content")

<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">Testing Relationship Area</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : Area & Periode</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Area</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                            <tr>
                                <td>{{ $periodes->month }}</td>
                                <td>{{ $periodes->year }}</td>
                                <td>@foreach ($periodes->areas as $area)
                                        {{ $area->area }}
                                    @endforeach</td>
                            </tr>
                        
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>


@endsection