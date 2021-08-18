<li class="nav-item">
    {!! link_to('#tab1', trans('Mascota'), ["class"=>"nav-link active", 'data-toggle' => 'tab']) !!}
</li>
@if(!$edit)
	<li class="nav-item">
	    {!! link_to('#tab2', trans('Propietario'), ["class"=>"nav-link", 'data-toggle' => 'tab']) !!}
	</li>
@endif

