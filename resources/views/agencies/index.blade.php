@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Agencies <small class="text-muted">with caregiver count</small></h1>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Agency Name</th>
                        <th>Agencies Caregivers</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($agencies as $agency)
                    <tr>
                        <td>
                        <a href="{{ route('agencies.show', $agency) }}">{{ $agency->name }}</a>
                         </td>
                        <td>
                        <span class="badge badge-primary badge-pill">
                        {{ App\Http\Controllers\AgencyController::getAgencyCaregiversCount($agency->id)}}

                     </span>
                        </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
