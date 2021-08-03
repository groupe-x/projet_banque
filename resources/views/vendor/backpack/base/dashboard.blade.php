@extends(backpack_view('blank'))

@php
    /* compter */


  
    $userCount = App\Models\Client::count();
    $operation = App\Models\Operation::count();
    $virement = App\Models\virement::count();


     // notice we use Widget::add() to add widgets to a certain group
    Widget::add()->to('before_content')->type('div')->class('row')->content([
        // notice we use Widget::make() to add widgets as content (not in a group)
        Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-primary')
            ->progressClass('progress-bar')
            ->value($userCount)
            ->description('Clients inscrits.')
            ->progress(100*(int)$userCount/1000),
        // alternatively, to use widgets as content, we can use the same add() method,
        // but we need to use onlyHere() or remove() at the end
       
        // both Widget::make() and Widget::add() accept an array as a parameter
        // if you prefer defining your widgets as arrays
        Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-dark',
            'progressClass' => 'progress-bar',
            'value' => $operation,
            'description' => 'Operation(s) effectué(s).',
            'progress' => (int)$operation/75*100,
        ]),
         Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-info',
            'progressClass' => 'progress-bar',
            'value' => $virement,
            'description' => 'Virement(s) effectué(s).',
            'progress' => (int)$virement,
        ]),
    //     Widget::add()
    //         ->type('progress')
    //         ->class('card border-0 text-white bg-success')
    //         ->progressClass('progress-bar')
    //         ->value($commandesEnCoursCount)
    //         ->description('Achat(s) Validé(s).')
    //         ->progress($commandesEnCoursCount)
    //         ->onlyHere(),
     ]);

   
@endphp

@section('content')
    {{-- In case widgets have been added to a 'content' group, show those widgets. --}}
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])
@endsection