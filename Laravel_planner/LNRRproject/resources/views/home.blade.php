@extends('layouts.app')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="menu_field">
                        <ul>
                            <li>Plannen</li>
                            <li class="list">Rooster</li>
                            <li class="list">Studie</li>
                            <li class="list">Covid-19</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
