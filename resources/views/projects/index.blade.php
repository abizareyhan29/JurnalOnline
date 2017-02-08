@extends('layouts.master')

@section('content')

@include('layouts.partials.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    @include('layouts.partials.alerts')
    <h1 class="page-header">
        Projects
        <a class="btn btn-info" href="{{ route('projects.create') }}">Project Baru</a>
    </h1>

    <div class="container">
      @if( $project )
          <div class="row">
              @foreach ($project as $proj)
                  <div class="col-md-3" style="border:1px solid #ccc;margin-left:5px;max-width:400px;max-height">
                    <h2><a href="/projects/{{ $proj->id }}">{!! $proj->project_name !!}</a></h2>
                    <p>Deadline : {!! date_format(new DateTime($proj->due_date), "D, m Y") !!}</p>
                    <p>Status Project: {!! $proj->project_status !!}</p>
                    <p>Catatan: 0</p>
                    <p>Komentar: 0</p>
                    <p>Attachments: 0</p>
                    <a href="{{url('del_pro',$proj->id)}}" class="btn btn-success">Selesai</a>
                  </div>
              @endforeach
          </div>
      @endif

      @if( $projects2 )
          <div class="row">
              @foreach ($projects2 as $proj)
                  <div class="col-md-3" style="border:1px solid #ccc;margin-left:5px;">
                    <h2><a href="/projects/{{ $proj->projects->id }}">{!! $proj->projects->project_name !!}</a></h2>
                    <p>Deadline : {!! date_format(new DateTime($proj->projects->due_date), "D, m Y") !!}</p>
                    <p>Status Project: {!! $proj->projects->project_status !!}</p>
                    <p>Catatan : 0</p>
                    <p>Komentar: 0</p>
                    <p>Attachments: 0</p>
                  </div>
              @endforeach
          </div>
      @endif
    </div>

    @if( $project->isEmpty() && $projects2->isEmpty())
       <h3>There are currently no Projects</h3>
    @endif
</div>
@stop
