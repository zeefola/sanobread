@extends('layouts.frontend')

@section('body')
<body class="faq">
   <div id="page" class="hfeed site">
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'FAQ'])
@endsection

@section('main_content')
      <div id="post-375" class="post-375 page type-page status-publish hentry">
         {{-- <header class="entry-header">
            <h3 class="entry-title">Frequently Asked Questions</h3>
            <p class="entry-subtitle">This Agreement was last modified on 18 December 2016.</p>
         </header> --}}
         <!-- .entry-header -->
         <div class="entry-content">
            <div class="kc-elm kc-css-550442 kc_row">
               <div class="kc-row-container  kc-container">
                  <div class="kc-wrap-columns">
                     <div class="kc-elm kc-css-248013 kc_col-sm-12 col-md-12 kc_column kc_col-sm-12">
                        <div class="kc-col-container">
                           <div class="panel-group" id="accordion">
                              @foreach($datas as $data)
                              <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <h3 class="panel-title">
                                       <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->iteration }}"><i class=""></i> {{ $data->question }}</a>
                                    </h3>
                                 </div>
                                 <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       <p>{{ $data->answer }}</p>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>
      <!-- .entry-content -->
     <!-- #post-## -->
    </main><!-- #main -->
</div>
 <!-- #primary -->
</div>
<!-- .col-full -->
</div>
<!-- #content -->



@endsection