@if(!Auth::user()->client)
    @include('Client.client_registration_completion')
@else

    @include('Client.car_search')



@endif