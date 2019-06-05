@if(!Auth::user()->entreprise)
    @include('Entreprise.enterprise_registration_completion')
@else
    @if(sizeof(\App\models\Entreprise::find(Auth::user()->entreprise->id)->agences) == 0)
        <h3>Add Agency</h3>
        @include('Agence.agency_add')
    @else
        @include('Agence.agencies_list')
    @endif
@endif
