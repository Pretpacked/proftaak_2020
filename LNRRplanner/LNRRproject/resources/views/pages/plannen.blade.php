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
                        <a href="studie" class="w3-bar-item w3-button">Studie</a>
                        <a href="plannen" class="w3-bar-item w3-button">Plannen</a>
                        <a href="rooster" class="w3-bar-item w3-button">Rooster</a>
                        <a href="covid" class="w3-bar-item w3-button">Covid 19</a>
                    </div>

                    <div class="w3-light-grey w3-bar-block float-right" style="width:25%">
                        <h3 class="w3-bar-item">Vakken</h3>
                        <a href="#" class="w3-bar-item w3-button">Nederlands</a>
                        <a href="#" class="w3-bar-item w3-button">Engels</a>
                        <a href="#" class="w3-bar-item w3-button">Spaans</a>
                        <a href="#" class="w3-bar-item w3-button">Afghaans</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
