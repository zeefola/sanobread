@extends('layouts.frontend')

@section('body')
<body class="error404 group-blog full-width woocommerce-active">
   <div id="page" class="hfeed site">
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Error 404'])
@endsection

@section('main_content')       
            <div class="error-404 not-found">
                <div class="page-content">
                   <header class="page-header">
                      <h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
                   </header>
                   <!-- .page-header -->
                   <p>Nothing was found at this location. Try searching, or check out the links below.</p>
                </div>
                <!-- .page-content -->
            </div>
            <!-- .error-404 -->
@endsection