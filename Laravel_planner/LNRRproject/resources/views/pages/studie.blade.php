@extends('layouts.app')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <!-- Sidebar -->
                    <div class="w3-sidebar w3-light-grey w3-bar-block sidebar" style="width:25%">
                        <h3 class="w3-bar-item">Menu</h3>
                        <a href="pages.studie" class="w3-bar-item w3-button">Studie</a>
                        <a href="pages.plannen" class="w3-bar-item w3-button">Plannen</a>
                        <a href="pages.rooster" class="w3-bar-item w3-button">Rooster</a>
                        <a href="pages.covid" class="w3-bar-item w3-button">Covid 19</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
