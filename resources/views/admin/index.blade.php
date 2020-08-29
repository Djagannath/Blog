@extends('admin.layout.template')

@section('title', $title)

@section('content')
  <div class="row">

    {{-- BEGIN SIDEBAR --}}
    <div class="col sidebar pl-4 pr-4">

      SIDEBAR

    </div>

    {{-- BEGIN MAIN --}}
    <div class="col">

      {{-- BEGIN HEADER --}}
      <div class="row">
        <div class="col header text-center">
          ADMIN PANEL
        </div>
      </div>

      {{-- BEGIN CONTENT --}}
      <div class="main">

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
        </div>

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
          <div class="col block p-4">BLOCK 2</div>
        </div>

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
          <div class="col block p-4">BLOCK 2</div>
          <div class="col block p-4">BLOCK 3</div>
          <div class="col block p-4">BLOCK 4</div>
        </div>

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
        </div>

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
          <div class="col block p-4">BLOCK 2</div>
        </div>

        <div class="row">
          <div class="col block p-4">BLOCK 1</div>
        </div>

      </div>

      {{-- BEGIN FOOTER --}}
      <div class="row">
        <div class="col  pt-4 text-center">
          ADMIN PANEL
        </div>
      </div>
    </div>

  </div>
@endsection